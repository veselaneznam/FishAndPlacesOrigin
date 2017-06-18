<?php

namespace FishAndPlaces\UI\Bundle\AdminBundle\Controller;

use FishAndPlaces\GreenObject\Application\GreenObject\Image\DeleteGreenObjectImagesCommand;
use FishAndPlaces\GreenObject\Application\GreenObject\Image\UpdateGreenObjectImagesCommand;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Response;

class DamImageController extends Controller
{
    const SUCCESS_MESSAGE = '%d Image uploaded successfully!';
    const TRY_AGAIN_MESSAGE = '%d Upload failed! Please try again!';
    const INVALID_FILE_SIZE_MESSAGE = '%d ***Invalid file Size or Type***, Valid size is %s KB';
    const VALID_SIZE = 100000;

    /**
     * @param Request $request
     * @Route("/dam/images/{$id}", name="dam_images_list")
     *
     * @return Response
     */
    public function indexAction(Request $request)
    {
        $damQueryService = $this->get('fish_and_places.dam_query_service');
        $dam = $damQueryService->getDam((int) $request->get('id'));
        return $this->render('@Admin/damImage/list.html.twig', array(
            'damImageCollection' => $dam->getImageCollection(),
            'path' => $this->getParameter('images_upload'),
            'dam' => $dam,
        ));
    }

    /**
     * @param Request $request
     * @Route("/dam/upload/images/{$id}", name="dam_images_upload")
     * @Method({"POST"})
     *
     * @return Response
     */
    public function uploadImagesAction(Request $request)
    {
        $damQueryService = $this->get('fish_and_places.dam_query_service');
        $damRepresentation = $damQueryService->getDam((int) $request->get('id'));
        $damImageCollection = [];
        $successCounter = 0;
        $tryAgainCounter = 0;
        $invalidSizeCounter = 0;
        if (isset($_POST['submit'])) {

            $target_path = $this->getParameter('images_upload');
            for ($imageIndex = 0; $imageIndex < count($_FILES['file']['name']); $imageIndex++) {

                $validextensions = array("jpeg", "jpg", "png");

                $ext = explode('.', basename($_FILES['file']['name'][$imageIndex]));

                $file_extension = end($ext);

                $filename = md5(uniqid()) . "." . $ext[count($ext) - 1];

                if (($_FILES["file"]["size"][$imageIndex] < self::VALID_SIZE)
                    && in_array($file_extension, $validextensions)
                ) {
                    if (move_uploaded_file($_FILES['file']['tmp_name'][$imageIndex], $target_path . $filename)) {
                        $successCounter ++;
                        $damImageCollection[] = $filename;
                    } else {
                        $tryAgainCounter ++;
                    }
                } else {
                    $invalidSizeCounter ++;
                }
            }
            $this->updateImages($damRepresentation, $damImageCollection);
        }

        if(0 !== $successCounter) {
            $this->addFlash('notice', sprintf(self::SUCCESS_MESSAGE, $successCounter));
        }

        if(0 !== $tryAgainCounter) {
            $this->addFlash('error', sprintf(self::TRY_AGAIN_MESSAGE, $tryAgainCounter));
        }
        if(0 !== $invalidSizeCounter) {
            $this->addFlash('error', sprintf(self::INVALID_FILE_SIZE_MESSAGE, $invalidSizeCounter, self::VALID_SIZE/1024));
        }

        return $this->redirectToRoute('dam_images_list', array(
            'id' => $damRepresentation->getId()
        ));
    }

    /**
     * @param Request $request
     * @Route("/dam/images/delete/{id}", name="dam_images_delete")
     *
     * @return RedirectResponse
     */
    public function deleteAction(Request $request)
    {
        $damImageQueryService = $this->get('fish_and_places.dam_images_query_service');
        $damImageRepresentation = $damImageQueryService->getDamImage((int) $request->get('id'));
        $imagePath = $this->getParameter('images_upload');

        $damService = $this->get('fish_and_places.dam_service');
        $damService->deleteDamImages(new DeleteGreenObjectImagesCommand([$damImageRepresentation], $this->getUser()));

        $fileName = $imagePath . $damImageRepresentation->getImageSrc();
        $this->deletePhysicalFile($fileName);

        return $this->redirectToRoute('dam_images_list', array(
            'id' => $damImageRepresentation->getGreenObject()->getId()
        ));
    }

    /**
     * @param $damRepresentation
     * @param $damImageCollection
     */
    public function updateImages($damRepresentation, $damImageCollection)
    {
        $damQueryService = $this->get('fish_and_places.dam_service');

        $damImageCollection = new UpdateGreenObjectImagesCommand(
            $damRepresentation,
            $this->getUser(),
            $damImageCollection
        );

        $damQueryService->updateImages($damImageCollection);
    }

    /**
     * @param string $fileName
     */
    public function deletePhysicalFile($fileName)
    {
        if (file_exists($fileName)) {
            unlink($fileName);
        }
    }
}

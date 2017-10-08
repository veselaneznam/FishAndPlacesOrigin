<?php

namespace FishAndPlaces\UI\Bundle\AdminBundle\Controller;

use FishAndPlaces\GreenObject\Application\GreenObject\GreenObjectQueryService;
use FishAndPlaces\GreenObject\Application\GreenObject\GreenObjectRepresentation;
use FishAndPlaces\GreenObject\Application\GreenObject\GreenObjectService;
use FishAndPlaces\GreenObject\Application\GreenObject\GreenObjectServiceFactory;
use FishAndPlaces\GreenObject\Application\GreenObject\Image\DeleteGreenObjectImagesCommand;
use FishAndPlaces\GreenObject\Application\GreenObject\Image\UpdateGreenObjectImagesCommand;
use FishAndPlaces\GreenObject\Domain\Model\Image;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Response;

class ImageController extends Controller
{
    const SUCCESS_MESSAGE = '%d Image uploaded successfully!';
    const TRY_AGAIN_MESSAGE = '%d Upload failed! Please try again!';
    const INVALID_FILE_SIZE_MESSAGE = '%d ***Invalid file Size or Type***, Valid size is %s KB';
    const VALID_SIZE = 10000000;

    /**
     * @var GreenObjectQueryService
     */
    private  $greenObjectQueryService;

    /**
     * @param Request $request
     * @Route("/green_object/images/{id}", name="green_object_images_list")
     *
     * @return Response
     */
    public function indexAction(Request $request)
    {
        $greenObjectQueryService = $this->getQueryService();
        $greenObject = $greenObjectQueryService->getGreenObject((int) $request->get('id'));
        return $this->render('@Admin/greenObjectImage/list.html.twig', array(
            'imageCollection' => $greenObject->getImageCollection(),
            'path' => $this->getParameter('images_upload'),
            'greenObject' => $greenObject,
        ));
    }

    /**
     * @param Request $request
     * @Route("/green_object/upload/images/{id}", name="green_object_images_upload")
     * @Method({"GET", "POST"})
     *
     * @return Response
     */
    public function uploadImagesAction(Request $request)
    {
        $greenObjectQueryService = $this->getQueryService();
        $greenObjectRepresentation = $greenObjectQueryService->getGreenObject((int) $request->get('id'));
        $imageCollection = [];
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
                        $imageCollection[] = $filename;
                    } else {
                        $tryAgainCounter ++;
                    }
                } else {
                    $invalidSizeCounter ++;
                }
            }
            $this->updateImages($greenObjectRepresentation, $imageCollection);
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

        return $this->redirectToRoute('green_object_images_list', array(
            'id' => $greenObjectRepresentation->getId()
        ));
    }

    /**
     * @param Request $request
     * @Route("/green_object/images/delete/{id}", name="green_object_images_delete")
     *
     * @return RedirectResponse
     */
    public function deleteAction(Request $request)
    {
        $green_objectImageQueryService = $this->get('fish_and_places.images_query_service');
        $greenObjectImageRepresentation = $green_objectImageQueryService->getImage((int) $request->get('id'));
        $imagePath = $this->getParameter('images_upload');

        $greenObjectService = GreenObjectServiceFactory::initService(
            $greenObjectImageRepresentation->getGreenObject(),
            $this->container
        );

        $greenObjectService->deleteImages(new DeleteGreenObjectImagesCommand([$greenObjectImageRepresentation]));

        $fileName = $imagePath . $greenObjectImageRepresentation->getImageSrc();
        $this->deletePhysicalFile($fileName);

        return $this->redirectToRoute('green_object_images_list', array(
            'id' => $greenObjectImageRepresentation->getGreenObject()->getId()
        ));
    }

    /**
     * @param GreenObjectRepresentation $greenObjectRepresentation
     * @param Image[] $imagesCollection
     */
    public function updateImages(GreenObjectRepresentation $greenObjectRepresentation, $imagesCollection)
    {
        /**
         * @var GreenObjectService $greenObjectService
         */
        $greenObjectService = GreenObjectServiceFactory::initService(
            $greenObjectRepresentation->getGreenObject(),
            $this->container
        );

        $imagesCollection = new UpdateGreenObjectImagesCommand(
            $greenObjectRepresentation, $imagesCollection
        );

        $greenObjectService->updateImages($imagesCollection);
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

    /**
     * @return GreenObjectQueryService
     */
    public function getQueryService()
    {
        if (null === $this->greenObjectQueryService) {

            $this->greenObjectQueryService = $this->get('fish_and_places.green_object_query_service');
        }

        return $this->greenObjectQueryService;
    }
}

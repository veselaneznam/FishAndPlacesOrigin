<?php

namespace FishAndPlaces\UI\Bundle\AdminBundle\Controller;

use FishAndPlaces\Dam\Application\Dam\UpdateDamCommand;
use FishAndPlaces\Dam\Application\Fish\FishQueryService;
use FishAndPlaces\Dam\Application\Dam\CreateNewDamCommand;
use FishAndPlaces\Dam\Application\Dam\DamQueryService;
use FishAndPlaces\Dam\Application\Dam\DamRepresentation;
use FishAndPlaces\Dam\Domain\Model\Dam;
use FishAndPlaces\UI\Bundle\AdminBundle\Form\DamType;
use FishAndPlaces\UI\Bundle\DamBundle\Form\DamSearchType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\Form\Form;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class DamController extends Controller
{
    /**
     * @param Request $request
     *
     * @Route("/dam", name="dam_list")
     * @Method({"GET", "POST"})
     * @return Response
     */
    public function indexAction(Request $request)
    {
        /**
         * @var DamQueryService $damQueryService
         */
        $damQueryService = $this->get('fish_and_places.dam_query_service');

        $damCollection = $damQueryService->getDamCollection();
        $searchForm = $this->createSearchForm();

        return $this->render('@Admin/dam/list.html.twig', array(
            'damCollection' => $damCollection,
            'title' => "Dam List",
            'path' => $this->getParameter('images_upload'),
            'searchForm' => $searchForm->createView(),
        ));
    }

//    /**
//     * @param Request $request
//     *
//     * @Route("/delete/list", name="deleted_dam_list")
//     * @return Response
//     */
//    public function deletedDamListAction(Request $request)
//    {
//        /**
//         * @var DamQueryService $damQueryService
//         */
//        $damQueryService = $this->get('fish_and_places.dam_query_sevice');
//
//        $damCollection = $damQueryService->getDeletedProducts();
//
//        $searchForm = $this->createSearchForm();
//        if ($request->getMethod() == 'POST') {
//            $searchForm->handleRequest($request);
//            $damCollection = $damQueryService->search($searchForm->getData());
//        }
//
//        return $this->render('@Shop/product/list.html.twig', array(
//            'damCollection' => $damCollection,
//            'title' => "Deleted Dam List",
//            'searchForm' => $searchForm->createView()
//        ));
//    }

    /**
     * @param Request $request
     *
     * @Route("/dam/add", name="create_dam")
     * @return Response
     */
    public function addAction(Request $request)
    {
        $damForm = $this->createForm(DamType::class,
            new DamRepresentation(),
            [
                'fishQueryService' => $this->get('fish_and_places.fish_query_service'),
            ]
        );
        $damForm->handleRequest($request);

        if ($damForm->isSubmitted() && $damForm->isValid()) {
            /**
             * @var DamRepresentation $damRepresentation
             */
            $damRepresentation = $damForm->getData();
            $file = $damForm->get('mainImage')->getData();
            $fileName = $this->get('fish_and_places.images_uploader')->upload($file);

            $this->createDam($damForm->getData(), $fileName);

            return $this->redirectToRoute('dam_list');
        }

        return $this->render('@Admin/entity.html.twig', array(
            'form' => $damForm->createView(),
            'title' => 'New Dam',
            'backUrl' => '/dam'
        ));
    }

    /**
     * @param Request $request
     *
     * @Route("/dam/edit/{id}", name="edit_dam")
     * @return Response
     */
    public function editAction(Request $request, $id)
    {
        $damQueryService = $this->get('fish_and_places.dam_query_service');

        $damRepresentation = $damQueryService->getDam($id);

        if(null !==$damRepresentation->getMainImage()) {
            $damRepresentation->setMainImage(
                new File($this->getParameter('images_upload').'/'.$damRepresentation->getMainImage()->getImageSrc()));
        }

        $damForm = $this->createForm(DamType::class,
            $damRepresentation,
            [
                'fishQueryService' => $this->get('fish_and_places.fish_query_service'),
            ]
        );

        $damForm->handleRequest($request);

        if ($damForm->isSubmitted() && $damForm->isValid()) {

            $file = $damForm->get('mainImage')->getData();
            $fileName = $this->get('fish_and_places.images_uploader')->upload($file);
            $this->updateDam($damForm->getData(), $fileName);

            return $this->redirectToRoute('dam_list');
        }

        return $this->render('@Admin/entity.html.twig', array(
            'form' => $damForm->createView(),
            'currentFishCollection' => $damRepresentation->getFishCollection(),
            'title' => 'Edit Dam',
            'backUrl' => '/dam'
        ));
    }
//
//    /**
//     * @param Request $request
//     *
//     * @Route("/delete/{id}", name="delete_product")
//     * @Method({"GET", "DELETE"})
//     *
//     * @return JsonResponse|RedirectResponse
//     */
//    public function deleteAction(Request $request, $id)
//    {
//        $productQueryService = $this->get('fish_and_places.dam_query_sevice');
//        $product = $productQueryService->getProduct($id);
//
//        $form = $this->createDeleteForm($product->getId());
//        if ($request->getMethod() == 'DELETE') {
//            $form->handleRequest($request);
//            if ($form->isSubmitted() && $form->isValid()) {
//                $damQueryService = $this->get('fish_and_places.dam_servoce');
//
//                $damQueryService->delete(new DeleteProductCommand($product));
//
//                $response['success'] = true;
//                $response['message'] = 'Deleted Successfully!';
//            } else {
//                $response['success'] = false;
//                $response['message'] = 'Sorry category could not be deleted!';
//            }
//
//            $this->addFlash('notice', 'Deleted Successfully!');
//            return $this->redirectToRoute('homepage');
//        }
//
//        return $this->render('@Shop/product/delete.html.twig', array(
//            'delete_form' => $form->createView(),
//            'product' => $product
//        ));
//    }
//
//    /**
//     * @param Request $request
//     *
//     * @Route("/activate/{id}", name="activate_product")
//     * @Method({"GET", "POST"})
//     *
//     * @return JsonResponse|RedirectResponse
//     */
//    public function activateAction(Request $request, $id)
//    {
//        $productQueryService = $this->get('fish_and_places.dam_query_sevice');
//        $product = $productQueryService->getProduct($id);
//
//        $form = $this->createActivateForm($product->getId());
//        if ($request->getMethod() == 'POST') {
//            $form->handleRequest($request);
//            if ($form->isSubmitted() && $form->isValid()) {
//                $damQueryService = $this->get('credissimo.product_service');
//
//                $damQueryService->activate(new ActivateProductCommand($product));
//
//                $response['success'] = true;
//                $response['message'] = 'Activated Successfully!';
//            } else {
//                $response['success'] = false;
//                $response['message'] = 'Sorry category could not be activated!';
//            }
//
//            $this->addFlash('notice', 'Activate Successfully!');
//            return $this->redirectToRoute('deleted_product_list');
//        }
//
//        return $this->render('@Shop/product/activate.html.twig', array(
//            'activate_form' => $form->createView(),
//            'product' => $product
//        ));
//    }
//
    /**
     * @param DamRepresentation $damRepresentation
     * @param string            $fileName
     */
    private function createDam(DamRepresentation $damRepresentation, $fileName)
    {
        $damQueryService = $this->get('fish_and_places.dam_service');

        $productCreate = new CreateNewDamCommand(
            $damRepresentation,
            $this->getUser(),
            $fileName
        );

        $damQueryService->create($productCreate);
    }

    /**
     * @param DamRepresentation $damRepresentation
     * @param string  $fileName
     */
    private function updateDam(DamRepresentation $damRepresentation, $fileName)
    {
        $damQueryService = $this->get('fish_and_places.dam_service');

        $productCreate = new UpdateDamCommand(
            $damRepresentation,
            $this->getUser(),
            $fileName
        );

        $damQueryService->update($productCreate);
    }
//
//    /**
//     * @param $productId
//     *
//     * @return Form
//     */
//    private function createDeleteForm($productId)
//    {
//        return $this->createFormBuilder()
//            ->setAction($this->generateUrl('delete_product', array('id' => $productId)))
//            ->setMethod('DELETE')
//            ->getForm();
//    }
//
    /**
     * @return Form
     */
    private function createSearchForm()
    {
        return $this->createForm(DamSearchType::class);
    }
//
//    /**
//     * @param ProductRepresentation   $productRepresentation
//     * @param Form                    $productForm
//     * @param ManufactureQueryService $manufactureService
//     * @param                         $productId
//     */
//    private function updateProduct(
//        ProductRepresentation $productRepresentation,
//        Form $productForm,
//        ManufactureQueryService $manufactureService,
//        $productId
//    ) {
//        $attributeQueryService = $this->get('credissimo.attribute_query_service');
//        $manufacture = $manufactureService->getManufacture($productForm->get('manufacture')->getData());
//
//        $attributes = $attributeQueryService->getAttributesByCategory($manufacture->getCategory());
//        $damQueryService = $this->get('credissimo.product_service');
//
//        $description = $damQueryService->transformToDescription($attributes, $productForm->getData());
//        $productRepresentation
//            ->setId($productId)
//            ->setManufacture($manufacture)
//            ->setCategory($manufacture->getCategory())
//            ->setName($productForm->get('name')->getData())
//            ->setModel($productForm->get('model')->getData())
//            ->setDescription($description)
//            ->setPrice($productForm->get('price')->getData())
//            ->setSlug($productForm->get('slug')->getData())
//            ->setYearOfManufacture($productForm->get('yearOfManufacture')->getData())
//            ->setStatus($productForm->get('status')->getData())
//            ->setProductImages([]);
//
//        $updateProductCommand = new UpdateProductCommand($productRepresentation);
//
//        $damQueryService->update($updateProductCommand);
//    }
//
//    private function createActivateForm($getId)
//    {
//        return $this->createFormBuilder()
//            ->setAction($this->generateUrl('activate_product', array('id' => $getId)))
//            ->setMethod('POST')
//            ->getForm();
//    }
}

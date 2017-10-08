<?php

namespace FishAndPlaces\UI\Bundle\GoGreenBundle\Controller;

use FishAndPlaces\Core\Application\Contact\AddContactCommand;
use FishAndPlaces\Core\Application\Contact\ContactRepresentation;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class PageController extends Controller
{
    /**
     * @param Request $request
     * @param $slug
     * @return Response
     * @Route("/page/{slug}", name="page_view")
     * @Method({"GET", "POST"})
     *
     */
    public function detailViewAction(Request $request, $slug)
    {
        if ($request->getMethod() == 'POST') {
           return $this->handleContactPost($request);
        }

        $cmsPageQueryService = $this->get('fish_and_places.cms_page_query_service');
        $pageRepresentation = $cmsPageQueryService->getPageBySlug($slug);

        if ($slug == 'contact-us') {
            return $this->render('@GoGreen/core/contact_form.html.twig', array(
                'page' => $pageRepresentation
            ));
        }

        return $this->render('@GoGreen/core/page.html.twig', array(
            'page' => $pageRepresentation
        ));
    }

    /**
     * @param Request $request
     * @return RedirectResponse
     */
    private function handleContactPost(Request $request)
    {
        $contactRepresentation = new ContactRepresentation();
        $contactRepresentation->setType($request->get('type'));
        $contactRepresentation->setEmail($request->get('email'));
        $contactRepresentation->setMessage($request->get('message'));

        $addContactCommand = new AddContactCommand($contactRepresentation);
        $contactService = $this->get('fish_and_places.contact_service');
        try {
            $contactService->create($addContactCommand);

            $this->addFlash('notice', $this->get('translator')->trans(
                "Your inquire was send successfully, our team will answer you in the next working days"
            ));

        } catch (\Exception $e) {

            $this->get('logger')->log('error', $e->getMessage());
            $this->addFlash('error', $this->get('translator')->trans(
                "There was a problem with sending your inquire, please try again later"
            ));
        }

        return $this->redirectToRoute('page_view', ['slug' => 'contact-us']);
    }
}

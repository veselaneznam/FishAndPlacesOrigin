<?php
/**
 * Created by PhpStorm.
 * User: vferdinandova
 * Date: 11/3/17
 * Time: 11:21 PM
 */

namespace FishAndPlaces\UI\Bundle\APIBundle\Controller;

use FishAndPlaces\Core\Application\Contact\AddContactCommand;
use FishAndPlaces\Core\Application\Contact\ContactRepresentation;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class ContactController extends Controller
{
    /**
     * @param Request $request
     * @Route("/contact", name="contact-us")
     * @Method({"GET", "POST"})
     *
     * @return JsonResponse
     */
    public function contactAction(Request $request)
    {
        if ($request->getMethod() == 'POST') {
            return $this->handleContactPost($request);
        }
    }

    /**
     * @param Request $request
     * @return JsonResponse
     */
    private function handleContactPost(Request $request)
    {
        $errors = [];
        $translator = $this->get('translator');
        $name = $request->get('name');
        if (empty($name)) {
            $errors['name'] = $translator->trans('Name can not ne empty');
        }

        $phone = $request->get('phone');

        $message = $request->get('message');
        if (empty($message)) {
            $errors['message'] = $translator->trans('Message can not be empty');
        }

        $email = $request->get('email');
        if (empty($message)) {
            $errors['message'] = $translator->trans('Email can not be empty');
        }

        if(!empty($errors)) {
            return new JsonResponse([
                'errors' => $errors,
                'success' => false
            ], Response::HTTP_BAD_REQUEST
            );
        }
        $contactRepresentation = new ContactRepresentation();
        $contactRepresentation->setEmail($email);

        $contactRepresentation->setName($name);

        $contactRepresentation->setPhone($phone);

        $contactRepresentation->setMessage($request->get('message'));

        $addContactCommand = new AddContactCommand($contactRepresentation);
        $contactService = $this->get('fish_and_places.contact_service');
        try {
            $contactService->create($addContactCommand);
            return new JsonResponse([
                'success' => true,
                'message' => "Your inquire was send successfully, our team will answer you in the next working days"
            ], Response::HTTP_OK);

        } catch (\Exception $e) {

            $this->get('logger')->log('error', $e->getMessage());
            return new JsonResponse([
                'errors' => $e->getMessage(),
                'success' => false
            ], Response::HTTP_BAD_REQUEST
            );
        }
    }
}
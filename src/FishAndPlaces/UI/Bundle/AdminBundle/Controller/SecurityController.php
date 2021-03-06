<?php

namespace FishAndPlaces\UI\Bundle\AdminBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;

class SecurityController extends Controller
{
    /**
     * @Route("/login", name="login")
     * @param Request $request
     * @return RedirectResponse|\Symfony\Component\HttpFoundation\Response
     */
    public function loginAction(Request $request)
    {
        $authenticationUtils = $this->get('security.authentication_utils');

        // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();

        $router = $this->get('router');

        if (($this->get('security.authorization_checker')->isGranted('ROLE_SUPER_ADMIN'))) {
            return new RedirectResponse($router->generate('dam_list'), 307);
        }

        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render('@Admin/security/login.html.twig', array(
            'last_username' => $lastUsername,
            'error'         => $error,
        ));
    }

    /**
     * @Route("/logout", name="logout")
     * @param Request $request
     * @return RedirectResponse
     */
    public function logoutAction(Request $request)
    {
        $request->getSession()->invalidate(1);
        $router = $this->get('router');
        return new RedirectResponse($router->generate('admin'), 307);
    }
}

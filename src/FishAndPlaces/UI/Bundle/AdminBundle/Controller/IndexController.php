<?php

namespace FishAndPlaces\UI\Bundle\AdminBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class IndexController extends Controller
{
    /**
     * @Route("/", name="admin")
     * @return Response
     */
    public function indexAction()
    {
        return $this->redirect($this->generateUrl('login'));
    }
}

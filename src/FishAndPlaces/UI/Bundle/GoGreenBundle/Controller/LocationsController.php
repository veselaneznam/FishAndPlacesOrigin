<?php
/**
 * Created by PhpStorm.
 * User: vferdinandova
 * Date: 11/8/17
 * Time: 8:45 PM
 */

namespace FishAndPlaces\UI\Bundle\GoGreenBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class LocationsController extends Controller
{
    /**
     * @param Request $request
     *
     * @Route("/cities", name="cities_autocomplete")
     * @Method({"GET"})
     * @return JsonResponse
     */
    public function indexAction(Request $request)
    {
        return new JsonResponse(
            json_decode(file_get_contents('resources/cities.json'),true), Response::HTTP_OK
        );
    }
}
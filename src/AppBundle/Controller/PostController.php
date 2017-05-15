<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class PostController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // premier action qui retourne une collection de Posts
        $PostList = $this->getDoctrine()
        ->getRepository('AppBundle:Post')
        ->findAll();
        $view = $this->view($PostList)

        return $this->render();
    }
}

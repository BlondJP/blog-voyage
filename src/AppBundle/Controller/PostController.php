<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

use AppBundle\Entity\Post;

class PostController extends Controller
{
    /**
     * @Route("/posts", name="posts")
     */
    public function indexAction(Request $request)
    {
        $postService = $this->container->get('app.postservice');
        $posts = $postService->getAll();

        return $this->render('post/index.html.twig', ['posts' => $posts]);
    }

    /**
     * @Route("/post/{postId}", name="post")
     */
    public function showAction($postId)
    {
        $postService = $this->container->get('app.postservice');
        $post = $postService->getPostBy($postId);

        return $this->render('post/show.html.twig', ['post' => $post]);
    }

    /**
     * @Route("/post/create", name="creation")
     */
    public function createRandomAction(Request $request)
    {
        $postService = $this->container->get('app.postservice');
        $postService->createARandomPost();

        return $this->redirectToRoute('posts');
    }
}

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
   * @Route("/", name="home")
   */
  public function homeAction(Request $request)
  {
      return $this->redirectToRoute('posts');
  }

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
     * @Route("/post/{postId}", name="postbyid")
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

    /**
     * @Route("/posts/{page}", requirements={"page"="\d+"}, name="paginatedpost")
     */
    public function getPostsAction(Request $request, $page)
    {
        $postService = $this->container->get('app.postservice');
        $posts = $postService->getPostsByPage($page);

        return $this->render('post/index.html.twig', ['posts' => $posts, 'page' => $page, 'precedent' => $page - 1, 'suivant' => $page + 1]);
    }
}

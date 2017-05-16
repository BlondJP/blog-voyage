<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Doctrine\ORM\Tools\Pagination\Paginator;

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
     * @Route("/post/create", name="creation")
     */
    public function createRandomAction(Request $request)
    {
        $postService = $this->container->get('app.postservice');
        $postService->createARandomPost();

        return $this->redirectToRoute('posts');
    }

    /**
     * @Route("/posts/{pages}", defaults={"pages" = 0}, name="post")
     */
    public function getPosts()
    {

      $qb = $this->getDoctrine()->getManager()->createQueryBuilder('post');
        $qb
            ->select('post')
            ->setFirstResult(1)
            ->setMaxResults(5);

        $pag = new Paginator($qb);
        foreach ($pag as $post) {
    echo $post->getTitle() . '&lt;br /&gt;';
}
die;
        return $pag;
    }
}

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
        // premier action qui retourne une collection de Posts
        $posts = $this->getDoctrine()
          ->getRepository('AppBundle:Post')
          ->findAll();

        return $this->render('post/index.html.twig', ['posts' => $posts]);
    }

    /**
     * @Route("/post/create", name="creation")
     */
    public function createRandomAction(Request $request)
    {
        // création d'un article
        $randId = rand(0, 1000);

        $post = new Post();
        $post->setContent('CONTENT'.$randId)->setTitle('TITLE'.$randId)->setDate(new \Datetime());
        $em = $this->getDoctrine()->getManager();
        $em->persist($post);
        $em->flush();

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

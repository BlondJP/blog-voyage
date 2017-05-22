<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

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

        /*
          on creer la variable page pour pouvoir acceder a la page de post directement si on a pas de route typer posts/[nombre]
        */
        $page = 1;

        return $this->render('post/index.html.twig', ['posts' => $posts, 'page' => $page, 'previous' => $page - 1, 'next' => $page + 1 ]);
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
     * @Route("/posts/create", name="creation")
     */
    public function createPostAction(Request $request)
    {
      // create a task and give it some dummy data for this example

$post = new Post();

$form = $this->createFormBuilder($post)
  ->add('title', TextType::class)
  ->add('content', TextType::class)
  ->add('save', SubmitType::class, array('label' => 'Create Post'))
  ->getForm();

  $form->handleRequest($request);

      if ($form->isSubmitted() && $form->isValid()) {
          // $form->getData() holds the submitted values
          // but, the original `$task` variable has also been updated
          $post = $form->getData();

          // ... perform some action, such as saving the task to the database
          // for example, if Task is a Doctrine entity, save it!
          $post->setDate(new \Datetime());
          $em = $this->getDoctrine()->getManager();
          $em->persist($post);
          $em->flush();

          return $this->redirectToRoute('posts');
      }

return $this->render('post/create.html.twig', array(
  'form' => $form->createView(),
));
    }

    /**
     * @Route("/posts/{page}", requirements={"page"="\d+"}, name="paginatedpost")
     */
    public function getPostsAction(Request $request, $page)
    {
        $postService = $this->container->get('app.postservice');
        $posts = $postService->getPostsByPage($page);

        $previous = $page - 1;
        $next = $page + 1;
        if($previous <= 0)
          $previous = 1;
        return $this->render('post/index.html.twig', ['posts' => $posts, 'page' => $page, 'previous' => $previous, 'next' => $next]);
    }
}

<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

use AppBundle\Entity\Post;

class PostController extends Controller
{
  /**
   * @Route("/", name="home")
   * @Method({"GET"})
   */
  public function homeAction(Request $request)
  {
      return $this->render('default/home.html.twig');
  }

    /**
     * @Route("/posts", name="posts")
     * @Method({"GET"})
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
     * @Route("/post/{postId}", name="post_by_id")
     * @Method({"GET"})
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
    public function createAction(Request $request)
    {
        $post = new Post();

        $form = $this->createFormBuilder($post)
            ->add('title', TextType::class, ['label' => 'Titre de L\'article'])
            ->add('content', TextType::class, ['label' => 'Contenu de l\'article'])
            ->add('save', SubmitType::class, array('label' => 'Enregistrer le Post'))
            ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $post = $form->getData();
            $post->setDate(new \Datetime());

            $em = $this->getDoctrine()->getManager();
            $em->persist($post);
            $em->flush();

            return $this->redirectToRoute('posts');
        }

        return $this->render('post/create-post.html.twig', array(
            'form' => $form->createView(),
        ));
    }

    /**
     * @Route("/posts/page/{page}", requirements={"page"="\d+"}, name="paginated_post")
     * @Method({"GET"})
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

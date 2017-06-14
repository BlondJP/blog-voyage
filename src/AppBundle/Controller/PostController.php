<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\FileType;


use AppBundle\Entity\Post;

class PostController extends Controller
{
    /**
     * @Route("/", name="home")
     * @Method({"GET"})
     */
    public function homeAction(Request $request)
    {
        return $this->render('slider/home.html.twig');
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
            ->add('content', TextareaType::class, ['label' => 'Contenu de l\'article'])
            ->add('image', FileType::class, array('label' => 'Choisissez une image'))
            ->add('save', SubmitType::class, array('label' => 'Enregistrer le Post'))
            ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $post = $form->getData();
            $img = $post->getImage();

            $fileName = md5(uniqid()).'.'.$img->guessExtension();

            // Move the file to the directory where brochures are stored
            $img->move(
                $this->getParameter('images_directory'),
                $fileName
            );

            $post->setDate(new \Datetime());
            $post->setImage($fileName);

            $em = $this->getDoctrine()->getManager();
            $em->persist($post);
            $em->flush();

            return $this->redirectToRoute('paginated_post', ['page' => 1]);
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
        /* @var PostService $postService */
        $postService = $this->container->get('app.postservice');
        $posts = $postService->getPostsByPage($page);

        $previous = $page - 1;
        $next = $page + 1;
        if($previous <= 0)
          $previous = 1;
        return $this->render('post/index.html.twig', ['posts' => $posts, 'page' => $page, 'previous' => $previous, 'next' => $next]);
    }
}

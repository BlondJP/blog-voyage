<?php

namespace AppBundle\Service;

use Doctrine\ORM\EntityManager;
use AppBundle\Repository\PostRepository;

class PostService
{
    private $em;
    private $postRepository;

    public function __construct(EntityManager $entityManager, PostRepository $postrepository)
    {
        $this->em = $entityManager;
        $this->postRepository = $postrepository;
    }

    public function getAll()
    {
        $posts = $this->postRepository->findAll();

        return $posts;
    }

    public function getPostBy($id)
    {
        $post = $this->postRepository->find($id);

        return $post;
    }

    public function createARandomPost()
    {
        // création d'un article random
        $randId = rand(0, 1000);

        $post = new Post();
        $post->setContent('CONTENT'.$randId)->setTitle('TITLE'.$randId)->setDate(new \Datetime());
        $em = $this->getDoctrine()->getManager();
        $em->persist($post);
        $em->flush();

        return $post;
    }
}

<?php

namespace AppBundle\Service;

use Doctrine\ORM\EntityManager;
use AppBundle\Repository\PostRepository;
use Doctrine\ORM\Tools\Pagination\Paginator;
use AppBundle\Entity\Post;
use Symfony\Component\HttpKernel\Exception\HttpException;

class PostService
{
    private $em;
    private $postRepository;

    const POST_PER_PAGE = 5;

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

        if (!($post instanceOf Post)) {
          // 404
          throw new HttpException(404, "Ce post n\'existe pas");
        }

        return $post;
    }

    public function createARandomPost()
    {
        // création d'un article random
        $randId = rand(0, 1000);

        $post = new Post();
        $post->setContent('CONTENT'.$randId)->setTitle('TITLE'.$randId)->setDate(new \Datetime());
        $em = $this->em;
        $em->persist($post);
        $em->flush();

        return $post;
    }

    /**
    *   Retourne les posts de la page
    *
    *   @param int $page
    *   @return Paginator $pag
    */
    public function getPostsByPage($page)
    {
        $startingIndex = (($page - 1) * self::POST_PER_PAGE);

        $qb = $this->postRepository->createQueryBuilder('post');
        $qb
            ->select('post')
            ->setFirstResult($startingIndex)
            ->setMaxResults(self::POST_PER_PAGE);

        $pag = new Paginator($qb);

        return $pag;
    }
}

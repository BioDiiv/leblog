<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class BlogController extends AbstractController
{
    /**
     * @Route("/", name="blog")
     */
    public function homePage()
    {

        $array = array();
        array_push($array, "apple", "raspberry", "orange");
        return $this->render('blog/blog.html.twig', [
                           'posts' => $array,
                       ]);
    }

    /**
     * @Route("/post/{postId}", name="app_post")
     */
    public function post($postId)
    {
        return $this->render('blog/post.html.twig', [
            'page_title' => 'Article',
            'post_id' => $postId]);
    }
}

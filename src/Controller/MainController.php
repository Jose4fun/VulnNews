<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    /**
     * @Route("/", name="main")
     */
    public function index()
    {
        return $this->render('main/index.html.twig', [
            'controller_name' => 'MainController',
        ]);
    }

    public function news()
    {
        /**
         * @Route("/news", name="news")
         */
        return $this->render('main/news.html.twig', [
            'controller_name' => 'MainController',
        ]);
    }
}

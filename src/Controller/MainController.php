<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{

    /**
     * @Route("/", name="homepage")
     */
    public function index(): Response
    {
        return $this->render('main/index.html.twig', [
            'controller_name' => 'Pierre Jehan',
        ]);
    }

    /**
     * @Route("/contact", name="contact")
     */
    public function contact()
    {
        $cities = ['Paris', 'Rennes', 'Toulouse', 'Brest'];
        return $this->render('main/contact.html.twig', [
            'villes' => $cities
        ]);
    }
}

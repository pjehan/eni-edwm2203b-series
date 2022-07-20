<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/series")
 */
class SerieController extends AbstractController
{
    /**
     * @Route("/", name="serie_index")
     */
    public function index(): Response
    {
        // TODO: Récupérer en base de données la liste des séries et envoyer cette liste à la vue
        return $this->render('serie/index.html.twig');
    }

    /**
     * @Route("/{id}", name="serie_show")
     */
    public function show(int $id): Response
    {
        // TODO: Récupérer en base de données la série correspondant à l'id passé en paramètre et envoyer cette liste à la vue
        return $this->render('serie/show.html.twig');
    }

}

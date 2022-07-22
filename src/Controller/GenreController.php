<?php

namespace App\Controller;

use App\Entity\Genre;
use App\Form\GenreType;
use App\Repository\GenreRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/genres")
 */
class GenreController extends AbstractController
{
    /**
     * @Route("/", name="genre_index")
     */
    public function index(GenreRepository $genreRepository): Response
    {
        return $this->render('genre/index.html.twig', [
            'genres' => $genreRepository->findAll(),
        ]);
    }

    /**
     * @Route("/create", name="genre_create")
     */
    public function create(Request $request, ManagerRegistry $managerRegistry): Response
    {
        $genre = new Genre();
        $form = $this->createForm(GenreType::class, $genre); // GenreType::class --> "App\Form\GenreType"

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $managerRegistry->getManager();
            $entityManager->persist($genre);
            $entityManager->flush();

            return $this->redirectToRoute('genre_index');
        }

        return $this->renderForm('genre/create.html.twig', [
            'form' => $form
        ]);
    }
}

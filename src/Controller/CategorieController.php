<?php

namespace App\Controller;


use App\Entity\Categorie;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CategorieController extends AbstractController
{
    /**
     * @Route("/", name="categorie")
     */
    public function index(): Response
    {

        $em = $this->getDoctrine()->getManager();//connect BDD
        $categories = $em->getRepository(Categorie::class)->findAll();



        return $this->render('categorie/index.html.twig', [
            'categories' => $categories
        ]);
    }
}

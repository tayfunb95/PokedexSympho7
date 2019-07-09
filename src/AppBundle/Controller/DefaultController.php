<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/liste", name="homepage")
     */
    public function indexAction(Request $request)
    {

        $em = $this->getDoctrine()->getManager();

        $refPokemons = $em->getRepository('AppBundle:RefPokemon')->findAll();


        // replace this example code with whatever you need
        return $this->render('refPokemon/index.html.twig', [
            'refPokemons' => $refPokemons,
        ]);
    }
}

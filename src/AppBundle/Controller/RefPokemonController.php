<?php

namespace AppBundle\Controller;

use AppBundle\Entity\RefPokemon;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Refpokemon controller.
 *
 * @Route("refpokemon")
 */
class RefPokemonController extends Controller
{
    /**
     * Lists all refPokemon entities.
     *
     * @Route("/", name="refpokemon_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $refPokemons = $em->getRepository('AppBundle:RefPokemon')->findAll();

        return $this->render('refpokemon/index.html.twig', array(
            'refPokemons' => $refPokemons,
        ));
    }

    /**
     * Creates a new refPokemon entity.
     *
     * @Route("/new", name="refpokemon_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $refPokemon = new Refpokemon();
        $form = $this->createForm('AppBundle\Form\RefPokemonType', $refPokemon);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($refPokemon);
            $em->flush();

            return $this->redirectToRoute('refpokemon_show', array('id' => $refPokemon->getId()));
        }

        return $this->render('refpokemon/new.html.twig', array(
            'refPokemon' => $refPokemon,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a refPokemon entity.
     *
     * @Route("/{id}", name="refpokemon_show")
     * @Method("GET")
     */
    public function showAction(RefPokemon $refPokemon)
    {
        $deleteForm = $this->createDeleteForm($refPokemon);

        return $this->render('refpokemon/show.html.twig', array(
            'refPokemon' => $refPokemon,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing refPokemon entity.
     *
     * @Route("/{id}/edit", name="refpokemon_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, RefPokemon $refPokemon)
    {
        $deleteForm = $this->createDeleteForm($refPokemon);
        $editForm = $this->createForm('AppBundle\Form\RefPokemonType', $refPokemon);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('refpokemon_edit', array('id' => $refPokemon->getId()));
        }

        return $this->render('refpokemon/edit.html.twig', array(
            'refPokemon' => $refPokemon,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a refPokemon entity.
     *
     * @Route("/{id}", name="refpokemon_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, RefPokemon $refPokemon)
    {
        $form = $this->createDeleteForm($refPokemon);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($refPokemon);
            $em->flush();
        }

        return $this->redirectToRoute('refpokemon_index');
    }

    /**
     * Creates a form to delete a refPokemon entity.
     *
     * @param RefPokemon $refPokemon The refPokemon entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(RefPokemon $refPokemon)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('refpokemon_delete', array('id' => $refPokemon->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}

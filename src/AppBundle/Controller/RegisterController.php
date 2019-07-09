<?php
/**
 * Created by PhpStorm.
 * User: natkr
 * Date: 16/06/2019
 * Time: 14:39
 */

namespace AppBundle\Controller;


use AppBundle\Entity\Trainer;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Pokemon controller.
 *
 * @Route("register")
 */
class RegisterController extends Controller
{
    /**
     * Lists all trainers entities.
     *
     * @Route("/", name="register_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $trainer = $em->getRepository('AppBundle:Trainer')->findAll();

        return $this->render('register/index.html.twig', array(
            'trainers' => $trainer,
        ));
    }

    /**
     * login trainer entity.
     *
     * @Route("/new", name="register_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $trainer = new Trainer();
        $form = $this->createForm('AppBundle\Form\Register', $trainer);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($trainer);
            $em->flush();

            return $this->redirectToRoute('register_index');
        }

        return $this->render('register/new.html.twig', array(
            'trainers' => $trainer,
            'form' => $form->createView(),
        ));
    }


}

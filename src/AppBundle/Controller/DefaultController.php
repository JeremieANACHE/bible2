<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..'),
        ]);
    }


    /**
     * @Route ("/getBible2", name="getBible2")
     */
    public function getAction(){
        return $this->render('default/get.html.twig'
        );
    }


    /**
     * @Route ("/getValidation", name="get_validation")
     */
    public function getValidationAction(){
        return $this->render('default/payment-successful.html.twig'
        );
    }


    /**
     * @Route ("/getCancel", name="get_cancel")
     */
    public function getCancelAction(){
        return $this->render('default/payment-cancelled.html.twig'
        );
    }
}

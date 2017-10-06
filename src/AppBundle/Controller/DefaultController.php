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
    public function indexAction(Request $request) {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig');
    }

    /**
     * @Route("contact", name="contact")
     */
    public function contactAction() {
        return $this->render('default/contact.html.twig');
    }

    /**
     * @Route("mail", name="mail")
     */
    public function emailAction(){
        $message = $_POST["message"];
        $email = $_POST["email"];
        $senderName = $_POST["name"];
        $msg = $message;
        $moi = "romain.cosson11@gmail.com";
        mail($moi,$senderName . " (" . $email . ") " . "a envoyé un message ",$msg);
        return $this->redirectToRoute("merci-pour-votre-message");
    }

    /**
     * @Route("merci-pour-votre-message", name="merci-pour-votre-message")
     */
    public function merciAction(){
        return $this->render('default/merci.html.twig');
    }
}

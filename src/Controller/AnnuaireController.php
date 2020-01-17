<?php

namespace App\Controller;

use Swift_Mailer;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class AnnuaireController extends AbstractController
{
    /**
     * @Route("/", name="annuaire")
     */
    public function index(Swift_Mailer $mailer)
    {

        $send_email = (new \Swift_Message('TEST SYMFONY'))
            ->setFrom('annuaire@ribegroupe.com', 'Annuaire RibéGroupe')
            ->setTo('contact.informatique@ribegroupe.com')
            ->setBody('tesdsdt');

        $mailer->send($send_email);

        return $this->render('base.html.twig');
    }
}




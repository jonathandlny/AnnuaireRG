<?php

namespace App\Controller;

use App\Entity\Staff;
use App\Form\StaffType;
use App\Repository\UsersRepository;
use Swift_Mailer;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class AnnuaireController extends AbstractController
{
    /**
     * @Route("/", name="annuaire")
     */
    public function index()
    {
        $allStaff = $this->getDoctrine()->getRepository(Staff::class);
        $staff = $allStaff->findAll();
        return $this->render('staff.html.twig', [
            'staff' => $staff
        ]);
    }

    /**
     * @Route("/creation_salarie", name="new_staff")
     */
    public function creation_salarie(Request $request)
    {
        $staff = new Staff();
        $staff->setIsvisible([]);
        $form = $this->createForm(StaffType::class, $staff);

        $form->add('AJOUTER', SubmitType::class, [
            'attr' => ['class' => 'btn btn-lg btn-primary',
            'style' => 'background-color: #6C8E15;']
        ]);

        $form->handleRequest($request);


        if ($form->isSubmitted() && $form->isValid()) {

            $staff = new Staff();
            $staff = $form->getData();

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($staff);
            $entityManager->flush();

            return $this->redirectToRoute('annuaire');
        }

        return $this->render('staff/newStaff.html.twig', [
            'form' => $form->createView(),
        ]);    }
}

///**
// * @Route("/", name="annuaire")
// */
//public function index(Swift_Mailer $mailer)
//{
//
//    $send_email = (new \Swift_Message('TEST SYMFONY'))
//        ->setFrom('annuaire@ribegroupe.com', 'Annuaire RibéGroupe')
//        ->setTo('contact.informatique@ribegroupe.com')
//        ->setBody('tesdsdt');
//
//    $mailer->send($send_email);
//
//    return $this->render('base.html.twig');
//}
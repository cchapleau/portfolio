<?php

namespace App\Controller;

use App\Entity\Mail;
use App\Form\MailType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class MailController extends AbstractController
{
    /**
     * @Route("/mail", name="mail")
     */
    public function index(Request $request, \Swift_Mailer $mailer): Response
    {
        $mail = new Mail();
        $form = $this->createForm(MailType::class, $mail);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $contact = $form->getData();
            $message = (new \Swift_Message($form->get('subject')->getData()))
                ->setFrom($form->get('email')->getData())
                ->setTo('ch.chapleau@gmail.com')
                ->setBody($form->get('message')->getData())
            ;
            $mailer->send($message);
        }

        return $this->render('mail/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}

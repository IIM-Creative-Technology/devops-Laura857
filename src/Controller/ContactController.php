<?php

namespace App\Controller;

use App\Entity\Message;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Routing\Annotation\Route;
use App\Form\ContactType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Mailer;
use Symfony\Component\Mailer\MailerInterface;

class ContactController extends AbstractController
{
    /**
     *
     * Envoie un mail via un formulaire et enregistre les informations du messages dans la base de données
     * Le mail sera reçu dans la boîte de reception générique du site web à l'adresse wishlist.wewish@gmail.com
     *
     * @Route("/contact", name="contact")
     * @param Request $request traite les formulaires, contient les informations de la demande du client
     * @param EntityManagerInterface $manager  relation avec la base de données
     * @param \Swift_Mailer $mailer utilise les fonction d'envoi de mail selon les données entrées
     * @return Response retourne la page du formulaire de contact
     * @return Response redirige vers la page d’accueil une fois le formulaire validée
     * @return Form $our_form retourne le formulaire de contact
     */

    public function contact(Request $request, EntityManagerInterface $manager, \Swift_Mailer $mailer)
    {
        $message = new Message();
        $message->setDate(new \DateTime('now'));
        $form = $this->createForm(ContactType::class, $message);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $manager->persist($message);
            $manager->flush();
            $message = (new \Swift_Message('Hello Email'))
              ->setSubject($message->getEmail())
              ->setFrom($message->getEmail())
              ->setTo('wishlist.wewish@gmail.com')
              ->setBody($message->getTexte(), 'text/html');
            $mailer->send($message);
            $this->addFlash('success', 'Votre message a bien été envoyé');
            return $this->redirectToRoute('wishlist');
        }
        return $this->render('wishlist/contact.html.twig', [
          'our_form' => $form->createView(),
        ]);
    }
}

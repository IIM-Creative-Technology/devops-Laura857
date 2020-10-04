<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\User;
use App\Entity\ChangePassword;
use App\Form\InscriptionType;
use App\Form\EditType;
use App\Form\EditMdpType;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mailer\Mailer;
use Symfony\Component\Mailer\Bridge\Google\Transport\GmailSmtpTransport;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;
use App\Form\ResettingType;
use Symfony\Component\Security\Csrf\TokenGenerator\TokenGeneratorInterface;
use Symfony\Component\Security\Core\Authentication\Token\UsernamePasswordToken;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;


use Symfony\Component\Form\Extension\Core\Type\EmailType;

/**
* Controller qui regroupe les liens entre les pages liés à la sécurité et des fonctions en PHP.
* L'annotation Route définit le chemin de l'URL.
*/
class SecurityController extends AbstractController
{
    /**
    * Affiche un formulaire d'inscription. Enregistre les informaions dans la base de données
    * @Route("/inscription", name="inscription")
    * @param Request $request traite les formulaires, contient les informations de la demande du client
    * @param EntityManagerInterface $manager relation avec la base de données
    * @param UserPasswordEncoderInterface $encoder permet d'encoder le mot de passe, hachage du mot de passe avec l'algorithme argon2i
    * @return Response redirection vers la page d’accueil
    * @return Form $form retourne le formulaire d’inscription
    */
    public function inscription(Request $request, EntityManagerInterface $manager, UserPasswordEncoderInterface $encoder)
    {
        $user = new User();
        $form = $this->createForm(InscriptionType::class, $user);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $hash = $encoder->encodePassword($user, $user->getPassword());
            $user->setPassword($hash);
            $user->setRoles(array('ROLE_USER'));
            $manager->persist($user);
            $manager->flush();
            $token = new UsernamePasswordToken($user, null, 'main', $user->getRoles());
            $this->container->get('security.token_storage')->setToken($token);
            $this->container->get('session')->set('_security_main', serialize($token));
            $this->addFlash('success', 'Votre inscription a été validée et vous êtes connecté !');
            return $this->redirectToRoute('wishlist');
        }
        return $this->render('security/inscription.html.twig', [
          'form' => $form->createView()
      ]);
    }


    /**
    * Gère la connexion d'un utilisateur.
    *
    * @Route("/connexion", name="connexion")
    *
    * @param AuthenticationUtils $authenticationUtils possède les méthodes pour vérifier l'authentification
    * @return Response retourne vers la page de connexion
    * @return Error $error retourne les erreurs
    * @return string $last_username retourne le dernier username utilisé pour se connecter
    */
    public function login(AuthenticationUtils $authenticationUtils): Response
    {
        $error = $authenticationUtils->getLastAuthenticationError();
        $lastUsername = $authenticationUtils->getLastUsername();
        return $this->render('security/connexion.html.twig', [
          'last_username' => $lastUsername,
          'error' => $error
        ]);
    }


    /**
    * Gère la déconnexion d'un utilisateur.
    *
    * @Route("/deconnexion", name="deconnexion")
    */
    public function logout()
    {
    }


    /**
    * Gère la requête de la suppression du compte. Supprime un utilisateur de la base de données
    * @Route("/deleteUserAction", name="deleteUserAction")
    * @param Request $request traite les formulaires, contient les informations de la demande du client
    * @param EntityManagerInterface $manager  relation avec la base de données
    * @return Response retourne vers la page de connexion
    */
    public function deleteUserAction(Request $request, EntityManagerInterface $manager)
    {
        $id= $this->getUser()->getId();
        $session = $this->get('session');
        $session = new Session();
        $session->invalidate();
        $em = $this->getDoctrine()->getManager();
        $usrRepo = $em->getRepository(User::class);
        $user = $usrRepo->find($id);
        $em->remove($user);
        $em->flush();
        return $this->redirectToRoute('connexion');
    }


    /**
    * Gère la requête d'un mot de passe oublié par l'utilisateur. Enregistre les informaions dans la base de données
    *
    * @Route("/mdpOublie", name="mdpOublie")
    *
    * @param Request $request traite les formulaires, contient les informations de la demande du client
    * @param EntityManagerInterface $manager  relation avec la base de données
    * @param UserPasswordEncoderInterface $encoder permet d'encoder le mot de passe, hachage du mot de passe avec l'algorithme argon2i
    * @param \Swift_Mailer $mailer envoi de mail
    * @param TokenGeneratorInterface $tokenGenerator génère un CSRF tokens pour plus de sécurité
    * @return Response redirige vers la page d’accueil
    * @return Response retourne la page du formulaire du mot de passe oublié
    * @return Response réaffiche la même page d’affichage du formulaire si l’email est inconnu
    * @return Form $form retourne le formulaire de mot de passe oublié
    */
    public function mdpOublie(TokenGeneratorInterface $tokenGenerator, Request $request, EntityManagerInterface $manager, UserPasswordEncoderInterface $encoder, \Swift_Mailer $mailer)
    {
        $form = $this->createFormBuilder()
        ->add('email', EmailType::class)
        ->getForm();
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $emailUser = $form->getData('email');
            $user = $manager->getRepository(User::class)->findOneByEmail($emailUser);
            if (!$user) {
                $this->addFlash('warning', 'Email inconnu');
                return $this->redirectToRoute('mdpOublie');
            } else {
                if ($form->isSubmitted() && $form->isValid()) {
                    $message = (new \Swift_Message('Réinitialisation du mot de passe'));
                    $logo = $message->embed(\Swift_Image::fromPath('cadeau.png'));
                    $token = $tokenGenerator->generateToken();
                    try {
                        $user->setResetToken($token);
                        $manager->flush();
                    } catch (\Exception $e) {
                        $this->addFlash('warning', $e->getMessage());
                        return $this->redirectToRoute('wishlist');
                    }
                    $url = $this->generateUrl('resetMdp', array('token' => $token), UrlGeneratorInterface::ABSOLUTE_URL);
                    $message
              ->setSubject('Réinitialisation du mot de passe')
              ->setFrom('wishlist.wewish@gmail.com')
              ->setTo($user->getEmail())
              ->setBody(
                  $this->renderView(
                      'emails/emailMdpOublie.html.twig',
                      ['pseudo' => $user->getPseudo(),
                     'logo' => $logo,
                      'url' => $url]
                  ),
                  'text/html'
              );
                    $mailer->send($message);
                    $this->addFlash('success', 'Un email de réinitialisation du mot de passe vous a été envoyé !');
                    return $this->redirectToRoute('wishlist');
                }
            }
        }
        return $this->render('security/mdpOublie.html.twig', [
           'form' => $form->createView()
       ]);
    }


    /**
    * Gère la requête d'une réinitialisation du mot de passe par l'utilisateur. Enregistre les informations  dans la base de données
    *
    * @Route("/resetMdp/{token}", name="resetMdp")
    *
    * @param Request $request traite les formulaires, contient les informations de la demande du client
    * @param string $token token attribut de la base de donnée
    * @param UserPasswordEncoderInterface $encoder permet d'encoder le mot de passe, hachage du mot de passe avec l'algorithme argon2i
    * @return Response retourne vers la page de connexion
    */
    public function resetMdp(Request $request, string $token, UserPasswordEncoderInterface $passwordEncoder)
    {
        if ($request->isMethod('POST')) {
            $manager = $this->getDoctrine()->getManager();
            $user = $manager->getRepository(User::class)->findOneByResetToken($token);
            if ($user === null) {
                $this->addFlash('danger', 'Mot de passe non reconnu');
                return $this->redirectToRoute('wishlist');
            }
            $user->setResetToken(null);
            $user->setPassword($passwordEncoder->encodePassword($user, $request->request->get('password')));
            $manager->flush();
            $this->addFlash('notice', 'Mot de passe mis à jour !');
            return $this->redirectToRoute('connexion');
        } else {
            return $this->render('security/resetMdp.html.twig', [
              'token' => $token
            ]);
        }
    }

    /**
    *Modifie les informations personnelles d'un utilisateur
    * @Route("/modifier", name="modifier")
    * @param Request $request traite les formulaires, contient les informations de la demande du client
    * @param EntityManagerInterface $manager  relation avec la base de données
    * @return Response retourne la page d’affichage du formulaire de modification des informations personnelles
    * @return Response redirige vers la page d’affichage des informations de l’utilisateur connecté
    * @return Response redirige vers la page 404 si l’utilisateur n’est pas connecté
    * @return Form $our_form retourne le formulaire pour modifier les informations personnelles
    */
    public function modifier(Request $request, EntityManagerInterface $manager)
    {
        $user = $this->getUser();
        $form = $this->createForm(EditType::class, $this->getUser());
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $user->setName($this->getUser()->getName());
            $user->setPseudo($this->getUser()->getPseudo());
            $user->setPrenom($this->getUser()->getPrenom());
            $user->setEmail($this->getUser()->getEmail());
            $manager->flush();
            return $this->redirectToRoute('profil');
        }
        if ($this->isGranted('ROLE_USER') == false) {
            return $this->render('erreur/erreur404.html.twig', [
                'controller_name' => 'WishlistController',
            ]);
        }
        else{
            return $this->render('wishlist/modifier.html.twig', [
          'our_form' => $form->createView()
      ]);
        }
    }


    /**
     *Modifie le mot de passe d'un utilisateur
    * @Route("/mdp", name="mdp")
    * @param Request $request traite les formulaires, contient les informations de la demande du client
    * @param UserPasswordEncoderInterface $passwordEncoder permet d'encoder le mot de passe, hachage du mot de passe avec l'algorithme argon2i
    * @return Response retourne vers la page d’affichages des informations de l’utilisateur connecté
    * @return Response redirige vers la page 404 si l’utilisateur n’est pas connecté
    * @return Response retourne la page d’affichage du formulaire de modification du mot de passe
    * @return Form $form retourne le formulaire de modification du mot de passe oublié
    */

    public function resetting(Request $request, UserPasswordEncoderInterface $passwordEncoder)
    {
        $user = $this->getUser();
        $form = $this->createForm(EditMdpType::class, $user);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $password = $passwordEncoder->encodePassword($user, $user->getPassword());
            $user->setPassword($password);
            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();
            $request->getSession()->getFlashBag()->add('success', "Votre mot de passe a été renouvelé.");
            return $this->redirectToRoute('profil');
        }
        if ($this->isGranted('ROLE_USER') == false) {
            return $this->render('erreur/erreur404.html.twig', [
                'controller_name' => 'WishlistController',
            ]);
        }
        else{
        return $this->render('security/mdp.html.twig', [
            'form' => $form->createView(),
        ]);
        }
    }

     /**
     * Affichage d'une page 404
     * @Route("/erreur", name="erreur")
     * @return Response retourne vers la page 404
     */
    public function erreur()
    {
        return $this->render('erreur/erreur404.html.twig', [
            'controller_name' => 'WishlistController',
        ]);
    }

}

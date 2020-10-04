<?php

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Theme;
use App\Entity\Article;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;
use App\Form\ThemeType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use App\Entity\Wishlist;

/**
 * Controller qui regroupe les liens entre les pages et des fonctions en PHP
 * L'annotation Route définit le chemin de l'URL
 */

class ThemeController extends AbstractController
{

  /**
   * Retourne le chemin vers le thème correspondant à l'identifiant passé en paramètre.
   *
   * @Route("/myTheme/{id}", name="myTheme")
   *
   * @param EntityManagerInterface $manager relation avec la base de données
   * @param int $id identifiant du thème
   * @return Response retourne la page d’affichage du thème
   * @return Article $article retourne les articles de la wishlist associé au thème
   * @return Theme $theme retourne le thème correspondant à l’identifiant passé en paramètre
   * @return Wishlist $wishlist retourne la wishlist associé au thème
   */
    public function myTheme( EntityManagerInterface $manager, int $id)
    {
      $repo=$this->getDoctrine()->getRepository(Theme::class);
      $allThemes = $repo->findAll();

      foreach ($allThemes as $i) {
        if($i->getId() == $id){
          $theme = $i;
        }
      }

      $repo2 = $this->getDoctrine()->getRepository(Wishlist::class);
      $allWishlist = $repo2->findAll();
        $wishlist = new Wishlist();
      foreach($allWishlist as $i ){
        if($i->getIsparametree() == true){
          if($i->getTheme() == $theme){
            $wishlist = $i;
          }
        }
      }
      $repo3 = $this->getDoctrine()->getRepository(Article::class);
      $allArticles= $repo3->findAll();
      $articles= [];
      foreach($allArticles as $i ){
          if($i->getWishlist() == $wishlist){
            array_push($articles,$i);
          }

      }
      return $this->render('theme/theme.html.twig', [
        'controller_name' => 'ThemeController',
        'articles'=>$articles,
        'theme'=>$theme,
        'wishlist'=>$wishlist
      ]);
    }


    /**
     * Gère la requête d'ajout d'un thème. Enregistre ce nouveau thème dans la base de données.
     *
     * @Route("/ajoutTheme", name="ajoutTheme")
     * @IsGranted("ROLE_ADMIN")
     *
     * @param Request $request traite les formulaires, contient les informations de la demande du client
     * @param EntityManagerInterface $manager relation avec la base de données
     * @return Response redirige vers la page d’accueil
     * @return Response affiche la page du formulaire d’ajout d’un thème
     * @return Form $form retourne le formulaire de création de thème pour l’administrateur
     */
    public function ajoutTheme(Request $request, EntityManagerInterface $manager){
      $theme = new Theme();
      $form = $this->createForm(ThemeType::class, $theme);
      $form->handleRequest($request);
      if($form->isSubmitted() && $form->isValid()){
        $theme->setIsParametred(true);
        $theme->setUpdatedAt(new \DateTime('now'));
        $manager ->persist($theme);
        $wishlist = new Wishlist();
        $wishlist->setNom($theme->getName());
        $wishlist->setIsparametree(true);
        $wishlist->setDestinataire('');
        $wishlist->setBudget(0);
        $wishlist->setDescription(' ');
        $wishlist->setTheme($theme);
        $wishlist->setUpdatedAt(new \DateTime('now'));
        $wishlist->setDateCreation(new \DateTime());
        $manager ->persist($wishlist);
        $manager->flush();
        return $this->redirectToRoute('wishlist');
      }
      return $this->render('theme/ajoutTheme.html.twig',[
        'form' => $form->createView()
      ]);
    }


    /**
    * Gère la requête de suppression d'un thème. Supprime ce nouveau thème dans la base de données.
    *
    * @Route("/supprimerTheme/{id}", name="supprimerTheme")
    * @IsGranted("ROLE_ADMIN")
    *
    * @param EntityManagerInterface $manager relation avec la base de données
    * @param int $id l'identifiant du thème à supprimer
    * @return Response retourne la page d’accueil
    */
    public function deleteTheme(EntityManagerInterface $manager, int $id){
      $repo = $this->getDoctrine()->getRepository(Theme::class);
      $allThemes = $repo->findAll(array('isParametred' => true));
      foreach($allThemes as $theme){
         if($theme->getId() == $id){
           $manager->remove($theme);
           $manager->flush();
           $this->addFlash('success', 'Le thème '.$theme->getName().' a bien été effacé');
         }
      }
      return $this->redirectToRoute('wishlist');
   }


   /**
   * Gère la requête de modification d'un thème. Enregistre ces modifications dans la base de données.
   *
   * @Route("/modifierTheme/{id}", name="modifierTheme")
   * @IsGranted("ROLE_ADMIN")
   *
   * @param Request $request traite les formulaires, contient les informations de la demande du client
   * @param int $id l'identifiant du thème à modofier
   * @return Response retourne la page d’affichage du formulaire de modification du thème @return Response redirige vers la page d’accueil
   * @return Form $form retourne le formulaire de modification du thème
   * @return Theme $theme retourne le thème modifié
   */
   public function modifierTheme(Request $request, int $id){
     $repo = $this->getDoctrine()->getRepository(Theme::class);
     $allThemes = $repo->findAll(array('isParametred' => true));
     foreach($allThemes as $theme){
       if($theme->getId() == $id){
         $form = $this->createForm(ThemeType::class, $theme);
         $form->handleRequest($request);
         if($form->isSubmitted() && $form->isValid()){
           $theme->setName($theme->getName());
           $theme->setImageFile($theme->getImageFile());
           $theme->setImageFond($theme->getImageFond());
           $theme->setUrlImg($theme->getUrlImg());
           $manager = $this->getDoctrine()->getManager();
           $manager->persist($theme);
           $manager->flush();
           return $this->redirectToRoute('wishlist');
         }
        }
      }
      return $this->render('theme/modifierTheme.html.twig',[
          'form' => $form->createView(),
          'theme' => $theme
      ]);
    }
}

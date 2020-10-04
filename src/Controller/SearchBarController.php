<?php

namespace App\Controller;

/**
 * Controller qui regroupe les liens entre les pages et des fonctions en PHP
 * l'annotation Route définit le chemin de l'URL
 *
 */
use App\Repository\ArticleRepository;
use App\Form\FormeWishlistType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Theme;
use App\Entity\Article;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\Wishlist;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use App\Form\ThemeType;
use App\Form\ArticleType;
use App\Entity\User;
use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use App\Form\SearchType;
use App\Form\FormAjoutArticleRecherche ;

class SearchBarController extends AbstractController
{

  /**
  *Permet d’afficher une fenêtre modale demandant à l’utilisateur de choisir la
  *wishlist où ils souhaite enregistrer l’article choisi à partir de la barre de recherche.
  *
  *@param int $id identifiant de l’article choisi
  *
  *@return Wishlist $wishlists un tableau de  wishlists à afficher dans la modale
  *@return Response retourne vers la page de la modale
  *@return int $id l'id de l'article à ajouter
  */
  public function wishlistsChoices(int $id){
      if ($this->isGranted('ROLE_USER') == false) {
          return $this->render('erreur/erreur404.html.twig', [
              'controller_name' => 'WishlistController',
          ]);
      }
      else{
        $repo=$this->getDoctrine()->getRepository(Wishlist::class);
        $allW = $repo->findAll();
        $wishlists = [];
        foreach ($allW as $i) {
            if ($i->getUser()==$this->getUser()) {
                array_push($wishlists, $i);
            }
        }
        return $this->render('wishlist/modaleView.html.twig', [
          'controller_name' => 'WishlistController',
          'wishlists'=>$wishlists,
          'idA'=>$id
        ]);
      }
  }

  /**
  * Retourne un lien externe vers le site Cdiscount selon la recherche effectuée
  * @Route("/discount", name="discount")
  *@return Response redirige vers une page Cdiscount
  */
  public function discount(Request $request)
  {
    $data = $request->request->get("keyword");
    return $this->redirect("https://www.cdiscount.com/search/10/".$data.".html#_his_");
  }


  /**
   *Retourne les résultats de la recherche selon le nom entré dans la barre de recherche
   *@Route("/research", name="research")
   *@return Response retourne vers la page d'affichage de la searchbare
   *@return Article $articles le tableau d’articles qui résultent de la recherche
   *@return Wishlist $wishlists toutes les wishlists de l’utilisateur connecté
   */
  public function resultSearch(Request $request)
  {
    $data = $request->request->get('search');
    $allA = $this->getDoctrine()->getRepository(Article::class)->findAll();
    $repo1=$this->getDoctrine()->getRepository(Wishlist::class);
    $allW = $repo1->findAll();
    $wishlists = [];
    foreach ($allW as $i) {
        if ($i->getUser()==$this->getUser()) {
            array_push($wishlists, $i);
        }
    }
    $articles = [];
    if($data == null){
      foreach($allA as $a){
        if($a->getWishlist()==null){
              array_push($articles, $a);
        }
      }
    }else{
      foreach($allA as $a){
        if (((strpos(strtolower($a->getNom()), strtolower($data)) !== false))||(strpos(strtolower($a->getDescription()), strtolower($data)) !== false)) {
          if($a->getWishlist()==null){
              array_push($articles, $a);
          }
        }
      }
    }

    $articles =  array_unique($articles);


    return $this->render('wishlist/searchArticle.html.twig',[
       'articles'=>$articles,
       'wishlists'=>$wishlists,
     ]);
  }

  /**
   *Permet d'ajouter un article depuis la searchbar
   *
   *@Route("/addArticles/{id}/{idA}", name="addArticles")
   *
   *@param int $id identifiant de la wishlist directement dans l’url
   *@param int $idA identifiant de l’article directement dans l’url
   *@param EntityManagerInterface $em relation avec la base de données
   *
   *@return Response redirection vers la page des articles
   *@return int $id  l’identifiant de la wishlist choisie par l’utilisateur
   */
  public function addArticles(Request $request,$id,$idA, EntityManagerInterface $manager)
  {
    $article=new Article();
    $wishlist=new Wishlist();
    $allA= $this->getDoctrine()->getRepository(Article::class)->findAll();
    foreach ($allA as $i) {
      if ($i->getId()==$idA) {
        $article= $i;
      }
    }
    $allW=$this->getDoctrine()->getRepository(Wishlist::class)->findAll();
    foreach ($allW as $i) {
      if ($i->getId()==$id){
        $wishlist= $i;
      }
    }
    $filesystem = new Filesystem();
    foreach($allA as $a ){
      if($a->getId() == $idA){
        $article = clone $a;
        if (strpos($article->getImage(),"http")=== 0) {
          $article->setImage($a->getImage());
        }else{
          $filesystem = new Filesystem();
          $filesystem->copy('images/'.$a->getImage(),'images/new'.$a->getImage());
          $article->setImage('new'.$a->getImage());
        }
      }
    }
    $article->setWishlist($wishlist);
    $manager->persist($wishlist);
    $wishlist->addArticle($article);
    $manager->persist($article);
    $manager->flush();
    return $this->redirectToRoute('myArticles', [
      'id' => $wishlist->getId()]);
  }
}

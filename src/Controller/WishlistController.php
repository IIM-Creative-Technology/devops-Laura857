<?php

namespace App\Controller;

/**
 * Controller qui regroupe les liens entre les pages et des fonctions en PHP
 * l'annotation Route définit le chemin de l'URL
 *
 */
use App\Form\FormeWishlistType;
use App\Form\WishlistType;
use App\Form\FormAjoutArticleRecherche;

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
use App\Form\ThemeType;
use App\Form\ArticleType;
use App\Entity\User;
use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\String\Slugger\SluggerInterface;

class WishlistController extends AbstractController
{
    /**
     * regroupe les thèmes qui sont pré paramétrés et les tries dans l'ordre alphabétique
    * @Route("/", name="wishlist")
    * @return Response retourne vers la page d'accueil en renvoyant les thèmes
    *@return Response retourne un tableau de thèmes à afficher
    */

    public function index()
    {
        $repo=$this->getDoctrine()->getRepository(Theme::class);
        $allThemes = $repo->findBy(array('isParametred' => true), array('name'=> 'ASC'));
        $themes= [];
        foreach ($allThemes as $i) {
            array_push($themes, $i);
        }
        return $this->render('wishlist/index.html.twig', [
           'controller_name' => 'WishlistController',
           'themes'=>$themes
       ]);
    }


    /**
     * @Route("/propos", name="propos")
    * @return Response retourne vers la page à propos
    */

    public function propos()
    {
        return $this->render('wishlist/propos.html.twig', [
            'controller_name' => 'WishlistController',
        ]);
    }


    /**
    *
    *Gère les formulaires liés à la création, la modification, et l’ajout d’article
    *depuis la barre de recherche pour une wishlist.
    *
    * @Route("/formWishlist", name="formWishlist")
    * @Route("/formWishlist/{id}/modif", name="formWishlist_modif")
    * @Route("/formWishlist/{a}", name="formWishlist")
    *
    *@param Wishlist $wishlist une wishlist initialisée à nul
    *@param Theme $theme un thème initialisé à nul
    *@param ThemeNP $themeNP un thème non pré paramétré initialisé à nul
    *@param Request $request traite les formulaires, contient les informations de la demande du client
    *@param EntityManagerInterface $manager relation avec la base de données
    *@param int $a identifiant d’un article
    *
    *@return Response retourne la page d’affichage du formulaire de wishlist
    *@return Response redirige vers la page de mes wishlists
    *@return Form $formWishlist retourne le formulaire de wishlist
    *@return boolean $error retourne s’il y a une erreur pour le nom de thème
    *@return Boolean $modifmode retourne si le formulaire est à modifier
    *@return Theme $theme retourne la variable du thème du formulaire
    *@return Theme $name retourne la variable du thème non paramétré du formulaire
    *@return boolean $errorDate retourne s’il y a une erreur pour la date
    */
    public function formWishlist(Wishlist $wishlist=null, Theme $theme=null, Theme $themeNp=null, Request $request, EntityManagerInterface $manager, int $a=null)
    {
        $error=false;
        $errorDate=false;
        $session= $request->getSession();
        if (!$wishlist) {
            $wishlist= new Wishlist();
            $theme = new Theme();
            $themeNp = new Theme();
        }else if($wishlist->getTheme()->getIsParametred()==1){
          $theme=new Theme();
          $themeNp=new Theme();

          dump($theme);

        }else if($wishlist->getTheme()->getIsParametred()!=1){
          $themeNp=$wishlist->getTheme();
          $theme=new Theme();
        }
        $form = $this->createForm(FormeWishlistType::class, [ 'wishlist'=>$wishlist,'theme'=>$theme,'name'=>$themeNp]);
dump($themeNp);
        $form->handleRequest($request);
        if ($wishlist->getDateexpiration() < new \DateTime()) {
            $modeD=false;
        } else {
            $modeD=true;
        }

        if ($themeNp->getName()|| $theme->getName()) {
            $modeT=true;
        } else {
            $modeT=false;
        }
        if ($form->isSubmitted()&& $form->isValid()&& $modeT==true && $modeD==true) {
            $wishlist->setUpdatedAt(new \DateTime('now'));

            if (!$wishlist->getId()) {
                $wishlist->setDateCreation(new \DateTime());
            }

            if ($themeNp->getName()) {
                $themeNp->setIsparametred(0);
                $themeNp->setUpdatedAt(new \DateTime());
                $wishlist->setTheme($themeNp);
                $manager ->persist($themeNp);
            } elseif ($theme->getName()) {
                $t=$this->getDoctrine()->getRepository(Theme::class)->findOneBy(['name' => $theme->getName()]);
                $theme=$t;
                $wishlist->setTheme($theme);
                $manager ->persist($theme);
            }
            $filesystem = new Filesystem();
            if ($a!=null) {
                $allA= $this->getDoctrine()->getRepository(Article::class)->findAll();
                foreach ($allA as $ar) {
                    if ($ar->getId()==$a) {
                        $article = clone $ar;
                        if (strpos($article->getImage(), "http")=== 0) {
                            $article->setImage($ar->getImage());
                        } else {
                            $filesystem = new Filesystem();
                            $filesystem->copy('images/'.$ar->getImage(), 'images/new'.$ar->getImage());
                            $article->setImage('new'.$ar->getImage());
                        }
                    }
                }
                $article->setWishlist($wishlist);
                $manager->persist($wishlist);
                $wishlist->addArticle($article);
                $manager->persist($article);
            }

            $wishlist->setIsparametree(false);
            $manager ->persist($wishlist);
            $user= $this->getUser();
            $wishlist->setUser($user);
            $manager->flush();
            $session->set('wishlist', $wishlist);

            return $this->redirectToRoute('mywishlist');
        } elseif ($form->isSubmitted()&& $form->isValid()&& $modeT==false) {
            $error=true;
        } elseif ($form->isSubmitted()&& $form->isValid() && $modeD==false) {
            $errorDate=true;
        }
        $data=$form->getData();
        return $this->render('wishlist/formWishlist.html.twig', [
          'formWishlist'=> $form->createView(),
          'error'=>$error,
          'modifmode'=>$wishlist->getId()!=null,
          'theme'=>$theme,
          'name'=>$themeNp,
          'errorDate'=>$errorDate]);
    }
    /**
    *Formulaire pour créer une wishlist clone d’une wishlist préparamétrée.
    *
    *@Route("/formWishlistPrepara/{id}", name="formWishlistPrepara")
    *@param Request $request traite les formulaires, contient les informations de la demande du client
    *@param EntityManagerInterface $manager relation avec la base de données
    *@param int $id identifiant directement dans l’url
    *@return Response retourne vers la page de formulaire de wishlist pour wishlist pré paramétrée
    *@return Response redirige vers mes wishlists
    *@return Form $formWishlist retourne le formulaire de wishlist pré paramétrée
    *@return Theme $theme retourne le thème de la wishlist
    */
    public function formWishlistPrepara(Request $request, EntityManagerInterface $manager, $id)
    {
        $session= $request->getSession();
        $wishlist= new Wishlist();
        $repo=$this->getDoctrine()->getRepository(Theme::class);
        $allThemes = $repo->findAll();
        $theme =new Theme();
        foreach ($allThemes as $t) {
            if ($t->getId() == $id) {
                $theme = $t;
            }
        }
        $repo2 = $this->getDoctrine()->getRepository(Wishlist::class);
        $allWishlist = $repo2->findAll();
        foreach ($allWishlist as $i) {
            if ($i->getIsparametree() == true) {
                if ($i->getTheme() == $theme) {
                    $wishlistPrePara = $i;
                }
            }
        }
        $repo3 = $this->getDoctrine()->getRepository(Article::class);
        $allArticles= $repo3->findAll();
        $articles= [];
        foreach ($allArticles as $a) {
            if ($a->getWishlist() == $wishlistPrePara) {
                array_push($articles, $a);
            }
        }

        $manager ->persist($theme);
        $form = $this->createForm(WishlistType::class, $wishlist);
        $form->handleRequest($request);
        if ($form->isSubmitted()&& $form->isValid()) {
            foreach ($articles as $a) {
                $ar=new Article();
                $ar= clone $a;
                $filesystem = new Filesystem();
                $filesystem->copy('images/'.$a->getImage(), 'images/new'.$ar->getImage());
                $ar->setImage('new'.$a->getImage());

                $wishlist->addArticle($ar);
                $manager->persist($ar);
            }
            $wishlist->setDateCreation(new \DateTime());
            $wishlist->setTheme($theme);
            $wishlist->setIsparametree(false);
            $user= $this->getUser();
            $wishlist->setUser($user);
            $wishlist->setUpdatedAt(new \DateTime('now'));
            $manager ->persist($wishlist);
            $manager->flush();
            $session->set('wishlist', $wishlist);
            return $this->redirectToRoute('mywishlist');
        }
        return $this->render('wishlist/formWishlistPrepara.html.twig', [
          'formWishlist'=> $form->createView(),
          'theme'=>$theme
        ]);
    }



    /**
     * @Route("/formArticle/{idW}", name="formArticle")
     * @Route("/formArticle/{id}/modif", name="formArticle_modif")
     * @return Response retourne la page d’affichage du formulaire d’ajout ou de modification d’un article
     * @return Response retourne la page 404 si l’utilisateur n’est pas connecté
     * @return Response redirige vers la page d’affichage des articles. Si la wishlist associée à l’article n’est pas pré paramétré « myArticles », sinon « myTheme »
     * @return Form $formArticle retourne le formulaire d’article
     * @return boolean $modifmode retourne true s’il s'agit d'un article à modifier et false si c’est pour en créer un nouveau
     * @return Article $article retourne l’article modifié ou créé
     * @return boolean $errirUrl retourne si le format de l’url est correct ou non
     */
    public function formArticle(Article $article = null, Request $request, EntityManagerInterface $manager, int $idW=null, int $id=null)
    {
        $errorUrl=false;
        dump($article);
        if (!$article) {
            $article = new Article();
        }
        $wishlist=new Wishlist();
        $form = $this->createForm(ArticleType::class, $article);
        $form->handleRequest($request);


        $falseUrl=$this->startsWith($article->getUrl(), "http");


        if ($form->isSubmitted()&& $form->isValid() && $falseUrl==true) {
            if ($article->getWishlist()==null) {
                $allW=$this->getDoctrine()->getRepository(Wishlist::class)->findAll();
                foreach ($allW as $w) {
                    if ($w->getId()==$idW) {
                        $wishlist=$w;
                    }
                }
            } else {
                $allW=$this->getDoctrine()->getRepository(Wishlist::class)->findAll();
                foreach ($allW as $w) {
                    if ($w->getId()==$article->getWishlist()->getId()) {
                        $wishlist=$w;
                    }
                }
            }
            dump($wishlist);

            $article->setWishlist($wishlist);
            $article->setUpdatedAt(new \DateTime('now'));

            $jsonRecu = file_get_contents("apiDiscount.json");
            $obj = json_decode($jsonRecu);



            $manager->persist($article);
            if ($wishlist->getBudget() !=null) {
                $budgetTotal = 0;
                $repo = $this->getDoctrine()->getRepository(Article::class);
                $allArticles= $repo->findAll();
                $articles= [];
                foreach ($allArticles as $a) {
                    if ($a->getWishlist() == $wishlist) {
                        $budgetTotal += $a->getPrix();
                    }
                }
                $budgetTotal += $article->getPrix();

                if ($budgetTotal > $wishlist->getBudget()) {
                    $this->addFlash('alert', 'En ajoutant cet article vous avez dépassé votre budget fixé. Vous êtes actuellement à '.$budgetTotal.'€ au lieu de '.$wishlist->getBudget().'€.');
                }
            }
            dump($article->getNom());
            $manager->flush();
            if ($wishlist->getIsparametree()==false) {
                return $this->redirectToRoute('myArticles', ['id' => $wishlist->getId()]);
            } else {
                $theme=$wishlist->getTheme();
                $idTheme=$theme->getId();
                return $this->redirectToRoute('myTheme', ['id' => $idTheme]);
            }
        } elseif ($form->isSubmitted()&& $form->isValid()&& $falseUrl==false) {
            $errorUrl=true;
        }


        if ($this->isGranted('ROLE_USER') == false) {
            return $this->render('erreur/erreur404.html.twig', [
                'controller_name' => 'WishlistController',
            ]);
        }
        return $this->render('wishlist/formArticle.html.twig', [
          'formArticle'=> $form->createView(),
          'modifmode'=> $article->getId()!=null,
          'article'=>$article,
          'errorUrl'=>$errorUrl,
        ]);
    }



    /**
   * Gère la suppression d'une wishlist
   * @Route("/deletWshl/{id}", name="deletWshl")
   * @param int $id l’identifiant de la wishlist à supprimer
   * @param EntityManagerInterface $manager relation avec la base de données
   * @return Response efface une wishlist
   * @return Response retourne vers la page d'affichage de mes wishlists
   */
    public function deletWshl(EntityManagerInterface $manager, int $id)
    {
        $repo=$this->getDoctrine()->getRepository(Wishlist::class);
        $allW = $repo->findAll();
        $user = $this->getUser() ;
        foreach ($allW as $wishlist) {
            if ($wishlist->getId()== $id) {
                if ($wishlist->getTheme()->getIsParametred()!=1) {
                    $theme=$wishlist->getTheme();
                    $manager->remove($theme);
                    $theme->removeWishlist($wishlist);
                }
                $user->removeWishlist($wishlist);
                $manager->remove($wishlist);
                $manager->flush();
            }
        }
        $this->addFlash('success', 'La wishlist '.$wishlist->getNom().' a bien été effacée');
        return $this->redirectToRoute('mywishlist');
    }

    /**
    * Supprime un article d'une wishlist
    *
    * @Route("/deleteArticle/{id}", name="deleteArticle")
    * @return Response redirige vers l’affichage de la wishlist. Si la wishlist associée à l’article n’est pas pré paramétré « myArticles », sinon « myTheme »
    */
    public function deleteArticle(EntityManagerInterface $manager, int $id)
    {
        $repo=$this->getDoctrine()->getRepository(Article::class);
        $allA = $repo->findAll();
        foreach ($allA as $article) {
            if ($article->getId() == $id) {
                $wishlist = $article->getWishlist();
                $wishlist->removeArticle($article);
                $manager->remove($article);
                $manager->flush();
                $this->addFlash('success', 'Votre article "'.$article->getNom().'" a bien été supprimé');
            }
        }
        if ($wishlist->getIsparametree()==true) {
            return $this->redirectToRoute('myTheme', ['id' => $wishlist->getTheme()->getId()]);
        } else {
            return $this->redirectToRoute('myArticles', ['id' => $wishlist->getId()]);
        }
    }

    /**
    * Permet d'afficher les informations d'un article ayant pour identifiant celui passé en paramètre
    * @Route("/article/{id}", name="article")
    *@return Response retourne vers la page d'affichage d'un article'
    *@return Article $article retourne l'article qui doit être affiché
    */
    public function article(EntityManagerInterface $manager, Request $request, int $id)
    {
        $repo = $this->getDoctrine()->getRepository(Article::class);
        $allArticles= $repo->findAll();
        $articles= [];
        foreach ($allArticles as $i) {
            if ($i->getId()==$id) {
                $article = $i;
            }
        }


        dump($request);
        if ($request->request->count() > 0) {
            $article->setRating($request->request->get('rating'));
            $manager->persist($article);
            $manager->flush();
            return $this->redirectToRoute('myArticles', ['id' => $article->getWishlist()->getId()]);
        }
        return $this->render('wishlist/article.html.twig', [
            'article' => $article
          ]);
    }

    /**
     * @Route("/mywishlist", name="mywishlist")
     * @param Request $request traite les formulaires, contient les informations de la demande du client
     * @param EntityManagerInterface $manager relation avec la base de données
     *@return Response retourne vers la page d'affichage des wishlists
     *@return Wishlist $wishlists retourne un tableau de wishlists à afficher
     *@return Float $budgets retourne les budgets de chaque wishlist
     */
    public function mywishlist(EntityManagerInterface $manager, Request $request)
    {
        $session= $request->getSession();
        $user=$this->getUser();
        if ($session->get('wishlist')) {
            $session->get('wishlist')->setUser($user);
            dump($session->get('wishlist'));
            $wshl=$session->get('wishlist');
            dump($wshl);
            $manager ->merge($wshl);
            $manager->flush();
        }
        $repo=$this->getDoctrine()->getRepository(Wishlist::class);
        $allW = $repo->findAll();
        $wishlists = [];
        foreach ($allW as $i) {
            if ($i->getUser()==$this->getUser()) {
                array_push($wishlists, $i);
            }
        }
        $repo1 = $this->getDoctrine()->getRepository(Article::class);
        $allArticles = $repo1->findAll();
        $articles = [];

        $budgets = [];
        foreach ($wishlists as $w) {
            $budgetTotal = 0;
            foreach ($allArticles as $a) {
                if ($a->getWishlist() == $w) {
                    $budgetTotal += $a->getPrix();
                }
            }
            array_push($budgets, $budgetTotal);
        }
        dump($session->get('article'));
        $session->remove('wishlist');
        dump($session->get('article'));
        return $this->render('wishlist/myWishlist.html.twig', [
            'controller_name' => 'WishlistController',
            'wishlists'=>$wishlists,
            'budgets'=>$budgets,
        ]);
    }


    /**
    * la route se situe dans le fichier routes.php dans le dossier config  pour l'encodage du lien url
    * pas besoin de mettre l'annotation Routes
    *
    * @param Request $request traite les formulaires, contient les informations de la demande du client
    * @param EntityManagerInterface $manager relation avec la base de données
    * @param int $id l’identifiant de la wishlist
    *@return Response retourne la page d’affichages des articles
    *@return Article $articles retourne le tableau d'articles à afficher
    *@return Article $suggestions retourne le tableau de suggestions
    *@return Wishlist $wishlist retourne la wishlist correspondant aux articles
    *@return Theme $theme retourne le thème de la wishlist
    *@return User $userWishlist retourne le propriétaire de la wishlist
    */
    public function myArticles(EntityManagerInterface $manager, int $id, Request $request)
    {
        $session= $request->getSession();
        $repo=$this->getDoctrine()->getRepository(Wishlist::class);
        $allW = $repo->findAll();

        $repo2 = $this->getDoctrine()->getRepository(Article::class);
        $allArticles= $repo2->findBy(array(), array('rating' => 'DESC'));
        $articles= [];
        $wishlist=new Wishlist();
        //on trouve la wishlist qui corespond à l'id
        foreach ($allW as $i) {
            if ($i->getId()==$id) {
                $wishlist=$i;
            }
        }
        //on rassemble tout les articles de la wishlist
        foreach ($allArticles as $i) {
            if ($i->getWishlist()== null) {
            } elseif ($i->getWishlist()->getId()== $id) {
                array_push($articles, $i);
            }
        }
        $user=new User();
        if ($this->getUser() !=null) {
            $user = $wishlist->getUser();
        }

        $repo3=$this->getDoctrine()->getRepository(Theme::class);
        $allThemes = $repo3->findAll();
        $theme =new Theme();
        foreach ($allThemes as $t) {
            if ($t->getId() == $wishlist->getTheme()->getId()) {
                $theme = $t;
            }
        }
        $session->remove('article');

        $suggestions = [];
        foreach ($articles as $a) {
        foreach ($allArticles as $o) {
            $i=false;
              if ((stristr($o->getNom(), $a->getNom()) !== false) || (stristr($o->getDescription(), $a->getNom()) !== false)) {
                  if ($this->startsWith($o->getImage(), "http")) {
                    foreach($articles as $ar){
                      if($o->getNom() == $ar->getNom()){
                        $i=true;
                      }
                    }
                    if($i==false){
                      array_push($suggestions,$o);
                    }
                  }
              }
              // sugestions avec les themes
                $i= false;
                if($o->getWishlist()){
                if($o->getWishlist()->getIsparametree() == 1 ){
                if($wishlist->getTheme() == $o->getWishlist()->getTheme()){
                  foreach($articles as $ar){
                    if($o->getNom() == $ar->getNom()){
                      $i=true;
                    }
                  }
                  if($i==false){
                    array_push($suggestions,$o);
                  }
                }
              }
            }
          }
        }
  $suggestions =  array_unique($suggestions);
        shuffle($suggestions);

        return $this->render('wishlist/myArticles.html.twig', [
          'controller_name' => 'WishlistController',
          'articles'=>$articles,
          'suggestions'=>$suggestions,
          'wishlist'=>$wishlist,
          'theme'=>$theme,
          'userWishlist' => $user,
        ]);
    }

    /**
     * retourne vrai si la chaine commence par la sous chaine indiquée
     * @param $string la chaine de caractère à tester
     * @param $startString le chaine de caractère qui doit être au début
     * @return boolean si la chaine commence ou non par la chaine passée en deuxieme paramètre
     */
    public function startsWith($string, $startString)
    {
        $len = strlen($startString);
        return (substr($string, 0, $len) === $startString);
    }

    /**
     * @Route("/profil", name="profil")
    * @return Response retourne la page du profil utilisateur si l’utilisateur est connecté, sinon la page d’erreur 404.
    */
    public function profil()
    {
        if ($this->isGranted('ROLE_USER') == false) {
            return $this->render('erreur/erreur404.html.twig', [
                'controller_name' => 'WishlistController',
            ]);
        } else {
            return $this->render('wishlist/profil.html.twig', [
              'controller_name' => 'WishlistController',
            ]);
        }
    }
    /**
     * @Route("/faq", name="faq")
    * @return Response retourne vers la page FAQ
    */
    public function faq()
    {
        return $this->render('wishlist/faq.html.twig', [
            'controller_name' => 'WishlistController',
        ]);
    }




    /**
    *Permet de générer le modale pour changer d'image de présentation de la wishlist dans la page myWishlist
    *
    *@param int $idW identifiant de la wishlist
    *
    *@return Response retourne vers la page du modale si l’utilisateur est connecté, sinon vers la page 404.
    *@return Array $images retourne les images trouvées dans le répertoire
    *@return int $id retourne l'identifiant de la wishlist
    */
    public function imageChoice(int $id)
    {
        if ($this->isGranted('ROLE_USER') == false) {
            return $this->render('erreur/erreur404.html.twig', [
                'controller_name' => 'WishlistController',
            ]);
        } else {
            $nameDir = 'wishlist';
            $dir = opendir($nameDir) or die('Erreur de listage : le répertoire n\'existe pas');
            $files = array();
            while ($element = readdir($dir)) {
                $type = substr(strrchr($element, '.'), 1);
                if (strtolower($type) == 'jpg' || strtolower($type) == 'png') {
                    $files[] = $element;
                }
            }
        }
        closedir($dir);
        return $this->render('wishlist/modaleViewWishlist.html.twig', [
            'controller_name' => 'WishlistController',
            'images'=>$files,
            'id'=>$id
          ]);
    }

    /**
     *Permet de changer d'image de présentation de la wishlist dans la page mywishlist
     *
     *@param int $idW identifiant de la wishlist
     *@param string $url l’url de la nouvelle image
     *@param EntityManagerInterface $manager relation avec la base de données
     * @Route("/modifImage/{id}/{url}", name="modifImage")
     *
     *@return Response retourne vers la page d’accueil si l’utilisateur est connecté ou vers la page 404
     */
    public function modifImage(int $id, $url, EntityManagerInterface $manager)
    {
        if ($this->isGranted('ROLE_USER') == false) {
            return $this->render('erreur/erreur404.html.twig', [
                                 'controller_name' => 'WishlistController',
                                 ]);
        } else {
            $wishlist = new Wishlist();
            $repo = $this->getDoctrine()->getRepository(Wishlist::class);
            $allWishlist = $repo->findAll();
            foreach ($allWishlist as $w) {
                if ($w->getId() == $id) {
                    $wishlist=$w;
                    $nomImage = $url;
                    $wishlist->setImageFond($nomImage);
                    $manager ->persist($wishlist);
                    $manager->flush();
                }
            }
        }
        return $this->redirectToRoute('mywishlist');
    }
}

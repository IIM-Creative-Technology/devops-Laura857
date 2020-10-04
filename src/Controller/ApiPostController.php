<?php

namespace App\Controller;

use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;
use App\Entity\Article;
use App\Entity\Wishlist;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\ArticleRepository;
use Symfony\Bundle\FrameworkBundle\Controller\WishlistCOntroller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Validator\Constraints\DateTime;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\SerializerInterface;

class ApiPostController extends AbstractController
{

    /**
    * Transforme les données du fichier json en objet Article, puis l'enregistre dans la base de données
    *
    * @Route("/api", name="api_post_store")
    *
    * @param Request $request traite les formulaires, contient les informations de la demande du client
    * @param EntityManagerInterface $em  relation avec la base de données
    * @param SerializerInterface $serializer serialise un objet
    * @return Response redirige vers la page d'accueil
    */
    public function store(Request $request, SerializerInterface $serializer, EntityManagerInterface $em)
    {
        $jsonRecu = file_get_contents("apiDiscount.json");
        $obj = json_decode($jsonRecu);
        foreach ($obj as $o) {
          $article = new Article();
          $article->setUrl($o->BestOffer->ProductURL);
          $article->setNom($o->Name);
          $article->setPrix($o->BestOffer->SalePrice);
          $article->setDescription($o->Description);
          $article->setImage($o->MainImageUrl);
          $article->setUpdatedAt(new \DateTime('now'));
          $em->persist($article);
          $em->flush();
        }
        //return $this->json($article, 201, []);
        $this->addFlash('success', 'ajout bien effectué');
        return $this->redirectToRoute('wishlist');
    }
}

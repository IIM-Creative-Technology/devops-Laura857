<?php

namespace App\Tests\Entity;
use App\Controller\WishlistController;
use App\Entity\Wishlist;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;
use Doctrine\ORM\EntityManagerInterface;
class wishlistTest extends KernelTestCase{
 private $entityManager;

    protected function setUp(): void
    {
        $kernel = self::bootKernel();

        $this->entityManager = $kernel->getContainer()
            ->get('doctrine')
            ->getManager();
    }
    //teste si la wishlist préparametrée à le même nom que son thème
public function testForNameAndThemeP()
    {
        $wishlists = $this->entityManager
            ->getRepository(Wishlist::class)
            ->findBy(['isparametree' => 1])
        ;

        foreach($wishlists as $w){
          if($w->getTheme()=='anniversaire'){
            $wishlist=$w;
          }

        }
        $this->assertEquals('anniversaire', $wishlist->getTheme(),$wishlist->getNom());
    }

//teste tous les champs wishlists qui doient pas etre null
    public function testWishlistsOk()
        {
            $wishlists = $this->entityManager
                ->getRepository(Wishlist::class)
                ->findAll()
            ;
            foreach ($wishlists as $w) {
              $this->assertNotNull($w->getNom(), $w->getTheme(),$w->getBudget(),$w->getDateCreation());
            }

        }

      //teste les champs suposés être vide pour une wishlist préparamétrée
        public function testWishlistsPOk()
            {
                $wishlists = $this->entityManager
                    ->getRepository(Wishlist::class)
                    ->findBy(['isparametree'=>1])
                ;

                foreach ($wishlists as $w) {
                  $this->assertNull($w->getDateexpiration());
                $this->assertEquals($w->getDestinataire() ,'',$w->getDescription() );
                }

            }


    protected function tearDown(): void
    {
        parent::tearDown();

        // doing this is recommended to avoid memory leaks
        $this->entityManager->close();
        $this->entityManager = null;
    }
}

?>

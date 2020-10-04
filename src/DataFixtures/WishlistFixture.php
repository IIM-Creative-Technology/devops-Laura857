<?php

namespace App\DataFixtures;

use App\Entity\User;
use App\Entity\Wishlist;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class WishlistFixture extends Fixture
{
    public function load(ObjectManager $manager)
    {   $user=new User();
        $user->setName('cohen')
               ->setPrenom('chirel')
               ->setEmail('chi@gmail.com')
               ->setPseudo('chirel')
               ->setPassword('rien')
               ->setRoles(["ROLE_ADMIN"]);

        $wishlist1=new Wishlist();
        $wishlist1->setNom('test1')
        ->setIsParametree(false)
        ->setTheme('rien')
        ->setOwner('')
        ->setDestinataire('personne')
        ->setBudget('2')
        ->setSharlink("http://vide")
        ->setDateCreation(new \DateTime())
        ->setDescription('une wishlist')
        -> setDateexpiration(new \DateTime())
       ->setUser($user);
        $wishlist2=new Wishlist();
       $wishlist2->setNom('test2')
        ->setIsParametree(false)
        ->setTheme('rien')
        ->setOwner('')
        ->setDestinataire('personne')
        ->setBudget('2')
        ->setSharlink("http://vide")
        ->setDateCreation(new \DateTime())
        ->setDescription('une wishlist')
        -> setDateexpiration(new \DateTime())
       ->setUser($user);
       
       $manager->persist($user);
       $manager->persist($wishlist1);
       $manager->persist($wishlist2);

        $manager->flush();
    }

}

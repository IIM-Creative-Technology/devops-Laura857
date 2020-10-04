<?php
namespace App;

use App\Model\TestObject;
use Symfony\Component\Form\Test\TypeTestCase;
use App\Entity\Wishlist;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\Form\PreloadedExtension;
use App\Form\WishlistType;

class WishlistTypeTest extends TypeTestCase
{
        private $objectManager;
        protected function setUp()
        {
            $this->objectManager = $this->createMock(ObjectManager::class);
            parent::setUp();
        }
    
        protected function getExtensions()
        {
            $type = new WishlistType($this->objectManager);
    
            return [
                new PreloadedExtension([$type], []),
            ];
        }
    
        
        public function testSubmitValidData()
        {
            $objectToCompare = new Wishlist();

            $formData = [
              
                'nom' => 'nellou',
                'budget' => '12',
                'description' => 'test',
                'dateexpiration' => '18/09/2021',
                'destinataire' => 'test',
            ];

            $form = $this->factory->create(WishlistType::class);
            $object = new Wishlist();
            $form->submit($formData);
            $this->assertTrue($form->isSynchronized());
            $this->assertEquals($object, $objectToCompare);
            $view = $form->createView();
            $children = $view->children;
            foreach (array_keys($formData) as $key) {
                $this->assertArrayHasKey($key, $children);
            }

        }

      
}
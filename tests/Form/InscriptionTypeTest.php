<?php
namespace App;

use App\Model\TestObject;
use Symfony\Component\Form\Test\TypeTestCase;
use App\Entity\User;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\Form\PreloadedExtension;
use App\Form\InscriptionType;

class InscriptionTypeTest extends TypeTestCase
{
        private $objectManager;
        protected function setUp()
        {
            $this->objectManager = $this->createMock(ObjectManager::class);
            parent::setUp();
        }
    
        protected function getExtensions()
        {
            $type = new InscriptionType($this->objectManager);
    
            return [
                new PreloadedExtension([$type], []),
            ];
        }
    
        
        public function testSubmitValidData()
        {
            $objectToCompare = new User();

            $formData = [
                'name' => 'u',
                'prenom' => 'nelly',
                'email' => 'nelly.ung@hotmail.fr',
                'pseudo' => 'nellou',
                'password' => 'test',
                'confirm_password' => 'test',
            ];

            $form = $this->factory->create(InscriptionType::class);
            $object = new User();
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
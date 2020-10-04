<?php
namespace App;

use App\Model\TestObject;
use Symfony\Component\Form\Test\TypeTestCase;
use App\Entity\User;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\Form\PreloadedExtension;
use App\Form\EditType;

class EditTypeTest extends TypeTestCase
{
        private $objectManager;
        protected function setUp()
        {
            $this->objectManager = $this->createMock(ObjectManager::class);
            parent::setUp();
        }
    
        protected function getExtensions()
        {
            $type = new EditType($this->objectManager);
    
            return [
                new PreloadedExtension([$type], []),
            ];
        }
    
        
        public function testSubmitValidData()
        {
            $objectToCompare = new User();

            $formData = [
                'name' => 'nellou',
                'prenom' => 'nellou',
                'email' => 'nelly.ung@hotmail.fr',
                'pseudo' => 'nellou',
                
            ];

            $form = $this->factory->create(EditType::class);
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
<?php
namespace App;

use App\Model\TestObject;
use Symfony\Component\Form\Test\TypeTestCase;
use App\Entity\Theme;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\Form\PreloadedExtension;
use App\Form\ThemeType;

class ThemeTypeTest extends TypeTestCase
{
        private $objectManager;
        protected function setUp()
        {
            $this->objectManager = $this->createMock(ObjectManager::class);
            parent::setUp();
        }
    
        protected function getExtensions()
        {
            $type = new ThemeType($this->objectManager);
    
            return [
                new PreloadedExtension([$type], []),
            ];
        }
    
        
        public function testSubmitValidData()
        {
            $objectToCompare = new Theme();

            $formData = [
              
                'name' => 'nellou',
                'url_img' => 'coeur',
            ];

            $form = $this->factory->create(ThemeType::class);
            $object = new Theme();
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
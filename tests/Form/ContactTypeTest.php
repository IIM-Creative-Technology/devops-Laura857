<?php
namespace App;

use App\Model\TestObject;
use Symfony\Component\Form\Test\TypeTestCase;
use App\Entity\Message;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\Form\PreloadedExtension;
use App\Form\ContactType;


class ContactTypeTest extends TypeTestCase
{
        private $objectManager;
        protected function setUp()
        {
            //ne pas prendre en compte les dépendances
            $this->objectManager = $this->createMock(ObjectManager::class);
            parent::setUp();
        }
    
        protected function getExtensions()
        {
          
            //créer une instance ContactType avec les dépendances simulées
            $type = new ContactType($this->objectManager);
    
            return [
               //enregistre les instances de ContactType avec PreloadedExtension
                new PreloadedExtension([$type], []),
            ];
        }
    
        /**
         * 
         * @var $objectToCompare pour savoir si on récupérera les données de la soumission du formulaire
         * @var $object remplit ses propriétés avec les données stockées dans $formData
         * 
         */
        public function testSubmitValidData()
        {
            $objectToCompare = new Message();

            $formData = [
                'name' => 'test',
                'email' => 'nelly.ung@hotmail.fr',
                'texte' => 'texte',
            ];
            
            $form = $this->factory->create(ContactType::class);

            $object = new Message();

            //soumet directement les données du formulaire
            $form->submit($formData);
            //vérifie que le formulaire compile, aucune exception levée
            $this->assertTrue($form->isSynchronized());


            //vérifie que $objectToCompare a été modifié comme prévu lors de la soumission du formulaire
            //les champs sont correctement spécifiés
            $this->assertEquals($object, $objectToCompare);

            //vérifier la création du FormView : tous les widgets affichés sont disponibles dans la propriété children
            $view = $form->createView();
            $children = $view->children;
            foreach (array_keys($formData) as $key) {
                $this->assertArrayHasKey($key, $children);
            }

        }

      
}
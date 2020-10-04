<?php
namespace App\Form;

use App\Entity\Message;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ContactType extends AbstractType
{
    /**
    *Formulaire de contact
    * @param FormBuilderInterface $builder construit automatiquement un formulaire
    * @param array $options passer des options pour le formulaire si nécéssaire
    */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', TextType::class, array('label' => false))
            ->add('email', EmailType::class, array('label' => false))
            ->add('texte', TextareaType::class, array('label' => false))
        ;
    }

    /**
    * Configure les options par default
    * @param OptionResolver $resolver rajoute des options supplémentaires si nécéssaire
    */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Message::class
        ]);
    }
}

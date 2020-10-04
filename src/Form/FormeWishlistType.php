<?php

namespace App\Form;

use Symfony\Component\Form\Extension\Core\Type\EntityType;
use App\Form\WishlistType;
use App\Form\ThemeType;
use App\Form\ThemePType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class FormeWishlistType extends AbstractType
{
    /**
    *Formulaire pour le choix des thèmes d'une wishlist
    *
    * @param FormBuilderInterface $builder construit automatiquement un formulaire
    * @param array $options passer des options pour le formulaire si nécéssaire
    */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('wishlist', WishlistType::class)
            ->add('theme',ThemePType::class)
            ->get('theme');
        $builder
            ->add('name',ThemeNpType::class,['required'=>true]);
    }

    /**
    * Configure les options par default
    *
    * @param OptionResolver $resolver rajoute des options supplémentaires si nécéssaire
    */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
          'validation_groups' => 'register'
        ]);
    }
}

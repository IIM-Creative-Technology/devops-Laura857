<?php
namespace App\Form;

use App\Entity\Theme;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\FileType;

class ThemeType extends AbstractType
{
    /**
    *Formulaire pour créer un nouveau thème. Peut se faire seulement si on est administrateur.
    *
    * @param FormBuilderInterface $builder construit automatiquement un formulaire
    * @param array $options passer des options pour le formulaire si nécéssaire
    */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
          ->add('name')
          ->add('imageFile', FileType::class, [
            'required'=> false
          ])
          ->add('url_img', ChoiceType::class, [
            'choices'  => [
                'avion' => 'fa fa-plane',
                'bébé' => 'fa fa-baby',
                'cadeau' => 'fa fa-gift',
                'cartable' => 'fa fa-briefcase',
                'coeur' => 'fa fa-heart',
                'cocktail' => 'fa fa-cocktail',
                'gâteau' => 'fa fa-birthday-cake',
                'graduation' => 'fa fa-graduation-cap',
                'jour de l\'an' => 'fa fa-glass-martini',
                'landeau' => 'fa fa-baby-carriage',
                'livre' => 'fa fa-book-open',
                'mask' => 'fa fa-masque',
                'musique' => 'fa fa-music',
                'santé' => 'fa fa-briefcase-medical',
                'sapin' => 'fa fa-tree',
                'sucre d\'orge' => 'fa fa-candy-cane',
                'voiture' => 'fa fa-car',
              ],
          ]);
    }

    /**
    * Configure les options par default
    *
    * @param OptionResolver $resolver rajoute des options supplémentaires si nécéssaire
    */
    public function configureOptions(OptionsResolver $resolver)
   {
       $resolver->setDefaults([
           'data_class' => Theme::class,
       ]);
   }
}
?>

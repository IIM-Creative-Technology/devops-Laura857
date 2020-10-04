<?php
namespace App\Form;


use App\Entity\Theme;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class ThemeNpType extends AbstractType
{
    /**
    *Formulaire pour le champs d'un thème non pré paramétré
    *
    * @param FormBuilderInterface $builder construit automatiquement un formulaire
    * @param array $options passer des options pour le formulaire si nécéssaire
    */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
     $builder

        ->add('name',TextType::class,[
          'required'=>false,
          'label'=>'Autre Thème:',
          'invalid_message' => 'Thème déjà existant en choisir un autre.',
          'attr' => [
              'placeholder' => 'autre thème'
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

<?php
namespace App\Form;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Doctrine\ORM\QueryBuilder;
use App\Entity\Theme;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use App\Repository\ThemeRepository;

class ThemePType extends AbstractType
{
    /**
    *Formulaire pour le champs d'un thème pré paramétré. On chercher tout les thèmes prés
    *paramétrés et on les ajoute au menu déroulant.
    *
    * @param FormBuilderInterface $builder construit automatiquement un formulaire
    * @param array $options passer des options pour le formulaire si nécéssaire
    */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
      $builder
        ->add('name',EntityType::class,[
            'class'=>Theme::class,
            'query_builder' => function (ThemeRepository $tr) {
              return $tr->createQueryBuilder('t')
              ->where('t.isParametred = 1')
              ->orderBy('t.name', 'ASC');
            },
            'required'=>false,
            'label'=>'Thème Préparametré'
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

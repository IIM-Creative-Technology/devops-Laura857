<?php
namespace App\Form;

use App\Entity\Wishlist;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\Extension\Core\Type\DateType;

class WishlistType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('nom')

        ->add('budget',MoneyType::class,array(
          'currency'=>false,
        ))
        ->add('description')
        ->add('dateexpiration',DateType::class, [
          'placeholder' => [
              'year' => 'Année', 'month' => 'Mois', 'day' => 'Jour',
            ]
          ])
        ->add('destinataire');
    }

    /**
    * Configure les options par default
    *
    * @param OptionResolver $resolver rajoute des options supplémentaires si nécéssaire
    */
    public function configureOptions(OptionsResolver $resolver)
        {
            $resolver->setDefaults([
                'data_class' => Wishlist::class,
            ]);
        }
}
?>

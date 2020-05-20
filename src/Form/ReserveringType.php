<?php

namespace App\Form;

use App\Entity\Reservering;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ReserveringType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('checkinDate')
            ->add('checkoutDate')
            ->add('betaalMethode')
            ->add('kamerId')
            ->add('userId')
            ->add('betaalId')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Reservering::class,
        ]);
    }
}

<?php

namespace App\Form;

use App\Entity\Loads;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class LoadsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('create_date')
            ->add('loading')
            ->add('unloading')
            ->add('capacity')
            ->add('vehicle_type')
            ->add('added_by')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Loads::class,
        ]);
    }
}

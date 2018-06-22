<?php

namespace TEMI\mainBundle\Form\Land;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class InvestissementType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('cfe',ImpotPaysType::class)
            ->add('isInv',ImpotPaysType::class)
            ->add('imf',ImpotPaysType::class)
            ->add('irvm',ImpotPaysType::class)
            ->add('irc',ImpotPaysType::class);
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'TEMI\mainBundle\Entity\Land\Investissement'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'temi_mainbundle_land_investissement';
    }


}

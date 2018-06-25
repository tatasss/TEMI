<?php

namespace TEMI\mainBundle\Form\Land;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
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
            ->add('cfe',CollectionType::class, array(
                'entry_type'=>ImpotPaysType::class
            ))
            ->add('isInv',CollectionType::class, array(
                'entry_type'=>ImpotPaysType::class
            ))
            ->add('imf',CollectionType::class, array(
                'entry_type'=>ImpotPaysType::class
            ))
            ->add('irvm',CollectionType::class, array(
                'entry_type'=>ImpotPaysType::class
            ))
            ->add('irc',CollectionType::class, array(
                'entry_type'=>ImpotPaysType::class
            ));
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'TEMI\mainBundle\Entity\Land\Investissement',
            'compound'=>true
        ));
    }
    public function getParent()
    {
        return EntityType::class;
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'temi_mainbundle_land_investissement';
    }


}

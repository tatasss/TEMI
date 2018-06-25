<?php

namespace TEMI\mainBundle\Form\Land;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ImpotType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('cfe',TextType::class)
            ->add('isImp',TextType::class)
            ->add('imf',TextType::class)
            ->add('irvm',TextType::class)
            ->add('irc',TextType::class)
            ->add('tvaPetrole',TextType::class);
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'TEMI\mainBundle\Entity\Land\Impot',
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
        return 'temi_mainbundle_land_impot';
    }


}

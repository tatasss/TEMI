<?php

namespace TEMI\mainBundle\Form\Land;


use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SourceType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nomCodeInvest',TextType::class)
            ->add('nomRegimeInvest',TextType::class)
            ->add('nomZonneRegime',TextType::class);
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'TEMI\mainBundle\Entity\Land\Source',
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
        return 'temi_mainbundle_land_source';
    }


}

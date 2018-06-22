<?php

namespace TEMI\mainBundle\Form\Land;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class LandType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('code',TextType::class)
            ->add('name',TextType::class)
            ->add('pib',TextType::class)
            ->add('descriptionDerog',TextareaType::class)
            ->add('impot', ImpotType::class)
            ->add('ammort',AmmortissementType::class)
            ->add('invest',InvestissementType::class)
            ->add('source',SourceType::class);
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'TEMI\mainBundle\Entity\Land\Land'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'temi_mainbundle_land_land';
    }


}

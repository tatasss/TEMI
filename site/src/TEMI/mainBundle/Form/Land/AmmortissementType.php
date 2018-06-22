<?php

namespace TEMI\mainBundle\Form\Land;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AmmortissementType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('construction',TextType::class)
            ->add('equipement',TextType::class)
            ->add('coefdegressif',TextType::class)
            ->add('camion',TextType::class)
            ->add('matInformatique',TextType::class)
            ->add('matBureau',TextType::class);
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'TEMI\mainBundle\Entity\Land\Ammortissement'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'temi_mainbundle_land_ammortissement';
    }


}

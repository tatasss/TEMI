<?php

namespace TEMI\mainBundle\Form\Land;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use TEMI\mainBundle\Entity\Land\Investissement;
use TEMI\mainBundle\TEMImainBundle;

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
            ->add(
                $builder->create('impot',ImpotType::class,array(
                'class'=>'TEMImainBundle:Land\Impot',
                    'label' => FALSE
            )))
            ->add('ammort',AmmortissementType::class,array(
                'class'=>'TEMImainBundle:Land\Ammortissement',
                'label' => FALSE
            ))
            ->add('invest',InvestissementType::class,array(
                'class'=>'TEMImainBundle:Land\Investissement',
                'label' => FALSE
            ))
            ->add('source',SourceType::class,array(
                'class'=>'TEMImainBundle:Land\Source',
                'label' => FALSE
            ));
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'TEMI\mainBundle\Entity\Land\Land',

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

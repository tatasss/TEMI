<?php
/**
 * Created by PhpStorm.
 * User: matthias
 * Date: 13/06/2018
 * Time: 10:03
 */
namespace TEMI\mainBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use TEMI\mainBundle\Entity\Land\Ammortissement;
use TEMI\mainBundle\Entity\Land\Impot;
use TEMI\mainBundle\Entity\Land\ImpotPays;
use TEMI\mainBundle\Entity\Land\Land;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use TEMI\mainBundle\Entity\Land\Source;
use TEMI\mainBundle\Form\Land\AmmortissementType;
use TEMI\mainBundle\Form\Land\ImpotType;
use TEMI\mainBundle\Form\Land\InvestissementType;
use TEMI\mainBundle\Form\Land\LandType;
use TEMI\mainBundle\Form\Land\SourceType;


class TemiController extends Controller
{

    public function indexAction(){

        return new Response($this->get('templating')->render('TEMImainBundle:Temi:index.html.twig'));
    }
    public function modeleAction()
    {
        return new Response($this->get('templating')->render('TEMImainBundle:Temi:model.html.twig'));
    }
    private function getFormInv($myBuilder){
        $myBuilder
            ->add('duree',TextType::class)
            ->add('taux',TextType::class);
        return $myBuilder->getform();
    }
    public function ajoutPaysAction(Request $request)
    {
        $land= new Land();
        $formBuilder = $this->get('form.factory')->createBuilder(FormType::class,$land);
        $formBuilder
            ->add('code',TextType::class)
            ->add('name',TextType::class)
            ->add('descriptionDerog',TextareaType::class)
            ->add('impot', ImpotType::class, array(
                'class'=>'TEMImainBundle:Land\Impot'
            ))
            ->add('ammort',AmmortissementType::class)
            ->add('invest',InvestissementType::class)
            ->add('source',SourceType::class)
            ->add('ajouterLePays',SubmitType::class);


        $form = $formBuilder->getForm();
        if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {

            $em = $this->getDoctrine()->getManager();
            $em->persist($land);
            $em->flush();

            $request->getSession()->getFlashBag()->add('notice', 'Pays bien enregistrée');

            return $this->redirectToRoute('temi_platform_home');
        }

        return $this->render('TEMImainBundle:Temi:addLand.html.twig',
            array(
                'form'=>$form->createView(),
            ));
    }
    public function graphAction()
    {
        return new Response($this->get('templating')->render('TEMImainBundle:Temi:graphForm.html.twig'));
    }



}
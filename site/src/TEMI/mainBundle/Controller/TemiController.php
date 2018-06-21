<?php
/**
 * Created by PhpStorm.
 * User: matthias
 * Date: 13/06/2018
 * Time: 10:03
 */
namespace TEMI\mainBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\BrowserKit\Request;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Response;
use TEMI\mainBundle\Entity\Land\Ammortissement;
use TEMI\mainBundle\Entity\Land\Impot;
use TEMI\mainBundle\Entity\Land\Land;
use Symfony\Component\Form\Extension\Core\Type\TextType;


class TemiController extends Controller
{

    public function indexAction(){

        return new Response($this->get('templating')->render('TEMImainBundle:Temi:index.html.twig'));
    }
    public function modeleAction()
    {
        return new Response($this->get('templating')->render('TEMImainBundle:Temi:model.html.twig'));
    }
    public function ajoutPaysAction()
    {

        $impot=new Impot();
        $buildImpot =$this->get('form.factory')->createBuilder(FormType::class,$impot);
        $buildImpot
            ->add('cfe',TextType::class)
            ->add('isImp',TextType::class)
            ->add('imf',TextType::class)
            ->add('irvm',TextType::class)
            ->add('irc',TextType::class)
            ->add('tva_petrole',TextType::class);
        $ammort=new Ammortissement();
        $buildAmm =$this->get('form.factory')->createBuilder(FormType::class,$ammort);
        $buildAmm
            ->add('construction',TextType::class)
            ->add('equipement',TextType::class)
            ->add('coefDegressif',TextType::class)
            ->add('matInformatique',TextType::class)
            ->add('matBureau',TextType::class)
            ->add('camion',TextType::class);
        $land= new Land();
        $formBuilder = $this->get('form.factory')->createBuilder(FormType::class,$land);
        $formBuilder->add('code',TextType::class)
                    ->add('Name', TextType::class)
                    ->add('save',      SubmitType::class);
        $form = $formBuilder->getForm();
        $formImp =$buildImpot->getForm();
        $formAmm=$buildAmm->getForm();

        return $this->render('TEMImainBundle:Temi:addLand.html.twig',
            array(
                'form'=>$form->createView(),
                'formImp'=>$formImp->createView(),
                'formAmm'=>$formAmm->createView()
            ));
    }
    public function graphAction()
    {
        return new Response($this->get('templating')->render('TEMImainBundle:Temi:graphForm.html.twig'));
    }



}
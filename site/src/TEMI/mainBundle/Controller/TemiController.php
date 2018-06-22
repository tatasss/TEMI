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
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\HttpFoundation\Response;
use TEMI\mainBundle\Entity\Land\Ammortissement;
use TEMI\mainBundle\Entity\Land\Impot;
use TEMI\mainBundle\Entity\Land\ImpotPays;
use TEMI\mainBundle\Entity\Land\Land;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use TEMI\mainBundle\Entity\Land\Source;


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
    public function ajoutPaysAction()
    {
        $cfeInv=new ImpotPays();
        $isInv =new ImpotPays();
        $imfInv=new ImpotPays();
        $irvmInv =new ImpotPays();
        $ircInv=new ImpotPays();
        $tva_petroleInv=new ImpotPays();

        $buildCfe= $this->get('form.factory')->createBuilder(FormType::class,$cfeInv);
        $buildIs= $this->get('form.factory')->createBuilder(FormType::class,$isInv);
        $buildImf= $this->get('form.factory')->createBuilder(FormType::class,$imfInv);
        $buildIrvm= $this->get('form.factory')->createBuilder(FormType::class,$irvmInv);
        $buildIrc= $this->get('form.factory')->createBuilder(FormType::class,$ircInv);
        $source = new Source();
        $buildSource=$this->get('form.factory')->createBuilder(FormType::class,$source);
        $buildSource
            ->add('nomCodeInvest',TextType::class)
            ->add('nomRegimeInvest',TextType::class)
            ->add('nomZonneRegime',TextType::class);
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
                    ->add('descriptionDerog',TextareaType::class)
                    ->add('ajouterLePays', SubmitType::class);
        $form = $formBuilder->getForm();
        $formSource = $buildSource->getForm();
        $formImp =$buildImpot->getForm();
        $formAmm=$buildAmm->getForm();
        $formCfe=$this->getFormInv($buildCfe);
        $formIs=$this->getFormInv($buildIs);
        $formImf=$this->getFormInv($buildImf);
        $formIrvm=$this->getFormInv($buildIrvm);
        $formIrc=$this->getFormInv($buildIrc);

        return $this->render('TEMImainBundle:Temi:addLand.html.twig',
            array(
                'form'=>$form->createView(),
                'formImp'=>$formImp->createView(),
                'formAmm'=>$formAmm->createView(),
                'formCfe'=>$formCfe->createView(),
                'formIs'=>$formIs->createView(),
                'formImf'=>$formImf->createView(),
                'formIrvm'=>$formIrvm->createView(),
                'formIrc'=>$formIrc->createView(),
                'formSource'=>$formSource->createView()
            ));
    }
    public function graphAction()
    {
        return new Response($this->get('templating')->render('TEMImainBundle:Temi:graphForm.html.twig'));
    }



}
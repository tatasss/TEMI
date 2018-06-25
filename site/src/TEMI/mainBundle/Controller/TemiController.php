<?php
/**
 * Created by PhpStorm.
 * User: matthias
 * Date: 13/06/2018
 * Time: 10:03
 */

namespace TEMI\mainBundle\Controller;



use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Symfony\Component\Config\Definition\Exception\Exception;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Form;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Ldap\Adapter\ExtLdap\Collection;
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

    public function indexAction()
    {

        return new Response($this->get('templating')->render('TEMImainBundle:Temi:index.html.twig'));
    }

    public function modeleAction()
    {
        return new Response($this->get('templating')->render('TEMImainBundle:Temi:model.html.twig'));
    }

    public function ajoutPaysAction(Request $request)
    {
        $land = new Land();
        $formBuilder = $this->get('form.factory')->createBuilder(FormType::class, $land);
        $formBuilder
            ->add('code', TextType::class)
            ->add('name', TextType::class)
            ->add('descriptionDerog', TextareaType::class)
            ->add(
                $formBuilder->create(
                    'impot',
                    FormType::class, array(
                    'data_class' => 'TEMI\mainBundle\Entity\Land\Impot'
                ))
                    ->add('cfe', TextType::class)
                    ->add('isImp', TextType::class)
                    ->add('imf', TextType::class)
                    ->add('irvm', TextType::class)
                    ->add('irc', TextType::class)
                    ->add('tvaPetrole', TextType::class)
            )
            ->add(
                $formBuilder->create(
                    'ammort',
                    FormType::class,
                    array(
                        'data_class' => 'TEMI\mainBundle\Entity\Land\Ammortissement'
                    ))
                    ->add('construction', TextType::class)
                    ->add('equipement', TextType::class)
                    ->add('coefdegressif', TextType::class)
                    ->add('camion', TextType::class)
                    ->add('matInformatique', TextType::class)
                    ->add('matBureau', TextType::class))
            ->add(
                $formBuilder->create('invest',
                    FormType::class, array(
                        'data_class' => 'TEMI\mainBundle\Entity\Land\Investissement'
                    ))
                    ->add($formBuilder->create('cfe',
                        FormType::class,
                        array(
                            'data_class' => 'TEMI\mainBundle\Entity\Land\ImpotPays'
                        ))
                        ->add('duree', TextType::class)
                        ->add('taux', TextType::class)
                    )
                    ->add($formBuilder->create('isInv',
                        FormType::class,
                        array(
                            'data_class' => 'TEMI\mainBundle\Entity\Land\ImpotPays'
                        ))
                        ->add('duree', TextType::class)
                        ->add('taux', TextType::class)
                    )
                    ->add($formBuilder->create('imf',
                        FormType::class,
                        array(
                            'data_class' => 'TEMI\mainBundle\Entity\Land\ImpotPays'
                        ))
                        ->add('duree', TextType::class)
                        ->add('taux', TextType::class)
                    )
                    ->add($formBuilder->create('irvm',
                        FormType::class,
                        array(
                            'data_class' => 'TEMI\mainBundle\Entity\Land\ImpotPays'
                        ))
                        ->add('duree', TextType::class)
                        ->add('taux', TextType::class)
                    )
                    ->add($formBuilder->create('irc',
                        FormType::class,
                        array(
                            'data_class' => 'TEMI\mainBundle\Entity\Land\ImpotPays'
                        ))
                        ->add('duree', TextType::class)
                        ->add('taux', TextType::class)
                    ))
            ->add($formBuilder->create('source', FormType::class, array(
                'data_class' => 'TEMI\mainBundle\Entity\Land\Source'
            ))
                ->add('nomCodeInvest', TextType::class)
                ->add('nomRegimeInvest', TextType::class)
                ->add('nomZonneRegime', TextType::class)
            )
            ->add('ajouterLePays', SubmitType::class);


        $form = $formBuilder->getForm();
        if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {

            $land->setPib($this->findPib($land));

                $land->setUser($this->getUser());

            $em = $this->getDoctrine()->getManager();
            $em->persist($land);
            $em->flush();

            $request->getSession()->getFlashBag()->add('notice', 'Pays bien enregistrée');

            return $this->redirectToRoute('temi_platform_home');
        }

        return $this->render('TEMImainBundle:Temi:addLand.html.twig',
            array(
                'form' => $form->createView(),
            ));
    }

    public function graphAction()
    {
        return new Response($this->get('templating')->render('TEMImainBundle:Temi:graphForm.html.twig'));
    }
    private  function findPib($land){
        $json = file_get_contents("https://api.worldbank.org/v2/countries/" .$land->getCode(). "/indicators/NY.GDP.PCAP.CD?format=json");
        $obj = json_decode($json,true);
        foreach ($obj as $myObj){
            foreach ($myObj as $item){
                if(is_array($item)){
                    if( array_key_exists ('value',$item)){
                        if( $item['value']!=null)
                            return floatval($item['value'])* 582.79;
                    }
                }


            }
        }

        throw new Exception("code non trouvé");
    }



}
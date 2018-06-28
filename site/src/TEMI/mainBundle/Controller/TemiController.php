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
    private function nombreVisit($request){
        $hits=0;
        if(empty($hits)){
            $fp=fopen("compteur.txt","a+"); //OUVRE LE FICHIER compteur.txt
            $num=fgets($fp,4096); // RECUPERE LE CONTENUE DU COMPTEUR
            fclose($fp); // FERME LE FICHIER
            if($request->attributes->get('_route')=='temi_platform_home'){
                $hits=$num +1;
            }
            else{
                $hits=$num;
            }
             // TRAITEMENT
            $fp=fopen("compteur.txt","w"); // OUVRE DE NOUVEAU LE FICHIER
            fputs($fp,$hits); // MET LA NOUVELLE VALEUR
            fclose($fp); // FERME LE FICHIER
        }
        return $hits;
    }
    public function indexAction(Request $request)
    {


        $repository = $this
            ->getDoctrine()
            ->getManager()
            ->getRepository('TEMImainBundle:Land\Land');
        $listAdverts=array();
        if($this->getUser()!=null){
            $listAdverts = $repository->selectedLandUser($this->getUser()->getId());
        }


       /* foreach ($listAdverts as $advert)
        $listeImpot=$this->getDoctrine()->getManager()->find($advert->)*/
        return new Response($this->get('templating')->render('TEMImainBundle:Temi:index.html.twig',array('tabLand'=>$listAdverts, 'numVisit'=>$this->nombreVisit($request))));
    }

    public function modeleAction(Request $request)
    {
        return new Response($this->get('templating')->render('TEMImainBundle:Temi:model.html.twig',array('numVisit'=>$this->nombreVisit($request))));
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
                'numVisit'=>$this->nombreVisit($request)
            ));
    }

    public function graphAction(Request $request)
    {
        return new Response($this->get('templating')->render('TEMImainBundle:Temi:graphForm.html.twig',array('numVisit'=>$this->nombreVisit($request))));
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
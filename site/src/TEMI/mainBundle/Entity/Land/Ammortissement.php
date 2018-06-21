<?php
/**
 * Created by PhpStorm.
 * User: matthias
 * Date: 21/06/2018
 * Time: 11:43
 */

use Doctrine\ORM\Mapping as ORM;
class Ammortissement{
    /**
     * @ORM\column(name="id",type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    /**
     * @var int
     *
     * @ORM\Column(name="construction", type="integer")
     */
    protected $construction;
    /**
     * @var int
     *
     * @ORM\Column(name="equipement", type="integer")
     */
    protected $equipement;

    /**
     * @var int
     *
     * @ORM\Column(name="coefdegressif", type="integer")
     */
    protected $coefdegressif;

    /**
     * @var int
     *
     * @ORM\Column(name="camion", type="integer")
     */
    protected $camion;

    /**
     * @var int
     *
     * @ORM\Column(name="matInformatique", type="integer")
     */
    protected $matInformatique;

    /**
     * @var int
     *
     * @ORM\Column(name="matBureau", type="integer")
     */
    protected $matBureau;

}
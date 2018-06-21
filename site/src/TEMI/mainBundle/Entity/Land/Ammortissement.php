<?php

namespace TEMI\mainBundle\Entity\Land;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ammortissement
 *
 * @ORM\Table(name="ammortissement")
 * @ORM\Entity(repositoryClass="TEMI\mainBundle\Repository\AmmortissementRepository")
 */
class Ammortissement
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="construction", type="integer")
     */
    private $construction;

    /**
     * @var int
     *
     * @ORM\Column(name="equipement", type="integer")
     */
    private $equipement;

    /**
     * @var string
     *
     * @ORM\Column(name="coefdegressif", type="decimal", precision=10, scale=1)
     */
    private $coefdegressif;

    /**
     * @var int
     *
     * @ORM\Column(name="camion", type="integer")
     */
    private $camion;

    /**
     * @var int
     *
     * @ORM\Column(name="matInforrmatique", type="integer")
     */
    private $matInformatique;

    /**
     * @var int
     *
     * @ORM\Column(name="matBureau", type="integer")
     */
    private $matBureau;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set construction
     *
     * @param integer $construction
     *
     * @return Ammortissement
     */
    public function setConstruction($construction)
    {
        $this->construction = $construction;

        return $this;
    }

    /**
     * Get construction
     *
     * @return int
     */
    public function getConstruction()
    {
        return $this->construction;
    }

    /**
     * Set equipement
     *
     * @param integer $equipement
     *
     * @return Ammortissement
     */
    public function setEquipement($equipement)
    {
        $this->equipement = $equipement;

        return $this;
    }

    /**
     * Get equipement
     *
     * @return int
     */
    public function getEquipement()
    {
        return $this->equipement;
    }

    /**
     * Set coefdegressif
     *
     * @param string $coefdegressif
     *
     * @return Ammortissement
     */
    public function setCoefdegressif($coefdegressif)
    {
        $this->coefdegressif = $coefdegressif;

        return $this;
    }

    /**
     * Get coefdegressif
     *
     * @return string
     */
    public function getCoefdegressif()
    {
        return $this->coefdegressif;
    }

    /**
     * Set camion
     *
     * @param integer $camion
     *
     * @return Ammortissement
     */
    public function setCamion($camion)
    {
        $this->camion = $camion;

        return $this;
    }

    /**
     * Get camion
     *
     * @return int
     */
    public function getCamion()
    {
        return $this->camion;
    }

    /**
     * Set matInforrmatique
     *
     * @param integer $matInforrmatique
     *
     * @return Ammortissement
     */
    public function setMatInformatique($matInforrmatique)
    {
        $this->matInformatique = $matInforrmatique;

        return $this;
    }

    /**
     * Get matInforrmatique
     *
     * @return int
     */
    public function getMatInformatique()
    {
        return $this->matInformatique;
    }

    /**
     * Set matBureau
     *
     * @param integer $matBureau
     *
     * @return Ammortissement
     */
    public function setMatBureau($matBureau)
    {
        $this->matBureau = $matBureau;

        return $this;
    }

    /**
     * Get matBureau
     *
     * @return int
     */
    public function getMatBureau()
    {
        return $this->matBureau;
    }
}


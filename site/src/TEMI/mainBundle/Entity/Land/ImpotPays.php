<?php

namespace TEMI\mainBundle\Entity\Land;

use Doctrine\ORM\Mapping as ORM;

/**
 * impotPays
 *
 * @ORM\Table(name="impot_pays")
 * @ORM\Entity(repositoryClass="TEMI\mainBundle\Repository\ImpotPaysRepository")
 */
class ImpotPays
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
     * @ORM\Column(name="duree", type="integer", nullable=true)
     */
    private $duree;

    /**
     * @var string
     *
     * @ORM\Column(name="taux", type="decimal", precision=10, scale=1, nullable=true)
     */
    private $taux;

    /**
     * @var string
     *
     * @ORM\Column(name="reducexo", type="decimal", precision=10, scale=1, nullable=true)
     */
    private $reducexo;

    /**
     * @var string
     *
     * @ORM\Column(name="ammortTauxEx", type="decimal", precision=10, scale=1, nullable=true)
     */
    private $ammortTauxEx;

    /**
     * @var int
     *
     * @ORM\Column(name="ammortLimit", type="integer", nullable=true)
     */
    private $ammortLimit;


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
     * Set duree
     *
     * @param integer $duree
     *
     * @return impotPays
     */
    public function setDuree($duree)
    {
        $this->duree = $duree;

        return $this;
    }

    /**
     * Get duree
     *
     * @return int
     */
    public function getDuree()
    {
        return $this->duree;
    }

    /**
     * Set taux
     *
     * @param string $taux
     *
     * @return impotPays
     */
    public function setTaux($taux)
    {
        $this->taux = $taux;

        return $this;
    }

    /**
     * Get taux
     *
     * @return string
     */
    public function getTaux()
    {
        return $this->taux;
    }

    /**
     * Set reducexo
     *
     * @param string $reducexo
     *
     * @return impotPays
     */
    public function setReducexo($reducexo)
    {
        $this->reducexo = $reducexo;

        return $this;
    }

    /**
     * Get reducexo
     *
     * @return string
     */
    public function getReducexo()
    {
        return $this->reducexo;
    }

    /**
     * Set ammortTauxEx
     *
     * @param string $ammortTauxEx
     *
     * @return impotPays
     */
    public function setAmmortTauxEx($ammortTauxEx)
    {
        $this->ammortTauxEx = $ammortTauxEx;

        return $this;
    }

    /**
     * Get ammortTauxEx
     *
     * @return string
     */
    public function getAmmortTauxEx()
    {
        return $this->ammortTauxEx;
    }

    /**
     * Set ammortLimit
     *
     * @param integer $ammortLimit
     *
     * @return impotPays
     */
    public function setAmmortLimit($ammortLimit)
    {
        $this->ammortLimit = $ammortLimit;

        return $this;
    }

    /**
     * Get ammortLimit
     *
     * @return int
     */
    public function getAmmortLimit()
    {
        return $this->ammortLimit;
    }
}


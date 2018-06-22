<?php

namespace TEMI\mainBundle\Entity\Land;

use Doctrine\ORM\Mapping as ORM;

/**
 * Source
 *
 * @ORM\Table(name="source")
 * @ORM\Entity(repositoryClass="TEMI\mainBundle\Repository\SourceRepository")
 */
class Source
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
     * @var string
     *
     * @ORM\Column(name="nomCodeInvest", type="string", length=255, nullable=true)
     */
    private $nomCodeInvest;

    /**
     * @var string
     *
     * @ORM\Column(name="nomRegimeInvest", type="string", length=255, nullable=true)
     */
    private $nomRegimeInvest;

    /**
     * @var string
     *
     * @ORM\Column(name="nomZonneRegime", type="string", length=255, nullable=true)
     */
    private $nomZonneRegime;


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
     * Set nomCodeInvest
     *
     * @param string $nomCodeInvest
     *
     * @return Source
     */
    public function setNomCodeInvest($nomCodeInvest)
    {
        $this->nomCodeInvest = $nomCodeInvest;

        return $this;
    }

    /**
     * Get nomCodeInvest
     *
     * @return string
     */
    public function getNomCodeInvest()
    {
        return $this->nomCodeInvest;
    }

    /**
     * Set nomRegimeInvest
     *
     * @param string $nomRegimeInvest
     *
     * @return Source
     */
    public function setNomRegimeInvest($nomRegimeInvest)
    {
        $this->nomRegimeInvest = $nomRegimeInvest;

        return $this;
    }

    /**
     * Get nomRegimeInvest
     *
     * @return string
     */
    public function getNomRegimeInvest()
    {
        return $this->nomRegimeInvest;
    }

    /**
     * Set nomZonneRegime
     *
     * @param string $nomZonneRegime
     *
     * @return Source
     */
    public function setNomZonneRegime($nomZonneRegime)
    {
        $this->nomZonneRegime = $nomZonneRegime;

        return $this;
    }

    /**
     * Get nomZonneRegime
     *
     * @return string
     */
    public function getNomZonneRegime()
    {
        return $this->nomZonneRegime;
    }
}


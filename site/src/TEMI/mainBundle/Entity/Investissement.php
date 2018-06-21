<?php

namespace TEMI\mainBundle\Entity;
use TEMI\mainBundle\Entity\ImpotPays;
use Doctrine\ORM\Mapping as ORM;

/**
 * Investissement
 *
 * @ORM\Table(name="investissement")
 * @ORM\Entity(repositoryClass="TEMI\mainBundle\Repository\InvestissementRepository")
 */
class Investissement
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
     * @ORM\ManyToOne(targetEntity="TEMI\mainBundle\Entity\ImpotPays")
     *@ORM\JoinColumn(name="cfe_id", referencedColumnName="id")
     */
    private $cfe;
    /**
     * @ORM\ManyToOne(targetEntity="TEMI\mainBundle\Entity\ImpotPays")
     *@ORM\JoinColumn(name="is_id", referencedColumnName="id")
     */
    private $isInv;
    /**
     * @ORM\ManyToOne(targetEntity="TEMI\mainBundle\Entity\ImpotPays")
     *@ORM\JoinColumn(name="imf_id", referencedColumnName="id")
     */
    private $imf;
    /**
     * @ORM\ManyToOne(targetEntity="TEMI\mainBundle\Entity\ImpotPays")
     *@ORM\JoinColumn(name="irvm_id", referencedColumnName="id")
     */
    private $irvm;
    /**
     * @ORM\ManyToOne(targetEntity="TEMI\mainBundle\Entity\ImpotPays")
     *@ORM\JoinColumn(name="irc_id", referencedColumnName="id")
     */
    private $irc;
    /**
     * @ORM\ManyToOne(targetEntity="TEMI\mainBundle\Entity\ImpotPays")
     *@ORM\JoinColumn(name="tva_petrole_id", referencedColumnName="id")
     */
    private $tva_petrole;

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
     * Set cfe
     *
     * @param \TEMI\mainBundle\Entity\impotPays $cfe
     *
     * @return Investissement
     */
    public function setCfe(\TEMI\mainBundle\Entity\impotPays $cfe = null)
    {
        $this->cfe = $cfe;

        return $this;
    }

    /**
     * Get cfe
     *
     * @return \TEMI\mainBundle\Entity\impotPays
     */
    public function getCfe()
    {
        return $this->cfe;
    }

    /**
     * Set isInv
     *
     * @param \TEMI\mainBundle\Entity\impotPays $isInv
     *
     * @return Investissement
     */
    public function setIsInv(\TEMI\mainBundle\Entity\impotPays $isInv = null)
    {
        $this->isInv = $isInv;

        return $this;
    }

    /**
     * Get isInv
     *
     * @return \TEMI\mainBundle\Entity\impotPays
     */
    public function getIsInv()
    {
        return $this->isInv;
    }

    /**
     * Set imf
     *
     * @param \TEMI\mainBundle\Entity\impotPays $imf
     *
     * @return Investissement
     */
    public function setImf(\TEMI\mainBundle\Entity\impotPays $imf = null)
    {
        $this->imf = $imf;

        return $this;
    }

    /**
     * Get imf
     *
     * @return \TEMI\mainBundle\Entity\impotPays
     */
    public function getImf()
    {
        return $this->imf;
    }

    /**
     * Set irvm
     *
     * @param \TEMI\mainBundle\Entity\impotPays $irvm
     *
     * @return Investissement
     */
    public function setIrvm(\TEMI\mainBundle\Entity\impotPays $irvm = null)
    {
        $this->irvm = $irvm;

        return $this;
    }

    /**
     * Get irvm
     *
     * @return \TEMI\mainBundle\Entity\impotPays
     */
    public function getIrvm()
    {
        return $this->irvm;
    }

    /**
     * Set irc
     *
     * @param \TEMI\mainBundle\Entity\impotPays $irc
     *
     * @return Investissement
     */
    public function setIrc(\TEMI\mainBundle\Entity\impotPays $irc = null)
    {
        $this->irc = $irc;

        return $this;
    }

    /**
     * Get irc
     *
     * @return \TEMI\mainBundle\Entity\impotPays
     */
    public function getIrc()
    {
        return $this->irc;
    }

    /**
     * Set tvaPetrole
     *
     * @param \TEMI\mainBundle\Entity\impotPays $tvaPetrole
     *
     * @return Investissement
     */
    public function setTvaPetrole(\TEMI\mainBundle\Entity\impotPays $tvaPetrole = null)
    {
        $this->tva_petrole = $tvaPetrole;

        return $this;
    }

    /**
     * Get tvaPetrole
     *
     * @return \TEMI\mainBundle\Entity\impotPays
     */
    public function getTvaPetrole()
    {
        return $this->tva_petrole;
    }
}

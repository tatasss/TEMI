<?php

namespace TEMI\mainBundle\Entity\Land;
use TEMI\mainBundle\Entity\Land\ImpotPays;
use Doctrine\ORM\Mapping as ORM;
use TEMI\mainBundle\Entity\Land\impotPays as impotName;

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
     * @ORM\ManyToOne(targetEntity="TEMI\mainBundle\Entity\Land\ImpotPays")
     *@ORM\JoinColumn(name="cfe_id", referencedColumnName="id")
     */
    private $cfe;
    /**
     * @ORM\ManyToOne(targetEntity="TEMI\mainBundle\Entity\Land\ImpotPays")
     *@ORM\JoinColumn(name="is_id", referencedColumnName="id")
     */
    private $isInv;
    /**
     * @ORM\ManyToOne(targetEntity="TEMI\mainBundle\Entity\Land\ImpotPays")
     *@ORM\JoinColumn(name="imf_id", referencedColumnName="id")
     */
    private $imf;
    /**
     * @ORM\ManyToOne(targetEntity="TEMI\mainBundle\Entity\Land\ImpotPays")
     *@ORM\JoinColumn(name="irvm_id", referencedColumnName="id")
     */
    private $irvm;
    /**
     * @ORM\ManyToOne(targetEntity="TEMI\mainBundle\Entity\Land\ImpotPays")
     *@ORM\JoinColumn(name="irc_id", referencedColumnName="id")
     */
    private $irc;
    /**
     * @ORM\ManyToOne(targetEntity="TEMI\mainBundle\Entity\Land\ImpotPays")
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
     * @param impotName $cfe
     *
     * @return Investissement
     */
    public function setCfe(ImpotName $cfe = null)
    {
        $this->cfe = $cfe;

        return $this;
    }

    /**
     * Get cfe
     *
     * @return ImpotName
     */
    public function getCfe()
    {
        return $this->cfe;
    }

    /**
     * Set isInv
     *
     * @param ImpotName $isInv
     *
     * @return Investissement
     */
    public function setIsInv(ImpotName $isInv = null)
    {
        $this->isInv = $isInv;

        return $this;
    }

    /**
     * Get isInv
     *
     * @return ImpotName
     */
    public function getIsInv()
    {
        return $this->isInv;
    }

    /**
     * Set imf
     *
     * @param ImpotName $imf
     *
     * @return Investissement
     */
    public function setImf(ImpotName $imf = null)
    {
        $this->imf = $imf;

        return $this;
    }

    /**
     * Get imf
     *
     * @return ImpotName
     */
    public function getImf()
    {
        return $this->imf;
    }

    /**
     * Set irvm
     *
     * @param ImpotName $irvm
     *
     * @return Investissement
     */
    public function setIrvm(ImpotName $irvm = null)
    {
        $this->irvm = $irvm;

        return $this;
    }

    /**
     * Get irvm
     *
     * @return ImpotName
     */
    public function getIrvm()
    {
        return $this->irvm;
    }

    /**
     * Set irc
     *
     * @param ImpotName $irc
     *
     * @return Investissement
     */
    public function setIrc(ImpotName $irc = null)
    {
        $this->irc = $irc;

        return $this;
    }

    /**
     * Get irc
     *
     * @return ImpotName
     */
    public function getIrc()
    {
        return $this->irc;
    }

    /**
     * Set tvaPetrole
     *
     * @param ImpotName $tvaPetrole
     *
     * @return Investissement
     */
    public function setTvaPetrole(ImpotName $tvaPetrole = null)
    {
        $this->tva_petrole = $tvaPetrole;

        return $this;
    }

    /**
     * Get tvaPetrole
     *
     * @return ImpotName
     */
    public function getTvaPetrole()
    {
        return $this->tva_petrole;
    }
}

<?php

namespace TEMI\mainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use TEMI\mainBundle\Entity\Ammortissement;
use TEMI\mainBundle\Entity\Impot;
use TEMI\mainBundle\Entity\Investissement;

/**
 * Land
 *
 * @ORM\Table(name="land")
 * @ORM\Entity(repositoryClass="TEMI\mainBundle\Repository\LandRepository")
 */
class Land
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
     * @ORM\Column(name="code", type="string", length=255)
     */
    private $code;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="pib", type="decimal", precision=10, scale=1)
     */
    private $pib;

    /**
     * @ORM\ManyToOne(targetEntity="TEMI\mainBundle\Entity\Impot")
     *@ORM\JoinColumn(name="impot_id", referencedColumnName="id")
     */
    private $impot;
    /**
     * @ORM\ManyToOne(targetEntity="TEMI\mainBundle\Entity\Ammortissement")
     *@ORM\JoinColumn(name="ammort_id", referencedColumnName="id")
     */
    private $ammort;
    /**
     * @ORM\ManyToOne(targetEntity="TEMI\mainBundle\Entity\Investissement")
     *@ORM\JoinColumn(name="invest_id", referencedColumnName="id")
     */
    private $invest;
    /**
     * @var string
     *
     * @ORM\Column(name="descriptionDerog", type="text")
     */
    private $descriptionDerog;

    /**
     * @var string
     *
     * @ORM\Column(name="source", type="string", length=255)
     */
    private $source;

    /**
     * @ORM\ManyToOne(targetEntity="TEMI\mainBundle\Entity\User\User")
     *@ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
    private $user;
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
     * Set code
     *
     * @param string $code
     *
     * @return Land
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Get code
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Land
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set pib
     *
     * @param string $pib
     *
     * @return Land
     */
    public function setPib($pib)
    {
        $this->pib = $pib;

        return $this;
    }

    /**
     * Get pib
     *
     * @return string
     */
    public function getPib()
    {
        return $this->pib;
    }

    /**
     * Set descriptionDerog
     *
     * @param string $descriptionDerog
     *
     * @return Land
     */
    public function setDescriptionDerog($descriptionDerog)
    {
        $this->descriptionDerog = $descriptionDerog;

        return $this;
    }

    /**
     * Get descriptionDerog
     *
     * @return string
     */
    public function getDescriptionDerog()
    {
        return $this->descriptionDerog;
    }

    /**
     * Set source
     *
     * @param string $source
     *
     * @return Land
     */
    public function setSource($source)
    {
        $this->source = $source;

        return $this;
    }

    /**
     * Get source
     *
     * @return string
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * Set impot
     *
     * @param Impot $impot
     *
     * @return Land
     */
    public function setImpot(Impot $impot = null)
    {
        $this->impot = $impot;

        return $this;
    }

    /**
     * Get impot
     *
     * @return Impot
     */
    public function getImpot()
    {
        return $this->impot;
    }

    /**
     * Set ammort
     *
     * @param Ammortissement $ammort
     *
     * @return Land
     */
    public function setAmmort(Ammortissement $ammort = null)
    {
        $this->ammort = $ammort;

        return $this;
    }

    /**
     * Get ammort
     *
     * @return Ammortissement
     */
    public function getAmmort()
    {
        return $this->ammort;
    }

    /**
     * Set invest
     *
     * @param Investissement $invest
     *
     * @return Land
     */
    public function setInvest(Investissement $invest = null)
    {
        $this->invest = $invest;

        return $this;
    }

    /**
     * Get invest
     *
     * @return Investissement
     */
    public function getInvest()
    {
        return $this->invest;
    }

    /**
     * Set user
     *
     * @param \FOS\UserBundle\model\User $user
     *
     * @return Land
     */
    public function setUser(\FOS\UserBundle\model\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \FOS\UserBundle\model\User
     */
    public function getUser()
    {
        return $this->user;
    }
}

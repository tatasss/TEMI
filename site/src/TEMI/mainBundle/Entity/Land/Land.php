<?php

namespace TEMI\mainBundle\Entity\Land;

use Doctrine\ORM\Mapping as ORM;
use TEMI\mainBundle\Entity\Land\Ammortissement;
use TEMI\mainBundle\Entity\Land\Impot;
use TEMI\mainBundle\Entity\Land\Investissement;

/**
 * Land
 *
 * @ORM\Table(name="Land")
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
     * @ORM\ManyToOne(targetEntity="TEMI\mainBundle\Entity\Land\Impot", cascade={"persist"})
     *@ORM\JoinColumn(name="impot_id", referencedColumnName="id")
     */
    private $impot;
    /**
     * @ORM\ManyToOne(targetEntity="TEMI\mainBundle\Entity\Land\Ammortissement", cascade={"persist"})
     *@ORM\JoinColumn(name="ammort_id", referencedColumnName="id")
     */
    private $ammort;
    /**
     * @ORM\ManyToOne(targetEntity="TEMI\mainBundle\Entity\Land\Investissement", cascade={"persist"})
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
     * @ORM\ManyToOne(targetEntity="TEMI\mainBundle\Entity\Land\Source",cascade={"persist"})
     *@ORM\JoinColumn(name="source_id", referencedColumnName="id")
     */
    private $source;

    /**
     * @ORM\ManyToOne(targetEntity="TEMI\mainBundle\Entity\User\User",cascade={"persist"})
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
     * @param Source $source
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
     * @return Source
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
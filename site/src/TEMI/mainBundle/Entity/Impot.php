<?php

namespace TEMI\mainBundle\Entity;

/**
 * Impot
 */
class Impot
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $cfe;

    /**
     * @var string
     */
    private $isImp;

    /**
     * @var string
     */
    private $imf;

    /**
     * @var string
     */
    private $irvm;

    /**
     * @var string
     */
    private $irc;

    /**
     * @var string
     */
    private $tvaPetrole;


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
     * @param string $cfe
     *
     * @return Impot
     */
    public function setCfe($cfe)
    {
        $this->cfe = $cfe;

        return $this;
    }

    /**
     * Get cfe
     *
     * @return string
     */
    public function getCfe()
    {
        return $this->cfe;
    }

    /**
     * Set isImp
     *
     * @param string $isImp
     *
     * @return Impot
     */
    public function setIsImp($isImp)
    {
        $this->isImp = $isImp;

        return $this;
    }

    /**
     * Get isImp
     *
     * @return string
     */
    public function getIsImp()
    {
        return $this->isImp;
    }

    /**
     * Set imf
     *
     * @param string $imf
     *
     * @return Impot
     */
    public function setImf($imf)
    {
        $this->imf = $imf;

        return $this;
    }

    /**
     * Get imf
     *
     * @return string
     */
    public function getImf()
    {
        return $this->imf;
    }

    /**
     * Set irvm
     *
     * @param string $irvm
     *
     * @return Impot
     */
    public function setIrvm($irvm)
    {
        $this->irvm = $irvm;

        return $this;
    }

    /**
     * Get irvm
     *
     * @return string
     */
    public function getIrvm()
    {
        return $this->irvm;
    }

    /**
     * Set irc
     *
     * @param string $irc
     *
     * @return Impot
     */
    public function setIrc($irc)
    {
        $this->irc = $irc;

        return $this;
    }

    /**
     * Get irc
     *
     * @return string
     */
    public function getIrc()
    {
        return $this->irc;
    }

    /**
     * Set tvaPetrole
     *
     * @param string $tvaPetrole
     *
     * @return Impot
     */
    public function setTvaPetrole($tvaPetrole)
    {
        $this->tvaPetrole = $tvaPetrole;

        return $this;
    }

    /**
     * Get tvaPetrole
     *
     * @return string
     */
    public function getTvaPetrole()
    {
        return $this->tvaPetrole;
    }
}


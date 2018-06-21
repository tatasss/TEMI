<?php
/**
 * Created by PhpStorm.
 * User: matthias
 * Date: 21/06/2018
 * Time: 11:12
 */

namespace TEMI\mainBundle\Entity\Land;

use Doctrine\ORM\Mapping as ORM;
class Impot
{
    /**
     * @ORM\column(name="id",type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strateg="AUTO")
     */
    protected $id;
     /**
      * @ORM\column(name="cfe",type="decimal")
      */
     protected $cfe;
    /**
     * @ORM\column(name="isImp",type="decimal")
     */
    protected $isImp;
    /**
     * @ORM\column(name="imf",type="decimal")
     */
    protected $imf;
    /**
     * @ORM\column(name="irvm",type="decimal")
     */
    protected $irvm;
    /**
     * @ORM\column(name="irc",type="decimal")
     */
    protected $irc;
    /**
     * @ORM\column(name="tva_petrole",type="decimal")
     */
    protected $tva_petrole;
}
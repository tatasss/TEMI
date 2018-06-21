<?php
/**
 * Created by PhpStorm.
 * User: matthias
 * Date: 21/06/2018
 * Time: 11:01
 */

namespace TEMI\mainBundle\Entity\Land;

use Doctrine\ORM\Mapping as ORM;

class Land
{
    /**
     * @ORM\column(name="id",type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strateg="AUTO")
     */
    protected $id;
    /**
     * @ORM\column(name="PIB",type="decimal")
     */
    protected $PIB;
    /**
     * @ORM\column(name="code")
     */
    protected $code;
    /**
     * @ORM\column(name=",name")
     */
    protected $name;

}
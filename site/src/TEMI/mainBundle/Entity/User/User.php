<?php
/**
 * Created by PhpStorm.
 * User: matthias
 */

namespace TEMI\mainBundle\Entity\User;

use FOS\UserBundle\Model\User as baseUSer;
use Doctrine\ORM\Mapping as ORM;
/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */
class User extends baseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    public function __construct()
    {
        parent::__construct();

    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }


}
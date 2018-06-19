<?php
/**
 * Created by PhpStorm.
 * User: matthias
 * Date: 18/06/2018
 * Time: 16:15
 */

namespace TEMI\mainBundle\Modele\User;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Doctrine\UserManager;
class User extends BaseUser
{
    //private $userManager = $this->get('fos_user.user_manager');
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
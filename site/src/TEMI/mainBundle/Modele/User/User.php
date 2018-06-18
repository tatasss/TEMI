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

class User extends BaseUser
{
    protected $id;
    public function __construct()
    {
        parent::__construct();
    }
}
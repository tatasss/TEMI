<?php

namespace TEMI\mainBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class TEMImainBundle extends Bundle
{
    public function getParent()
    {
        return 'FOSUserBundle';
    }
}

<?php

namespace GUBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class GUBundle extends Bundle
{
    public function getParent()
    {
        return 'FOSUserBundle';
    }
}

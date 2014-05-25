<?php

namespace Irvyne\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class IrvyneUserBundle extends Bundle
{
    /**
     * {@inheritdoc}
     */
    public function getParent()
    {
        return 'FOSUserBundle';
    }
}

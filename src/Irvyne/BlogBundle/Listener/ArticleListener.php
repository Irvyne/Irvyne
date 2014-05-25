<?php

namespace Iryvne\BlogBundle\Listener;

use Doctrine\ORM\Event\LifecycleEventArgs;
use Irvyne\BlogBundle\Entity\Article;

class DomainListener
{
    /**
     * @param LifecycleEventArgs $args
     */
    public function prePersist (LifecycleEventArgs $args)
    {
        $entity = $args->getObject();

        if ($entity instanceof Article) {

        }
    }
} 
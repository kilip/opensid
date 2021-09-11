<?php

namespace Tests\OpenSID\Testing\Concerns;

use Doctrine\Persistence\ObjectManager;

trait InteractsWithDoctrine
{
    protected function getManager(): ObjectManager
    {
        return static::getContainer()->get('doctrine')->getManager();
    }
}

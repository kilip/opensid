<?php

namespace Tests\OpenSID\Testing\Concerns;

use Symfony\Component\DependencyInjection\ContainerInterface;

trait InteractsWithContainer
{
    protected static ContainerInterface $container;

    protected function setContainer(ContainerInterface $container): void
    {
        static::$container = $container;
    }

    protected static function getContainer(): ContainerInterface
    {
        return self::$container;
    }
}

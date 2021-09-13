<?php

/*
 * This file is part of the OpenSID project.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Tests\OpenSID\Testing\Concerns;

use Symfony\Component\DependencyInjection\ContainerInterface;

trait InteractsWithContainer
{
    protected static $container;

    protected function setContainer(ContainerInterface $container): void
    {
        static::$container = $container;
    }

    protected static function getContainer(): ContainerInterface
    {
        return self::$container;
    }
}

<?php

/*
 * This file is part of the OpenSID project.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Tests\OpenSID\Testing\Concerns;

use Doctrine\Persistence\ObjectManager;

trait InteractsWithDoctrine
{
    protected function getManager(): ObjectManager
    {
        return static::getContainer()->get('doctrine')->getManager();
    }
}

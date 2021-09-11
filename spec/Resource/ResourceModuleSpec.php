<?php

/*
 * This file is part of the OpenSID project.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace spec\OpenSID\Resource;

use OpenSID\Resource\ResourceModule;
use PhpSpec\ObjectBehavior;

class ResourceModuleSpec extends ObjectBehavior
{
    public function it_is_initializable()
    {
        $this->shouldHaveType(ResourceModule::class);
    }
}

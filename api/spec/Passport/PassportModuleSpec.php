<?php

/*
 * This file is part of the OpenSID project.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace spec\OpenSID\Passport;

use OpenSID\Passport\PassportModule;
use PhpSpec\ObjectBehavior;

class PassportModuleSpec extends ObjectBehavior
{
    public function it_is_initializable()
    {
        $this->shouldHaveType(PassportModule::class);
    }
}
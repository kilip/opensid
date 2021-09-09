<?php

/*
 * This file is part of the OpenSID project.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace spec\OpenSID\User\Model;

use OpenSID\User\Model\User;
use PhpSpec\ObjectBehavior;

class UserSpec extends ObjectBehavior
{
    public function let()
    {
        $this->beConstructedWith(
            'test',
            'test@example.com'
        );
    }

    public function it_is_initializable()
    {
        $this->shouldHaveType(User::class);
    }
}

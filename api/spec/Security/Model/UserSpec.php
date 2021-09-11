<?php

/*
 * This file is part of the OpenSID project.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace spec\OpenSID\Security\Model;

use OpenSID\Security\Model\User;
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

    public function its_should_initialize_user_role_by_default()
    {
        $this->hasRole('ROLE_USER')->shouldReturn(true);
    }
}

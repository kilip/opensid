<?php

/*
 * This file is part of the OpenSID project.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace spec\OpenSID\Application\Model;

use OpenSID\Application\Contracts\GroupInterface;
use OpenSID\Application\Model\Group;
use PhpSpec\ObjectBehavior;

class GroupSpec extends ObjectBehavior
{
    public function it_is_initializable()
    {
        $this->shouldHaveType(Group::class);
    }

    public function it_should_implement_group_interface()
    {
        $this->shouldImplement(GroupInterface::class);
    }

    public function its_nama_should_be_mutable()
    {
        $this->setNama('test');
        $this->getNama()->shouldReturn('test');
    }

    public function its_roles_should_be_mutable()
    {
        $this->setRoles(['ROLE_ADMIN', 'ROLE_CONTRIBUTOR']);
        $this->getRoles()->shouldContain('ROLE_ADMIN');
        $this->getRoles()->shouldContain('ROLE_CONTRIBUTOR');
    }

    public function its_role_should_be_removable()
    {
        $this->setRoles(['ROLE_ADMIN', 'ROLE_CONTRIBUTOR']);
        $this->hasRole('ROLE_ADMIN')->shouldReturn(true);
        $this->removeRole('ROLE_ADMIN');

        $this->hasRole('ROLE_ADMIN')->shouldReturn(false);
        $this->hasRole('ROLE_CONTRIBUTOR')->shouldReturn(true);
    }
}

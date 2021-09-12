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
use OpenSID\Application\Contracts\UserInterface;
use OpenSID\Application\Model\User;
use PhpSpec\ObjectBehavior;

class UserSpec extends ObjectBehavior
{
    public function it_is_initializable()
    {
        $this->shouldHaveType(User::class);
    }

    public function it_should_implement_ROLE_USER_interface()
    {
        $this->shouldImplement(UserInterface::class);
    }

    public function its_ROLE_USERname_should_be_mutable()
    {
        $this->setUsername('nama');
        $this->getUsername()->shouldReturn('nama');
    }

    public function its_email_should_be_mutable()
    {
        $this->setEmail('email');
        $this->getEmail()->shouldReturn('email');
    }

    public function its_password_should_be_mutable()
    {
        $this->getPassword()->shouldBeNull();
        $this->setPassword('password');
        $this->getPassword()->shouldReturn('password');
    }

    public function its_plain_password_should_be_mutable()
    {
        $this->getPlainPassword()->shouldBeNull();
        $this->setPlainPassword('password');
        $this->getPlainPassword()->shouldReturn('password');
    }

    public function its_group_should_be_mutable(GroupInterface $group)
    {
        $this->getGroup()->shouldBeNull();
        $this->setGroup($group);
        $this->getGroup()->shouldReturn($group);
    }

    public function its_last_login_should_be_mutable()
    {
        $this->getLastLogin()->shouldBeNull();
        $this->setLastLogin($date = new \DateTimeImmutable());
        $this->getLastLogin()->shouldReturn($date);
    }

    public function its_active_should_be_true_by_default()
    {
        $this->isActive()->shouldReturn(true);
    }

    public function its_active_should_be_mutable()
    {
        $this->setActive(false);
        $this->isActive()->shouldReturn(false);
    }

    public function its_nama_should_be_mutable()
    {
        $this->getNama()->shouldBeNull();
        $this->setNama('nama');
        $this->getNama()->shouldReturn('nama');
    }

    public function its_company_should_be_mutable()
    {
        $this->getCompany()->shouldBeNull();
        $this->setCompany('company');
        $this->getCompany()->shouldReturn('company');
    }

    public function its_phone_should_be_mutable()
    {
        $this->getPassword()->shouldBeNull();
        $this->setPhone('phone');
        $this->getPhone()->shouldReturn('phone');
    }

    public function its_foto_should_be_mutable()
    {
        $this->getFoto()->shouldBeNull();
        $this->setFoto('foto');
        $this->getFoto()->shouldReturn('foto');
    }

    public function its_session_should_be_mutable()
    {
        $this->getSession()->shouldBeNull();
        $this->setSession('session');
        $this->getSession()->shouldReturn('session');
    }

    public function its_should_initialize_ROLE_USER_role_by_default()
    {
        $this->hasRole(User::ROLE_DEFAULT)->shouldReturn(true);
    }

    public function its_roles_should_be_mutable()
    {
        $this->getRoles()->shouldContain('ROLE_USER');
        $this->setRoles(['ROLE_ADMIN', 'ROLE_CONTRIBUTOR']);
        $this->hasRole('ROLE_ADMIN')->shouldBe(true);
        $this->hasRole('ROLE_CONTRIBUTOR')->shouldBe(true);
        $this->hasRole('ROLE_USER')->shouldBe(true);
    }

    public function its_roles_should_be_addable()
    {
        $this->hasRole('ROLE_CUSTOM')->shouldBe(false);
        $this->addRole('ROLE_CUSTOM');
        $this->hasRole('ROLE_CUSTOM')->shouldBe(true);
    }

    public function its_roles_should_be_removable()
    {
        $this->addRole('ROLE_CUSTOM');
        $this->hasRole('ROLE_CUSTOM')->shouldBe(true);
        $this->removeRole('ROLE_CUSTOM');
        $this->hasRole('ROLE_CUSTOM')->shouldBe(false);
    }

    public function it_should_load_roles_from_group(
        GroupInterface $group
    ) {
        $group->getRoles()->shouldBeCalled()
            ->willReturn(['ROLE_ADMIN']);

        $this->setGroup($group);
        $this->addRole('ROLE_CONTRIBUTOR');

        $this->hasRole('ROLE_ADMIN')
            ->shouldBe(true);
        $this->hasRole('ROLE_CONTRIBUTOR')
            ->shouldBe(true);
        $this->hasRole('ROLE_USER')
            ->shouldBe(true);
    }
}

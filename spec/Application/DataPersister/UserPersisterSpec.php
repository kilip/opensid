<?php

/*
 * This file is part of the OpenSID project.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace spec\OpenSID\Application\DataPersister;

use ApiPlatform\Core\DataPersister\ContextAwareDataPersisterInterface;
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\Persistence\ObjectManager;
use OpenSID\Application\Contracts\UserInterface;
use OpenSID\Application\DataPersister\UserPersister;
use PhpSpec\ObjectBehavior;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class UserPersisterSpec extends ObjectBehavior
{
    public function let(
        UserPasswordHasherInterface $hasher,
        ManagerRegistry $registry,
        ObjectManager $manager
    ) {
        $registry->getManager()->willReturn($manager);
        $this->beConstructedWith($registry, $hasher);
    }

    public function it_is_initializable()
    {
        $this->shouldHaveType(UserPersister::class);
    }

    public function it_should_be_an_api_platform_persister()
    {
        $this->shouldImplement(ContextAwareDataPersisterInterface::class);
    }

    public function its_persist_should_create_hashed_password(
        UserPasswordHasherInterface $hasher,
        ObjectManager $manager,
        UserInterface $user
    ) {
        $user->getPlainPassword()
            ->shouldBeCalled()->willReturn('password');
        $user->getPlainPassword()->shouldBeCalled();
        $hasher
            ->hashPassword($user, 'password')
            ->shouldBeCalled()
            ->willReturn('hashed');

        $user->setPassword('hashed')
            ->shouldBeCalled();

        $manager->persist($user)
            ->shouldBeCalled();
        $manager->flush()->shouldBeCalled();

        $this->persist($user, []);
    }
}

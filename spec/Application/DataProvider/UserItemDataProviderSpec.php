<?php

/*
 * This file is part of the OpenSID project.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace spec\OpenSID\Application\DataProvider;

use ApiPlatform\Core\DataProvider\ItemDataProviderInterface;
use ApiPlatform\Core\DataProvider\RestrictedDataProviderInterface;
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Persistence\ObjectRepository;
use OpenSID\Application\Contracts\UserInterface;
use OpenSID\Application\DataProvider\UserItemDataProvider;
use OpenSID\Application\Model\Config;
use OpenSID\Application\Model\User;
use OpenSID\Resource\Exception\ResourceException;
use PhpSpec\ObjectBehavior;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;

class UserItemDataProviderSpec extends ObjectBehavior
{
    public function let(
        TokenStorageInterface $tokenStorage,
        ManagerRegistry $registry,
        ObjectManager $manager,
        ObjectRepository $repository,
        TokenInterface $token,
        UserInterface $user
    ) {
        $registry->getManagerForClass(User::class)
            ->willReturn($manager);
        $manager->getRepository(User::class)
            ->willReturn($repository);
        $tokenStorage->getToken()
            ->willReturn($token);
        $token->getUser()->willReturn($user);

        $this->beConstructedWith($tokenStorage, $registry);
    }

    public function it_is_initializable()
    {
        $this->shouldHaveType(UserItemDataProvider::class);
    }

    public function it_should_be_the_item_data_provider()
    {
        $this->shouldImplement(ItemDataProviderInterface::class);
    }

    public function it_should_be_the_restricted_data_provider()
    {
        $this->shouldImplement(RestrictedDataProviderInterface::class);
    }

    public function it_throws_exception_when_model_manager_not_found(
        TokenStorageInterface $tokenStorage,
        ManagerRegistry $registry
    ) {
        $registry->getManagerForClass(User::class)
            ->willReturn(null);
        $this->shouldThrow(ResourceException::class)
            ->duringInstantiation();
        $this->beConstructedWith($tokenStorage, $registry);
    }

    public function it_only_supports_user_get_operation()
    {
        $this->supports(User::class, 'get')
            ->shouldBe(true);
        $this->supports(Config::class, 'get')
            ->shouldBe(false);
        $this->supports(User::class, 'put')
            ->shouldBe(false);
    }

    public function it_should_retrieve_user_profile_for_current_user(
        UserInterface $user
    ) {
        $this
            ->getItem(User::class, 'profile', 'get')
            ->shouldReturn($user);
    }

    public function it_should_retrieve_user_by_id(
        ObjectRepository $repository,
        UserInterface $user
    ) {
        $repository->find('id')
            ->shouldBeCalled()->willReturn($user);
        $this->getItem(User::class, 'id', 'get')
            ->shouldReturn($user);
    }
}

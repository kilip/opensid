<?php

/*
 * This file is part of the OpenSID project.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace spec\OpenSID\Application\DataProvider;

use Doctrine\Persistence\ManagerRegistry;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Persistence\ObjectRepository;
use OpenSID\Application\DataProvider\ConfigItemDataProvider;
use OpenSID\Application\Model\Config;
use OpenSID\Application\Model\User;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

/**
 * @covers \OpenSID\Application\DataProvider\ConfigItemDataProvider
 */
class ConfigItemDataProviderSpec extends ObjectBehavior
{
    public function let(
        ManagerRegistry $registry,
        ObjectManager $manager,
        ObjectRepository $repository
    ) {
        $registry->getManager()->willReturn($manager);
        $manager->getRepository(Config::class)->willReturn($repository);
        $this->beConstructedWith($registry);
    }

    public function it_is_initializable()
    {
        $this->shouldHaveType(ConfigItemDataProvider::class);
    }

    public function it_only_supports_config_model()
    {
        $this->supports(Config::class)->shouldReturn(true);
        $this->supports(User::class)->shouldReturn(false);
    }

    public function it_should_create_new_config_object(
        ObjectRepository $repository,
        ObjectManager $manager
    ) {
        $repository->findOneBy([])->willReturn(null);
        $manager->persist(Argument::type(Config::class))
            ->shouldBeCalled();
        $manager->flush()->shouldBeCalled();

        $this->getItem(Config::class, 0)
            ->shouldBeAnInstanceOf(Config::class);
    }

    public function it_should_returns_existing_config(
        ObjectRepository $repository,
        Config $config
    ) {
        $repository->findOneBy(['id' => 1])
            ->shouldBeCalled()
            ->willReturn($config);

        $this->getItem(Config::class, 1)
            ->shouldReturn($config);
    }
}

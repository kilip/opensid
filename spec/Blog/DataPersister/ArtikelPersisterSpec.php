<?php

/*
 * This file is part of the OpenSID project.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace spec\OpenSID\Blog\DataPersister;

use ApiPlatform\Core\DataPersister\ContextAwareDataPersisterInterface;
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\Persistence\ObjectManager;
use OpenSID\Application\Contracts\UserInterface;
use OpenSID\Blog\DataPersister\ArtikelPersister;
use OpenSID\Blog\Model\Artikel;
use OpenSID\Blog\Model\Kategori;
use OpenSID\Resource\Exception\ResourceException;
use PhpSpec\ObjectBehavior;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;

class ArtikelPersisterSpec extends ObjectBehavior
{
    public function let(
        ManagerRegistry $registry,
        ObjectManager $manager,
        TokenStorageInterface $tokenStorage
    ): void {
        $registry->getManagerForClass(Artikel::class)
            ->willReturn($manager);

        $this->beConstructedWith($registry, $tokenStorage);
    }

    public function it_is_initializable()
    {
        $this->shouldHaveType(ArtikelPersister::class);
    }

    public function it_should_implement_context_aware_data_persister_interface()
    {
        $this->shouldImplement(ContextAwareDataPersisterInterface::class);
    }

    public function it_throws_exception_when_object_manager_not_found(
        ManagerRegistry $registry,
        TokenStorageInterface $tokenStorage
    ) {
        $registry->getManagerForClass(Artikel::class)
            ->willReturn(null);
        $this->beConstructedWith($registry, $tokenStorage);
        $this->shouldThrow(ResourceException::class)
            ->duringInstantiation();
    }

    public function it_only_supports_artikel_object(
        Artikel $artikel,
        Kategori $kategori
    ) {
        $this->supports($kategori)->shouldBe(false);
        $this->supports($artikel)->shouldBe(true);
    }

    public function it_should_persist_artikel(
        ObjectManager $manager,
        TokenStorageInterface $tokenStorage,
        Artikel $artikel,
        TokenInterface $token,
        UserInterface $user
    ) {
        $tokenStorage->getToken()->willReturn($token);
        $token->getUser()->willReturn($user);

        $artikel->getJudul()
            ->shouldBeCalled()->willReturn('Judul Artikel');
        $artikel->getUser()->willReturn(null);
        $artikel->setSlug('judul-artikel')
            ->shouldBeCalled();
        $artikel->setUser($user)
            ->shouldBeCalled();
        $manager->persist($artikel)->shouldBeCalled();
        $manager->flush()->shouldBeCalled();

        $this->persist($artikel);
    }

    public function it_removes_artikel(
        ObjectManager $manager,
        Artikel $artikel
    ) {
        $manager->remove($artikel)->shouldBeCalled();
        $manager->flush()->shouldBeCalled();

        $this->remove($artikel);
    }
}

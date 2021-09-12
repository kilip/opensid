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
use OpenSID\Blog\DataPersister\KategoriPersister;
use OpenSID\Blog\Model\Artikel;
use OpenSID\Blog\Model\Kategori;
use OpenSID\Resource\Exception\ResourceException;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;

class KategoriPersisterSpec extends ObjectBehavior
{
    public function let(
        ManagerRegistry $registry,
        ObjectManager $manager
    ) {
        $registry->getManagerForClass(Kategori::class)
            ->willReturn($manager);
        $this->beConstructedWith($registry);
    }

    public function it_is_initializable()
    {
        $this->shouldHaveType(KategoriPersister::class);
    }

    public function it_should_implement_context_aware_data_persister_interface()
    {
        $this->shouldImplement(ContextAwareDataPersisterInterface::class);
    }

    public function it_throws_exception_when_object_manager_not_found(
        ManagerRegistry $registry,
        TokenInterface $token
    ) {
        $registry->getManagerForClass(Kategori::class)
            ->willReturn(null);
        $this->beConstructedWith($registry);
        $this->shouldThrow(ResourceException::class)
            ->duringInstantiation();
    }

    public function it_only_support_kategori_object(Kategori $kategori, Artikel $artikel)
    {
        $this->supports($artikel)->shouldBe(false);
        $this->supports($kategori)->shouldBe(true);
    }

    public function it_should_persist_kategori(
        Kategori $kategori,
        ObjectManager $manager
    ) {
        $kategori->setTipe(Argument::any())->shouldBeCalled();
        $kategori->setUrut(Argument::any())->shouldBeCalled();
        $kategori->setParent(Argument::any())->shouldBeCalled();
        $kategori->setSlug('berita-desa')->shouldBeCalled();
        $kategori->getKategori()
            ->shouldBeCalled()
            ->willReturn('Berita Desa');

        $manager->persist($kategori)->shouldBeCalled();
        $manager->flush()->shouldBeCalled();

        $this->persist($kategori);
    }

    public function it_should_remove_kategori(
        Kategori $kategori,
        ObjectManager $manager
    ) {
        $manager->remove($kategori)->shouldBeCalled();
        $manager->flush()->shouldBeCalled();
        $this->remove($kategori);
    }
}

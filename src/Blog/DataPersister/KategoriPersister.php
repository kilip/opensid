<?php

/*
 * This file is part of the OpenSID project.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace OpenSID\Blog\DataPersister;

use ApiPlatform\Core\DataPersister\ContextAwareDataPersisterInterface;
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\Persistence\ObjectManager;
use OpenSID\Blog\Model\Kategori;
use OpenSID\Resource\Exception\ResourceException;
use Symfony\Component\String\Slugger\AsciiSlugger;

class KategoriPersister implements ContextAwareDataPersisterInterface
{
    private ObjectManager $manager;

    public function __construct(
        ManagerRegistry $registry
    ) {
        $manager = $registry->getManagerForClass(Kategori::class);
        if (null === $manager) {
            throw ResourceException::managerNotFoundForClass(Kategori::class);
        }

        $this->manager = $manager;
    }

    /**
     * @param object|mixed $data
     */
    public function supports($data, array $context = []): bool
    {
        return $data instanceof Kategori;
    }

    /**
     * @param Kategori $data
     */
    public function persist($data, array $context = [])
    {
        $manager = $this->manager;
        $slugger = new AsciiSlugger('id');
        $slug    = $slugger->slug($data->getNama())->lower()->toString();

        // TODO: implementasi urut, dll
        $data->setTipe(1);
        $data->setUrut(1);
        $data->setParent(0);
        $data->setSlug($slug);

        $manager->persist($data);
        $manager->flush();
    }

    /**
     * @param Kategori $data
     *
     * @return void
     */
    public function remove($data, array $context = [])
    {
        $manager = $this->manager;

        $manager->remove($data);
        $manager->flush();
    }
}

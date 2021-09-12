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
use OpenSID\Application\Contracts\UserInterface;
use OpenSID\Blog\Model\Artikel;
use OpenSID\Resource\Exception\ResourceException;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;
use Symfony\Component\String\Slugger\AsciiSlugger;

class ArtikelPersister implements ContextAwareDataPersisterInterface
{
    private TokenStorageInterface $tokenStorage;
    private ObjectManager $manager;

    public function __construct(
        ManagerRegistry $registry,
        TokenStorageInterface $tokenStorage
    ) {
        $manager = $registry->getManagerForClass(Artikel::class);
        if (null === $manager) {
            throw ResourceException::managerNotFoundForClass(Artikel::class);
        }

        $this->manager        = $manager;
        $this->tokenStorage   = $tokenStorage;
    }

    /**
     * @param Artikel $data
     */
    public function supports($data, array $context = []): bool
    {
        return $data instanceof Artikel;
    }

    /**
     * @param Artikel $data
     */
    public function persist($data, array $context = [])
    {
        $manager = $this->manager;
        $token   = $this->tokenStorage->getToken();
        $slug    = (new AsciiSlugger('id'))
            ->slug($data->getJudul())
            ->lower()
            ->toString();

        if (null === $data->getUser() && null !== $token) {
            /** @var UserInterface $user */
            $user = $token->getUser();
            $data->setUser($user);
        }
        $data->setSlug($slug);

        $manager->persist($data);
        $manager->flush();
    }

    /**
     * @param Artikel $data
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

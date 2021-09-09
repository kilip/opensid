<?php

/*
 * This file is part of the OpenSID project.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace OpenSID\User\DataPersister;

use ApiPlatform\Core\DataPersister\ContextAwareDataPersisterInterface;
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\Persistence\ObjectManager;
use OpenSID\User\Contracts\UserInterface;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class UserPersister implements ContextAwareDataPersisterInterface
{
    private UserPasswordHasherInterface $hasher;
    private ObjectManager $manager;

    public function __construct(
        ManagerRegistry $registry,
        UserPasswordHasherInterface $hasher
    ) {
        $this->manager = $registry->getManager();
        $this->hasher  = $hasher;
    }

    /**
     * @param UserInterface $data
     */
    public function supports($data, array $context = []): bool
    {
        return $data instanceof UserInterface;
    }

    /**
     * @param UserInterface $data
     */
    public function persist($data, array $context = []): UserInterface
    {
        $manager = $this->manager;
        $plain   = $data->getPlainPassword();

        if (null !== $plain) {
            $hashed = $this->hasher->hashPassword($data, $plain);
            $data->setPassword($hashed);
        }

        $manager->persist($data);
        $manager->flush();

        return $data;
    }

    /**
     * @param UserInterface $data
     */
    public function remove($data, array $context = []): void
    {
    }
}

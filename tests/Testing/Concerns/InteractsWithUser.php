<?php

/*
 * This file is part of the OpenSID project.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Tests\OpenSID\Testing\Concerns;

use OpenSID\Application\Contracts\UserInterface;
use OpenSID\Application\DataPersister\UserPersister;
use OpenSID\Application\Model\User;

trait InteractsWithUser
{
    use InteractsWithDoctrine;

    protected function getUserPersister(): UserPersister
    {
        return static::getContainer()->get('opensid.user.persister.user');
    }

    public function iDonTHaveUser(string $username): void
    {
        $manager    = $this->getManager();
        $repository = $manager->getRepository(User::class);
        $user       = $repository->findOneBy([
            'username' => $username,
        ]);

        if (null !== $user) {
            $manager->remove($user);
            $manager->flush();
        }
    }

    public function iHaveUser(string $username = 'test', string $email = 'test@example.com', string $password = 'test'): UserInterface
    {
        $manager    = $this->getManager();
        $repository = $manager->getRepository(User::class);
        $user       = $repository->findOneBy([
            'username' => $username,
        ]);

        if (null === $user) {
            $user = new User();
            $user->setUsername($username);
            $user->setEmail($email);
            $user->setPlainPassword($password);
            $this->getUserPersister()->persist($user);
        }

        return $user;
    }
}

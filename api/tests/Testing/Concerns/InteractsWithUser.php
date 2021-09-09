<?php

/*
 * This file is part of the OpenSID project.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Tests\OpenSID\Testing\Concerns;

use Doctrine\Persistence\ObjectManager;
use OpenSID\User\Contracts\UserInterface;
use OpenSID\User\DataPersister\UserPersister;
use OpenSID\User\Model\User;
use Psr\Container\ContainerInterface;

trait InteractsWithUser
{
    protected UserPersister $userPersister;
    protected ?ObjectManager $userManager = null;

    public function initContainer(ContainerInterface $container): void
    {
        $this->userPersister = $container->get('opensid.user.persister.user');
        $this->userManager = $container->get('doctrine')->getManager();
    }

    public function iDonTHaveUser(string $username): void
    {
        $manager    = $this->getUserManager();
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
        $manager    = $this->getUserManager();
        $repository = $manager->getRepository(User::class);
        $user       = $repository->findOneBy([
            'username' => $username,
        ]);

        if (null === $user) {
            $user = new User();
            $user->setUsername($username);
            $user->setEmail($email);
            $user->setPlainPassword($password);
            $this->userPersister->persist($user);
        }

        return $user;
    }

    protected function getUserManager(): ObjectManager
    {
        if(is_null($this->userManager)){
            if(method_exists($this, 'getContainer')){
                $container = $this->getContainer();
                $this->userManager  = $container->get('doctrine')->getManager();
            }
        }

        return $this->userManager;
    }
}

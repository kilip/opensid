<?php

/*
 * This file is part of the OpenSID project.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Tests\OpenSID\Behat;

use Behat\Behat\Context\Context;
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\Persistence\ObjectManager;
use OpenSID\User\Model\User;

class UserContext implements Context
{
    private ObjectManager $manager;

    public function __construct(
        ManagerRegistry $registry
    ) {
        $this->manager = $registry->getManagerForClass(User::class);
    }

    /**
     * @Given I don't have user with username :username
     * @Given Saya tidak memiliki user :username
     */
    public function iDonTHaveUser(string $username)
    {
        $manager    = $this->manager;
        $repository = $manager->getRepository(User::class);
        $user       = $repository->findOneBy([
            'username' => $username,
        ]);

        if (null !== $user) {
            $manager->remove($user);
            $manager->flush();
        }
    }
}

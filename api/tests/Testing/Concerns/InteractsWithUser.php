<?php

/*
 * This file is part of the OpenSID project.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Tests\OpenSID\Testing\Concerns;

use OpenSID\User\Model\User;

trait InteractsWithUser
{
    /**
     * @Given I don't have user with username :username
     * @Given Saya tidak memiliki user :username
     */
    public function iDonTHaveUser(string $username)
    {
        $manager    = $this->getContainer()->get('doctrine')->getManagerForClass(User::class);
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

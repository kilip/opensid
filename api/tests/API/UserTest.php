<?php

/*
 * This file is part of the api-template project.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Tests\App\API;

use ApiPlatform\Core\Bridge\Symfony\Bundle\Test\ApiTestCase;
use Symfony\Component\HttpFoundation\Response;
use Tests\App\Testing\Concerns\InteractsWithUser;

class UserTest extends ApiTestCase
{
    use InteractsWithUser;

    public function test_register()
    {
        $this->iDonTHaveUser('test');
        $client   = static::createClient();
        $client->request('POST', '/register', [
            'json' => [
                'username' => 'test',
                'email' => 'test@example.com',
            ],
        ]);
        $this->assertResponseIsSuccessful();
        $this->assertResponseStatusCodeSame(Response::HTTP_CREATED);
        $this->assertJsonContains(['username' => 'test']);
        $this->assertJsonContains(['email' => 'test@example.com']);
    }
}

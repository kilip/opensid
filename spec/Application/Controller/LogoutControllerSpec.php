<?php

/*
 * This file is part of the OpenSID project.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace spec\OpenSID\Application\Controller;

use OpenSID\Application\Controller\LogoutController;
use PhpSpec\ObjectBehavior;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;

class LogoutControllerSpec extends ObjectBehavior
{
    public function it_is_initializable()
    {
        $this->shouldHaveType(LogoutController::class);
    }

    public function it_should_logout_user(
        TokenStorageInterface $tokenStorage,
        TokenInterface $token
    ) {
        $tokenStorage->getToken()
            ->willReturn($token);

        $tokenStorage->setToken(null)
            ->shouldBeCalled();

        $this->__invoke($tokenStorage)
            ->shouldHaveType(JsonResponse::class);
    }
}

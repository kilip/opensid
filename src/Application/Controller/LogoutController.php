<?php

/*
 * This file is part of the OpenSID project.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace OpenSID\Application\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;

class LogoutController extends AbstractController
{
    public function __invoke(
        TokenStorageInterface $tokenStorage
    ): JsonResponse {
        $token = $tokenStorage->getToken();
        if (null !== $token) {
            $tokenStorage->setToken(null);
        }

        $response =  new JsonResponse(['message' => 'Berhasil keluar dari OpenSID'], 200);
        $response->headers->clearCookie('token');

        return $response;
    }
}

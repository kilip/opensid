<?php

/*
 * This file is part of the OpenSID project.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace OpenSID\Application\DataProvider;

use ApiPlatform\Core\DataProvider\ItemDataProviderInterface;
use ApiPlatform\Core\DataProvider\RestrictedDataProviderInterface;
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\Persistence\ObjectManager;
use OpenSID\Application\Contracts\UserInterface;
use OpenSID\Application\Model\User;
use OpenSID\Resource\Exception\ResourceException;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;

class UserItemDataProvider implements ItemDataProviderInterface, RestrictedDataProviderInterface
{
    private ObjectManager $manager;
    private TokenStorageInterface $tokenStorage;

    public function __construct(
        TokenStorageInterface $tokenStorage,
        ManagerRegistry $registry
    ) {
        $manager = $registry->getManagerForClass(User::class);

        if (null === $manager) {
            throw ResourceException::managerNotFoundForClass(User::class);
        }

        $this->manager      = $manager;
        $this->tokenStorage = $tokenStorage;
    }

    public function supports(string $resourceClass, string $operationName = null, array $context = []): bool
    {
        return User::class === $resourceClass && 'get' === $operationName;
    }

    /**
     * {@inheritDoc}
     *
     * @psalm-param class-string<T> $resourceClass
     * @template T
     * @psalm-suppress MissingParamType
     * @psalm-suppress MoreSpecificReturnType
     * @psalm-suppress MoreSpecificImplementedParamType
     */
    public function getItem(string $resourceClass, $id, string $operationName = null, array $context = [])
    {
        $repository   = $this->manager->getRepository($resourceClass);
        $tokenStorage = $this->tokenStorage;

        if ('profile' === $id) {
            $token = $tokenStorage->getToken();
            if (null === $token) {
                return null;
            }

            $user = $token->getUser();
            if ($user instanceof UserInterface) {
                return $user;
            }
        }

        return $repository->find($id);
    }
}

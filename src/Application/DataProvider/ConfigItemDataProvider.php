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
use OpenSID\Application\Model\Config;

class ConfigItemDataProvider implements ItemDataProviderInterface, RestrictedDataProviderInterface
{
    private ObjectManager $manager;

    public function __construct(
        ManagerRegistry $registry
    ) {
        $this->manager = $registry->getManager();
    }

    public function supports(string $resourceClass, string $operationName = null, array $context = []): bool
    {
        return Config::class === $resourceClass;
    }

    public function getItem(string $resourceClass, $id, string $operationName = null, array $context = [])
    {
        $manager    = $this->manager;
        $repository = $manager->getRepository(Config::class);
        if (0 === $id) {
            $config = $repository->findOneBy([]);
        } else {
            $config = $repository->findOneBy(['id' => $id]);
        }

        if (null === $config) {
            $config = new Config();
            $manager->persist($config);
            $manager->flush();
        }

        return $config;
    }
}

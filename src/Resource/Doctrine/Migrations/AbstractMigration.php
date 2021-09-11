<?php

/*
 * This file is part of the OpenSID project.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace OpenSID\Resource\Doctrine\Migrations;

use Doctrine\DBAL\Connection;
use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration as BaseAbstractMigration;
use Psr\Log\LoggerInterface;

abstract class AbstractMigration extends BaseAbstractMigration
{
    protected LoggerInterface $logger;
    protected array $renamedTables = [];

    public function __construct(Connection $connection, LoggerInterface $logger)
    {
        $this->connection = $connection;
        $this->sm         = $this->connection->getSchemaManager();
        $this->platform   = $this->connection->getDatabasePlatform();
        $this->logger     = $logger;
    }

    public function preUp(Schema $schema): void
    {
        $this->addSql('set FOREIGN_KEY_CHECKS=0');
    }

    public function postUp(Schema $schema): void
    {
        $this->addSql('set FOREIGN_KEY_CHECKS=1');
    }

    public function preDown(Schema $schema): void
    {
        $this->addSql('set FOREIGN_KEY_CHECKS=0');
    }

    public function postDown(Schema $schema): void
    {
        $this->addSql('set FOREIGN_KEY_CHECKS=1');
    }

    public function addSql(string $sql, array $params = [], array $types = []): void
    {
        parent::addSql($sql, $params, $types);
    }
}

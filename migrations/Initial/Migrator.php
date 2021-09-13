<?php

/*
 * This file is part of the OpenSID project.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace DoctrineMigrations\Initial;

use OpenSID\Resource\Doctrine\Migrations\AbstractMigration;

class Migrator
{
    protected array $methods       = [];
    protected array $renamedTables = [];
    private AbstractMigration $migration;

    public function __construct(AbstractMigration $migration)
    {
        $this->migration = $migration;
    }

    protected function addSql(string $sql, array $params = [], array $types = []): void
    {
        $this->migration->addSql($sql, $params, $types);
    }

    public function getMethods(): array
    {
        return $this->methods;
    }
}

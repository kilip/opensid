<?php

namespace DoctrineMigrations\Initial;

use Doctrine\DBAL\Schema\Schema;
use OpenSID\Resource\Doctrine\Migrations\AbstractMigration;

class Migrator
{
    protected array $methods = [];
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

    /**
     * @return array
     */
    public function getMethods(): array
    {
        return $this->methods;
    }
}

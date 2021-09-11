<?php

/*
 * This file is part of the OpenSID project.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace OpenSID\Resource\Doctrine\Migrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration as BaseAbstractMigration;

abstract class AbstractMigration extends BaseAbstractMigration
{
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

    public function renameTable(Schema $schema, string $from, string $to): void
    {
        $this->addSql('alter table '.$from.' rename to '.$to);
    }
}

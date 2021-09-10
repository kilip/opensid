<?php

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
}

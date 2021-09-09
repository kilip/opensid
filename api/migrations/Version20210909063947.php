<?php

/*
 * This file is part of the OpenSID project.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210909063947 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Upgrade table relations';
    }

    public function up(Schema $schema): void
    {
        // ALTER TABLE passport_user ADD CONSTRAINT FK_7871BE50FE54D947 FOREIGN KEY (group_id) REFERENCES `group` (id);
        // CREATE INDEX IDX_7871BE50FE54D947 ON passport_user (group_id);

        $this->addSql('SET FOREIGN_KEY_CHECKS=0');
        $this->addSql(' CREATE INDEX IDX_7871BE50FE54D947 ON passport_user (group_id)');
        $this->addSql(' ALTER TABLE passport_user ADD CONSTRAINT FK_USER_GROUP FOREIGN KEY (group_id) REFERENCES passport_group (id)');
        $this->addSql('SET FOREIGN_KEY_CHECKS=1');
    }

    public function down(Schema $schema): void
    {
        $this->addSql('SET FOREIGN_KEY_CHECKS=0');
        $this->addSql('alter table passport_user drop constraint FK_USER_GROUP');
        $this->addSql('alter table passport_user drop index IDX_7871BE50FE54D947');
        $this->addSql('SET FOREIGN_KEY_CHECKS=1');
    }
}

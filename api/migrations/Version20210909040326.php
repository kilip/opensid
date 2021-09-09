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
final class Version20210909040326 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Migrate old OpenSID into OpenSID API version';
    }

    public function up(Schema $schema): void
    {
        $this->renameTable($schema);
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        //$this->addSql('alter table passport_user drop column uuid');
        //$this->addSql('alter table passport_group drop column uuid');
        if ($schema->hasTable('passport_user')) {
            $this->addSql('alter table `passport_user` rename to `user`');
        }
        if ($schema->hasTable('passport_group')) {
            $this->addSql('alter table `passport_group` rename to user_grup');
        }

        if (file_exists($file = __DIR__.'/../.scratches/rollback-user.sql')) {
            $query = file_get_contents($file);
            $this->addSql($query);
        }
    }

    private function renameTable(Schema $schema): void
    {
        if (false === $schema->hasTable('passport_user')) {
            $this->addSql('ALTER TABLE `user` RENAME TO passport_user');
            $this->migrateUserIDtoUUID($schema);
        }
        if (false === $schema->hasTable('passport_group')) {
            $this->addSql('ALTER TABLE `user_grup` RENAME TO passport_group');
            $this->migrateGroupIDtoUUID($schema);
        }
    }

    private function migrateGroupIDtoUUID(Schema $schema): void
    {
        $this->addSql('alter table `passport_group` modify column id int not null');
        $this->addSql('alter table `passport_group` drop primary key');

        $this->addSql('alter table `passport_group` change id old_id varchar(255) not null');
        $this->addSql('alter table `passport_group` add column id varchar(255)');
        $this->addSql('update `passport_group` set id = uuid()');
        $this->addSql('alter table `passport_group` add primary key (id)');

        $query = <<<EOC
update passport_user u
set u.group_id = (select id from passport_group g where u.group_id=g.old_id)
EOC;
        $this->addSql($query);

        $this->addSql('alter table passport_group drop column old_id');
    }

    private function migrateUserIDtoUUID(Schema $schema): void
    {
        $this->addSql('alter table `passport_user` modify column id int not null');
        $this->addSql('alter table `passport_user` drop primary key');

        $this->addSql('alter table `passport_user` change id old_id varchar(255) not null');
        $this->addSql('alter table `passport_user` add column id varchar(255)');
        $this->addSql('update `passport_user` set id = uuid()');
        $this->addSql('alter table `passport_user` add primary key (id)');
        $this->addSql('alter table `passport_user` change id_grup group_id varchar(255) not null');

        // @TODO: update other related table here

        $this->addSql('alter table passport_user drop column old_id');
    }
}

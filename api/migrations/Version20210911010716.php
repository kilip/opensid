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
use Doctrine\DBAL\Types\PhpIntegerMappingType;
use OpenSID\Resource\Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210911010716 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->userUp($schema);
        $this->blogUp($schema);
    }

    public function down(Schema $schema): void
    {
        $this->userDown($schema);
        $this->blogDown($schema);
    }

    public function userUp(Schema $schema): void
    {
        if ($schema->hasTable('user')) {
            $this->renameTable($schema, 'user', 'passport_user');
            $this->renameTable($schema, 'user_grup', 'passport_group');
            $idType = $schema->getTable('user')
                ->getColumn('id')->getType();

            if ($idType instanceof PhpIntegerMappingType) {
                $this->userConvertID($schema);
            }
        }
        $this->addSql('ALTER TABLE passport_user DROP FOREIGN KEY IF EXISTS FK_7871BE5059AD4C15');
        $this->addSql('DROP INDEX IF EXISTS IDX_7871BE5059AD4C15 ON passport_user');
        $this->addSql('CREATE INDEX IF NOT EXISTS IDX_7871BE50FE54D947 ON passport_user (group_id)');
        $this->addSql('ALTER TABLE passport_user ADD CONSTRAINT FK_7871BE50FE54D947 FOREIGN KEY IF NOT EXISTS (group_id) REFERENCES passport_group (id)');
        $this->addSql('
ALTER TABLE passport_user
    CHANGE active active TINYINT(1) DEFAULT NULL,
    CHANGE foto foto VARCHAR(100) DEFAULT NULL,
    CHANGE session session VARCHAR(40) DEFAULT NULL,
    CHANGE old_id old_id INT DEFAULT NULL
');
    }

    public function userDown(Schema $schema): void
    {
        $this->addSql('ALTER TABLE passport_user DROP FOREIGN KEY IF EXISTS FK_7871BE50FE54D947');
        $this->addSql('DROP INDEX IF EXISTS IDX_7871BE50FE54D947 ON passport_user');
        $this->addSql('ALTER TABLE passport_user ADD CONSTRAINT FK_7871BE5059AD4C15 FOREIGN KEY (group_id) REFERENCES passport_group (id)');
        $this->addSql('CREATE INDEX IDX_7871BE5059AD4C15 ON passport_user (group_id)');
        $this->addSql('ALTER TABLE passport_user CHANGE active active TINYINT(1) DEFAULT \'0\', CHANGE foto foto VARCHAR(100) CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, CHANGE session session VARCHAR(40) CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`');
        $this->renameTable($schema, 'passport_user', 'user');
        $this->renameTable($schema, 'passport_group', 'user_grup');
    }

    private function userConvertID(Schema $schema)
    {
        $this->addSql('ALTER TABLE passport_group CHANGE id old_id SMALLINT DEFAULT NULL');
        $this->addSql('ALTER TABLE passport_group drop primary key');
        $this->addSql('ALTER TABLE passport_user CHANGE id old_id INT NOT NULL');
        $this->addSql('ALTER TABLE passport_user drop primary key');
        $this->addSql('ALTER TABLE passport_user CHANGE id_grup group_id VARCHAR(36) DEFAULT NULL');

        $this->addSql('ALTER TABLE passport_group add column id varchar(36)');
        $this->addSql('UPDATE passport_group set id=uuid()');
        $this->addSql('ALTER TABLE passport_group CHANGE id id varchar(36) NOT NULL PRIMARY KEY');

        $this->addSql('ALTER TABLE passport_user add column id varchar(36)');
        $this->addSql('UPDATE passport_user set id=uuid()');
        $this->addSql('ALTER TABLE passport_user CHANGE id id varchar(36) NOT NULL PRIMARY KEY');
        $query = <<<EOC
update passport_user u
set u.group_id = (select id from passport_group g where u.group_id=g.old_id)
EOC;

        $this->addSql('
ALTER TABLE passport_user
    CHANGE active active TINYINT(1) DEFAULT 1,
    CHANGE foto foto VARCHAR(100) DEFAULT NULL,
    CHANGE session session VARCHAR(40) DEFAULT NULL
');

        $this->addSql($query);
    }

    private function blogUp(Schema $schema)
    {
        $this->renameTable($schema, 'kategori', 'blog_kategori');
        $this->renameTable($schema, 'artikel', 'blog_artikel');
        $this->renameTable($schema, 'agenda', 'blog_agenda');

        $this->addSql('
ALTER TABLE blog_kategori
    CHANGE parrent parent SMALLINT NOT NULL,
    CHANGE tipe tipe INT NOT NULL,
    CHANGE urut urut SMALLINT NOT NULL
');

        $this->addSql('
ALTER TABLE blog_artikel CHANGE id_user id_user VARCHAR(36) DEFAULT NULL
');

        $this->addSql('
UPDATE blog_artikel
    set blog_artikel.id_user=(SELECT id from passport_user where blog_artikel.id_user=passport_user.old_id)
');
        $this->addSql('
ALTER TABLE blog_artikel
    CHANGE enabled enabled TINYINT(1) NOT NULL,
    CHANGE tgl_upload tgl_upload DATETIME NOT NULL,
    CHANGE id_kategori id_kategori INT DEFAULT NULL,
    CHANGE headline headline INT NOT NULL,
    CHANGE boleh_komentar boleh_komentar TINYINT(1) NOT NULL,
    CHANGE hit hit BIGINT NOT NULL
');

        $this->addSql('ALTER TABLE blog_artikel ADD CONSTRAINT FK_48C1E1B098C5FE85 FOREIGN KEY IF NOT EXISTS (id_kategori) REFERENCES blog_kategori (id)');
        $this->addSql('ALTER TABLE blog_artikel ADD CONSTRAINT FK_48C1E1B06B3CA4B FOREIGN KEY IF NOT EXISTS (id_user) REFERENCES passport_user (id)');
        $this->addSql('CREATE INDEX IF NOT EXISTS IDX_48C1E1B098C5FE85 ON blog_artikel (id_kategori)');
        $this->addSql('CREATE INDEX IF NOT EXISTS IDX_48C1E1B06B3CA4B ON blog_artikel (id_user)');

        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE blog_agenda DROP FOREIGN KEY IF EXISTS id_artikel_fk');
        $this->addSql('ALTER TABLE blog_agenda DROP FOREIGN KEY IF EXISTS id_artikel_fk');
        $this->addSql('
ALTER TABLE blog_agenda
    CHANGE tgl_agenda tanggal DATETIME DEFAULT NULL,
    CHANGE koordinator_kegiatan koordinator VARCHAR(50) NOT NULL,
    CHANGE lokasi_kegiatan lokasi VARCHAR(100) NOT NULL,
    CHANGE id_artikel id_artikel INT DEFAULT NULL
');
        $this->addSql('ALTER TABLE blog_agenda ADD CONSTRAINT FK_B9A26DB67AAAF543 FOREIGN KEY IF NOT EXISTS (id_artikel) REFERENCES blog_artikel (id)');
        $this->addSql('DROP INDEX IF EXISTS id_artikel_fk ON blog_agenda');
        $this->addSql('CREATE INDEX IDX_B9A26DB67AAAF543 ON blog_agenda (id_artikel)');
        $this->addSql('ALTER TABLE blog_agenda ADD CONSTRAINT id_artikel_fk FOREIGN KEY IF NOT EXISTS (id_artikel) REFERENCES blog_artikel (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE blog_agenda DROP FOREIGN KEY IF EXISTS id_artikel_fk');
    }

    private function blogDown(Schema $schema)
    {
        $this->addSql('
ALTER TABLE blog_kategori
CHANGE parent parrent SMALLINT NOT NULL
');

        $this->addSql('
update blog_artikel
    set id_user = (
            select old_id from user
            where user.id=blog_artikel.id_user
        )
');
        $this->addSql('ALTER TABLE blog_agenda DROP FOREIGN KEY IF EXISTS FK_B9A26DB67AAAF543');
        $this->addSql('ALTER TABLE blog_agenda DROP FOREIGN KEY IF EXISTS FK_B9A26DB67AAAF543');
        $this->addSql('
ALTER TABLE blog_agenda
    CHANGE tanggal tgl_agenda DATETIME DEFAULT NULL,
    CHANGE koordinator koordinator_kegiatan VARCHAR(50) CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`,
    CHANGE lokasi lokasi_kegiatan VARCHAR(100) CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`,
    CHANGE id_artikel id_artikel INT DEFAULT NULL
');
        $this->addSql('ALTER TABLE blog_agenda ADD CONSTRAINT id_artikel_fk FOREIGN KEY IF NOT EXISTS (id_artikel) REFERENCES blog_artikel (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('DROP INDEX IF EXISTS idx_b9a26db67aaaf543 ON blog_agenda');
        $this->addSql('CREATE INDEX id_artikel_fk ON blog_agenda (id_artikel)');
        $this->addSql('ALTER TABLE blog_agenda ADD CONSTRAINT FK_B9A26DB67AAAF543 FOREIGN KEY IF NOT EXISTS (id_artikel) REFERENCES blog_artikel (id)');
        $this->addSql('ALTER TABLE blog_artikel DROP FOREIGN KEY IF EXISTS FK_48C1E1B098C5FE85');
        $this->addSql('ALTER TABLE blog_artikel DROP FOREIGN KEY IF EXISTS FK_48C1E1B06B3CA4B');
        $this->addSql('DROP INDEX IF EXISTS IDX_48C1E1B098C5FE85 ON blog_artikel');
        $this->addSql('DROP INDEX IF EXISTS IDX_48C1E1B06B3CA4B ON blog_artikel');
        $this->addSql('ALTER TABLE blog_artikel CHANGE id_kategori id_kategori INT NOT NULL, CHANGE enabled enabled INT DEFAULT 1 NOT NULL, CHANGE tgl_upload tgl_upload DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL, CHANGE headline headline INT DEFAULT 0 NOT NULL, CHANGE boleh_komentar boleh_komentar TINYINT(1) DEFAULT \'1\' NOT NULL, CHANGE hit hit INT DEFAULT 0');
        $this->addSql('ALTER TABLE blog_agenda ADD CONSTRAINT id_artikel_fk FOREIGN KEY IF NOT EXISTS (id_artikel) REFERENCES blog_artikel (id) ON UPDATE CASCADE ON DELETE CASCADE');

        $this->renameTable($schema, 'blog_kategori', 'kategori');
        $this->renameTable($schema, 'blog_artikel', 'artikel');
        $this->renameTable($schema, 'blog_agenda', 'agenda');
    }
}

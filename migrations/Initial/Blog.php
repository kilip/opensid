<?php

/*
 * This file is part of the OpenSID project.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace DoctrineMigrations\Initial;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\DBAL\Types\StringType;

class Blog extends Migrator
{
    protected array $methods = [
        'blog',
    ];

    public function blogUp(Schema $schema): void
    {
        if ($schema->getTable('blog_kategori')->hasColumn('parrent')) {
            $this->addSql('
ALTER TABLE blog_kategori
    CHANGE parrent parent SMALLINT NOT NULL,
    CHANGE tipe tipe INT NOT NULL,
    CHANGE urut urut SMALLINT NOT NULL
');
        }

        $idUserType = $schema->getTable('blog_artikel')
            ->getColumn('id_user')->getType();
        if ( ! $idUserType instanceof StringType) {
            $this->addSql('
ALTER TABLE blog_artikel CHANGE id_user id_user VARCHAR(36) DEFAULT NULL
');

            $this->addSql('
UPDATE blog_artikel
    set blog_artikel.id_user=(SELECT id from app_user where blog_artikel.id_user=app_user.old_id)
');
        }
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
        $this->addSql('ALTER TABLE blog_artikel ADD CONSTRAINT FK_48C1E1B06B3CA4B FOREIGN KEY IF NOT EXISTS (id_user) REFERENCES app_user (id)');
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

    public function blogDown(Schema $schema)
    {
        if ($schema->getTable('blog_kategori')->hasColumn('parent')) {
            $this->addSql('
ALTER TABLE blog_kategori
CHANGE parent parrent SMALLINT NOT NULL
');
        }

        $this->addSql('
update blog_artikel
    set id_user = (
            select old_id from app_user
            where app_user.id=blog_artikel.id_user
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
        $this->addSql('
ALTER TABLE blog_artikel
    CHANGE id_kategori id_kategori INT NOT NULL,
    CHANGE enabled enabled INT DEFAULT 1 NOT NULL,
    CHANGE tgl_upload tgl_upload DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL,
    CHANGE headline headline INT DEFAULT 0 NOT NULL,
    CHANGE boleh_komentar boleh_komentar TINYINT(1) DEFAULT \'1\' NOT NULL,
    CHANGE hit hit INT DEFAULT 0'
);
        $this->addSql('
ALTER TABLE blog_agenda
    ADD CONSTRAINT id_artikel_fk
        FOREIGN KEY IF NOT EXISTS (id_artikel)
        REFERENCES blog_artikel (id) ON UPDATE CASCADE ON DELETE CASCADE'
);
    }
}

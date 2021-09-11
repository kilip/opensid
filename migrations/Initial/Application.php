<?php

namespace DoctrineMigrations\Initial;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\DBAL\Types\PhpIntegerMappingType;

class Application extends Migrator
{
    protected array $methods = [
        'config',
        'user'
    ];

    public function userUp(Schema $schema): void
    {
        $this->addSql('# BEGIN USER UP');
        $idType = $schema->getTable('app_user')
            ->getColumn('id')->getType();

        if ($idType instanceof PhpIntegerMappingType) {
            $this->userConvertID($schema);
        }
        $this->addSql('ALTER TABLE app_user DROP FOREIGN KEY IF EXISTS FK_7871BE50FE54D947');
        $this->addSql('DROP INDEX IF EXISTS idx_7871be50fe54d947 ON app_user');
        $this->addSql('CREATE INDEX IF NOT EXISTS IDX_88BDF3E9FE54D947 ON app_user (group_id)');
        $this->addSql('ALTER TABLE app_user ADD CONSTRAINT FK_7871BE50FE54D947 FOREIGN KEY IF NOT EXISTS (group_id) REFERENCES app_group (id)');

        $this->addSql('
ALTER TABLE app_user
    CHANGE active active TINYINT(1) DEFAULT NULL,
    CHANGE foto foto VARCHAR(100) DEFAULT NULL,
    CHANGE session session VARCHAR(40) DEFAULT NULL,
    CHANGE old_id old_id INT DEFAULT NULL
');
        $this->addSql('# END USER UP');
    }

    public function userDown(Schema $schema): void
    {
        $this->addSql('# BEGIN USER DOWN');
        $this->addSql('ALTER TABLE app_user DROP FOREIGN KEY IF EXISTS FK_88BDF3E9FE54D947');
        $this->addSql('DROP INDEX IF EXISTS idx_88bdf3e9fe54d947 ON app_user');
        $this->addSql('CREATE INDEX IF NOT EXISTS IDX_7871BE50FE54D947 ON app_user (group_id)');
        $this->addSql('ALTER TABLE app_user ADD CONSTRAINT FK_88BDF3E9FE54D947 FOREIGN KEY IF NOT EXISTS (group_id) REFERENCES app_user_group (id)');
        $this->addSql('ALTER TABLE app_user CHANGE active active TINYINT(1) DEFAULT \'0\', CHANGE foto foto VARCHAR(100) CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, CHANGE session session VARCHAR(40) CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`');
        $this->addSql('# END USER DOWN');
    }

    private function userConvertID(Schema $schema): void
    {
        $this->addSql('ALTER TABLE app_user_group CHANGE id old_id SMALLINT DEFAULT NULL');
        $this->addSql('ALTER TABLE app_user_group drop primary key');
        $this->addSql('ALTER TABLE app_user CHANGE id old_id INT NOT NULL');
        $this->addSql('ALTER TABLE app_user drop primary key');
        $this->addSql('ALTER TABLE app_user CHANGE id_grup group_id VARCHAR(36) DEFAULT NULL');

        $this->addSql('ALTER TABLE app_user_group add column id varchar(36)');
        $this->addSql('UPDATE app_user_group set id=uuid()');
        $this->addSql('ALTER TABLE app_user_group CHANGE id id varchar(36) NOT NULL PRIMARY KEY');

        $this->addSql('ALTER TABLE app_user add column id varchar(36)');
        $this->addSql('UPDATE app_user set id=uuid()');
        $this->addSql('ALTER TABLE app_user CHANGE id id varchar(36) NOT NULL PRIMARY KEY');
        $query = <<<EOC
update app_user u
set u.group_id = (select id from app_user_group g where u.group_id=g.old_id)
EOC;

        $this->addSql('
ALTER TABLE app_user
    CHANGE active active TINYINT(1) DEFAULT 1,
    CHANGE foto foto VARCHAR(100) DEFAULT NULL,
    CHANGE session session VARCHAR(40) DEFAULT NULL
');

        $this->addSql($query);
    }

    public function configUp(Schema $schema): void
    {
        $this->addSql('# BEGIN CONFIG UP');
        $table = $schema->hasTable('app_config') ? 'app_config':'config';
        if($schema->getTable($table)->hasColumn('nama_camat')){
            return;
        }

        $this->addSql('
ALTER TABLE app_config
    CHANGE nama_kepala_camat nama_camat VARCHAR(100) DEFAULT NULL,
    CHANGE nip_kepala_camat nip_camat VARCHAR(100) DEFAULT NULL,
    CHANGE kode_propinsi kode_provinsi VARCHAR(100) DEFAULT NULL,
    CHANGE nama_propinsi nama_provinsi VARCHAR(100) DEFAULT NULL,
    CHANGE lat latitude VARCHAR(20) DEFAULT NULL,
    CHANGE lng longitude VARCHAR(20) DEFAULT NULL,
    CHANGE map_tipe map_type VARCHAR(20) DEFAULT NULL,
    CHANGE logo logo VARCHAR(100) DEFAULT NULL,
    CHANGE zoom zoom SMALLINT  DEFAULT NULL,
    CHANGE path path LONGTEXT  DEFAULT NULL,
    CHANGE alamat_kantor alamat_kantor VARCHAR(100) DEFAULT NULL,
    CHANGE email_desa email_desa VARCHAR(50) DEFAULT NULL,
    CHANGE telepon telepon VARCHAR(50) DEFAULT NULL,
    CHANGE website website VARCHAR(100) DEFAULT NULL,
    CHANGE kantor_desa kantor_desa VARCHAR(100) DEFAULT NULL,
    CHANGE warna warna VARCHAR(10) DEFAULT NULL
');
        $this->addSql('# END CONFIG UP');
    }

    public function configDown(Schema $schema): void
    {
        $this->addSql('# BEGIN CONFIG DOWN');
        $this->addSql('
ALTER TABLE app_config
    CHANGE logo logo VARCHAR(100) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`,
    CHANGE zoom zoom TINYINT(1) DEFAULT NULL, CHANGE path path TEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`,
    CHANGE alamat_kantor alamat_kantor VARCHAR(200) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`,
    CHANGE email_desa email_desa VARCHAR(50) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`,
    CHANGE telepon telepon VARCHAR(50) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`,
    CHANGE website website VARCHAR(100) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`,
    CHANGE kantor_desa kantor_desa VARCHAR(100) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`,
    CHANGE warna warna VARCHAR(10) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`
');
        if($schema->getTable('app_config')->hasColumn('nama_camat')){
            $this->addSql('
ALTER TABLE app_config
    CHANGE nama_camat nama_kepala_camat VARCHAR(100) CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`,
    CHANGE nip_camat nip_kepala_camat VARCHAR(100) CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`,
    CHANGE nama_provinsi nama_propinsi VARCHAR(100) CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`,
    CHANGE kode_provinsi kode_propinsi VARCHAR(100) CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`,
    CHANGE latitude lat VARCHAR(20) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`,
    CHANGE longitude lng VARCHAR(20) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`,
    CHANGE map_type map_tipe VARCHAR(20) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`
');
        }
        $this->addSql('# END CONFIG DOWN');
    }
}

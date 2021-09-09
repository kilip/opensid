<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210909143204 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        $this->upPertanyaan();

        $this->addSql('alter table analisis_respon add constraint pk_analisis_respon primary key (id_indikator, id_parameter, id_subjek, id_periode)');

        $this->createUUID('analisis_respon_bukti');
        $this->createUUID('analisis_respon_hasil');
        $this->createUUID('detail_log_penduduk');
        $this->createUUID('pertanyaan');
        $this->createUUID('setting_sms');
        $this->createUUID('tweb_penduduk_map');


    }

    public function down(Schema $schema): void
    {
        $this->downPertanyaan();
        $this->dropPrimaryKey('analisis_respon');
        $this->dropPrimaryKey('analisis_respon_bukti');
        $this->dropPrimaryKey('analisis_respon_hasil');

        $this->dropUuid('analisis_respon_bukti');
        $this->dropUuid('analisis_respon_hasil');
        $this->dropUuid('detail_log_penduduk');
        $this->dropUUID('pertanyaan');
        $this->dropUuid('setting_sms');
        $this->dropUuid('tweb_penduduk_map');
    }

    private function createUUID(string $tableName): void
    {
        $this->addSql('alter table '.$tableName.' add column uuid varchar(36)');
        $this->addSql('update '.$tableName.' set uuid=uuid()');
        $this->addSql('alter table '.$tableName.' change uuid uuid varchar(36) not null');
        $this->addSql('alter table '.$tableName.' add primary key (uuid)');
    }

    private function dropPrimaryKey(string $tableName): void
    {
        $this->addSql('alter table '.$tableName.' drop primary key');
    }

    private function dropUuid(string $tableName)
    {
        $this->addSql('alter table '.$tableName.' drop column uuid');
    }

    private function upPertanyaan()
    {
        $this->addSql('alter table pertanyaan change `1` q1 int(2) DEFAULT NULL');
        $this->addSql('alter table pertanyaan change `Pendapatan perkapita perbulan` `pendapatan_perbulan` varchar(84) DEFAULT NULL');
        $this->addSql('alter table pertanyaan change `36` q36 int(2) DEFAULT NULL');
        $this->addSql('alter table pertanyaan change `15` q15 int(2) DEFAULT NULL');
        $this->addSql('alter table pertanyaan change `24` q24 int(2) DEFAULT NULL');
        $this->addSql('alter table pertanyaan change `23` q23 int(2) DEFAULT NULL');
        $this->addSql('alter table pertanyaan change `26` q26 int(2) DEFAULT NULL');
        $this->addSql('alter table pertanyaan change `28` q28 int(2) DEFAULT NULL');
    }

    private function downPertanyaan()
    {
        $this->addSql('alter table pertanyaan change q1 `1` int(2) DEFAULT NULL');
        $this->addSql('alter table pertanyaan change `pendapatan_perbulan` `Pendapatan perkapita perbulan` varchar(84) DEFAULT NULL');
        $this->addSql('alter table pertanyaan change q36 `36` int(2) DEFAULT NULL');
        $this->addSql('alter table pertanyaan change q15 `15` int(2) DEFAULT NULL');
        $this->addSql('alter table pertanyaan change q24 `24` int(2) DEFAULT NULL');
        $this->addSql('alter table pertanyaan change q23 `23` int(2) DEFAULT NULL');
        $this->addSql('alter table pertanyaan change q26 `26` int(2) DEFAULT NULL');
        $this->addSql('alter table pertanyaan change q28 `28` int(2) DEFAULT NULL');
    }

}

<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210910083711 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE agenda DROP FOREIGN KEY id_artikel_fk');
        $this->addSql('ALTER TABLE kelompok_anggota DROP FOREIGN KEY kelompok_anggota_fk');
        $this->addSql('ALTER TABLE keuangan_ref_bank_desa DROP FOREIGN KEY id_keuangan_ref_bank_desa_master_fk');
        $this->addSql('ALTER TABLE keuangan_ref_bel_operasional DROP FOREIGN KEY id_keuangan_ref_bel_operasional_master_fk');
        $this->addSql('ALTER TABLE keuangan_ref_bidang DROP FOREIGN KEY id_keuangan_ref_bidang_master_fk');
        $this->addSql('ALTER TABLE keuangan_ref_bunga DROP FOREIGN KEY id_keuangan_ref_bunga_master_fk');
        $this->addSql('ALTER TABLE keuangan_ref_desa DROP FOREIGN KEY id_keuangan_ref_desa_master_fk');
        $this->addSql('ALTER TABLE keuangan_ref_kecamatan DROP FOREIGN KEY id_keuangan_ref_kecamatan_master_fk');
        $this->addSql('ALTER TABLE keuangan_ref_kegiatan DROP FOREIGN KEY id_keuangan_ref_kegiatan_master_fk');
        $this->addSql('ALTER TABLE keuangan_ref_korolari DROP FOREIGN KEY id_keuangan_ref_korolari_master_fk');
        $this->addSql('ALTER TABLE keuangan_ref_neraca_close DROP FOREIGN KEY id_keuangan_ref_neraca_close_master_fk');
        $this->addSql('ALTER TABLE keuangan_ref_perangkat DROP FOREIGN KEY id_keuangan_ref_perangkat_master_fk');
        $this->addSql('ALTER TABLE keuangan_ref_potongan DROP FOREIGN KEY id_keuangan_ref_potongan_master_fk');
        $this->addSql('ALTER TABLE keuangan_ref_rek1 DROP FOREIGN KEY id_keuangan_ref_rek1_master_fk');
        $this->addSql('ALTER TABLE keuangan_ref_rek2 DROP FOREIGN KEY id_keuangan_ref_rek2_master_fk');
        $this->addSql('ALTER TABLE keuangan_ref_rek3 DROP FOREIGN KEY id_keuangan_ref_rek3_master_fk');
        $this->addSql('ALTER TABLE keuangan_ref_rek4 DROP FOREIGN KEY id_keuangan_ref_rek4_master_fk');
        $this->addSql('ALTER TABLE keuangan_ref_sbu DROP FOREIGN KEY id_keuangan_ref_sbu_master_fk');
        $this->addSql('ALTER TABLE keuangan_ref_sumber DROP FOREIGN KEY id_keuangan_ref_sumber_master_fk');
        $this->addSql('ALTER TABLE keuangan_ta_anggaran DROP FOREIGN KEY id_keuangan_ta_anggaran_master_fk');
        $this->addSql('ALTER TABLE keuangan_ta_anggaran_log DROP FOREIGN KEY id_keuangan_ta_anggaran_log_master_fk');
        $this->addSql('ALTER TABLE keuangan_ta_anggaran_rinci DROP FOREIGN KEY id_keuangan_ta_anggaran_rinci_master_fk');
        $this->addSql('ALTER TABLE keuangan_ta_bidang DROP FOREIGN KEY id_keuangan_ta_bidang_master_fk');
        $this->addSql('ALTER TABLE keuangan_ta_desa DROP FOREIGN KEY id_keuangan_ta_desa_master_fk');
        $this->addSql('ALTER TABLE keuangan_ta_jurnal_umum DROP FOREIGN KEY id_keuangan_ta_jurnal_umum_master_fk');
        $this->addSql('ALTER TABLE keuangan_ta_jurnal_umum_rinci DROP FOREIGN KEY id_keuangan_ta_jurnal_umum_rinci_master_fk');
        $this->addSql('ALTER TABLE keuangan_ta_kegiatan DROP FOREIGN KEY id_keuangan_ta_kegiatan_master_fk');
        $this->addSql('ALTER TABLE keuangan_ta_mutasi DROP FOREIGN KEY id_keuangan_ta_mutasi_master_fk');
        $this->addSql('ALTER TABLE keuangan_ta_pajak DROP FOREIGN KEY id_keuangan_ta_pajak_master_fk');
        $this->addSql('ALTER TABLE keuangan_ta_pajak_rinci DROP FOREIGN KEY id_keuangan_ta_pajak_rinci_master_fk');
        $this->addSql('ALTER TABLE keuangan_ta_pemda DROP FOREIGN KEY id_keuangan_ta_pemda_master_fk');
        $this->addSql('ALTER TABLE keuangan_ta_pencairan DROP FOREIGN KEY id_keuangan_ta_pencairan_master_fk');
        $this->addSql('ALTER TABLE keuangan_ta_perangkat DROP FOREIGN KEY id_keuangan_ta_perangkat_master_fk');
        $this->addSql('ALTER TABLE keuangan_ta_rab DROP FOREIGN KEY id_keuangan_ta_rab_master_fk');
        $this->addSql('ALTER TABLE keuangan_ta_rab_rinci DROP FOREIGN KEY id_keuangan_ta_rab_rinci_master_fk');
        $this->addSql('ALTER TABLE keuangan_ta_rab_sub DROP FOREIGN KEY id_keuangan_ta_rab_sub_master_fk');
        $this->addSql('ALTER TABLE keuangan_ta_rpjm_bidang DROP FOREIGN KEY id_keuangan_ta_rpjm_bidang_master_fk');
        $this->addSql('ALTER TABLE keuangan_ta_rpjm_kegiatan DROP FOREIGN KEY id_keuangan_ta_rpjm_kegiatan_master_fk');
        $this->addSql('ALTER TABLE keuangan_ta_rpjm_misi DROP FOREIGN KEY id_keuangan_ta_rpjm_misi_master_fk');
        $this->addSql('ALTER TABLE keuangan_ta_rpjm_pagu_indikatif DROP FOREIGN KEY id_keuangan_ta_rpjm_pagu_indikatif_master_fk');
        $this->addSql('ALTER TABLE keuangan_ta_rpjm_pagu_tahunan DROP FOREIGN KEY id_keuangan_ta_rpjm_pagu_tahunan_master_fk');
        $this->addSql('ALTER TABLE keuangan_ta_rpjm_sasaran DROP FOREIGN KEY id_keuangan_ta_rpjm_sasaran_master_fk');
        $this->addSql('ALTER TABLE keuangan_ta_rpjm_tujuan DROP FOREIGN KEY id_keuangan_ta_rpjm_tujuan_master_fk');
        $this->addSql('ALTER TABLE keuangan_ta_rpjm_visi DROP FOREIGN KEY id_keuangan_ta_rpjm_visi_master_fk');
        $this->addSql('ALTER TABLE keuangan_ta_saldo_awal DROP FOREIGN KEY id_keuangan_ta_saldo_awal_master_fk');
        $this->addSql('ALTER TABLE keuangan_ta_spj DROP FOREIGN KEY id_keuangan_ta_spj_master_fk');
        $this->addSql('ALTER TABLE keuangan_ta_spj_bukti DROP FOREIGN KEY id_keuangan_ta_spj_bukti_master_fk');
        $this->addSql('ALTER TABLE keuangan_ta_spj_rinci DROP FOREIGN KEY id_keuangan_ta_spj_rinci_master_fk');
        $this->addSql('ALTER TABLE keuangan_ta_spj_sisa DROP FOREIGN KEY id_keuangan_ta_spj_sisa_master_fk');
        $this->addSql('ALTER TABLE keuangan_ta_spjpot DROP FOREIGN KEY id_keuangan_ta_spjpot_master_fk');
        $this->addSql('ALTER TABLE keuangan_ta_spp DROP FOREIGN KEY id_keuangan_ta_spp_master_fk');
        $this->addSql('ALTER TABLE keuangan_ta_spp_rinci DROP FOREIGN KEY id_keuangan_ta_spp_rinci_master_fk');
        $this->addSql('ALTER TABLE keuangan_ta_sppbukti DROP FOREIGN KEY id_keuangan_ta_sppbukti_master_fk');
        $this->addSql('ALTER TABLE keuangan_ta_spppot DROP FOREIGN KEY id_keuangan_ta_spppot_master_fk');
        $this->addSql('ALTER TABLE keuangan_ta_sts DROP FOREIGN KEY id_keuangan_ta_sts_master_fk');
        $this->addSql('ALTER TABLE keuangan_ta_sts_rinci DROP FOREIGN KEY id_keuangan_ta_sts_rinci_master_fk');
        $this->addSql('ALTER TABLE keuangan_ta_tbp DROP FOREIGN KEY id_keuangan_ta_tbp_master_fk');
        $this->addSql('ALTER TABLE keuangan_ta_tbp_rinci DROP FOREIGN KEY id_keuangan_ta_tbp_rinci_master_fk');
        $this->addSql('ALTER TABLE keuangan_ta_triwulan DROP FOREIGN KEY id_keuangan_ta_triwulan_master_fk');
        $this->addSql('ALTER TABLE keuangan_ta_triwulan_rinci DROP FOREIGN KEY id_keuangan_ta_triwulan_rinci_master_fk');
        $this->addSql('ALTER TABLE kontak DROP FOREIGN KEY kontak_ke_tweb_penduduk');
        $this->addSql('ALTER TABLE log_penduduk DROP FOREIGN KEY id_ref_pindah');
        $this->addSql('ALTER TABLE mutasi_cdesa DROP FOREIGN KEY cdesa_mutasi_fk');
        $this->addSql('ALTER TABLE mutasi_inventaris_asset DROP FOREIGN KEY FK_mutasi_inventaris_asset');
        $this->addSql('ALTER TABLE mutasi_inventaris_gedung DROP FOREIGN KEY FK_mutasi_inventaris_gedung');
        $this->addSql('ALTER TABLE mutasi_inventaris_jalan DROP FOREIGN KEY FK_mutasi_inventaris_jalan');
        $this->addSql('ALTER TABLE mutasi_inventaris_peralatan DROP FOREIGN KEY FK_mutasi_inventaris_peralatan');
        $this->addSql('ALTER TABLE mutasi_inventaris_tanah DROP FOREIGN KEY FK_mutasi_inventaris_tanah');
        $this->addSql('ALTER TABLE setting_aplikasi_options DROP FOREIGN KEY id_setting_fk');
        $this->addSql('ALTER TABLE suplemen_terdata DROP FOREIGN KEY suplemen_terdata_ibfk_1');
        $this->addSql('ALTER TABLE syarat_surat DROP FOREIGN KEY id_surat_format');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE agenda ADD CONSTRAINT id_artikel_fk FOREIGN KEY (id_artikel) REFERENCES artikel (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE kelompok_anggota ADD CONSTRAINT kelompok_anggota_fk FOREIGN KEY (id_kelompok) REFERENCES kelompok (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE keuangan_ref_bank_desa ADD CONSTRAINT id_keuangan_ref_bank_desa_master_fk FOREIGN KEY (id_keuangan_master) REFERENCES keuangan_master (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE keuangan_ref_bel_operasional ADD CONSTRAINT id_keuangan_ref_bel_operasional_master_fk FOREIGN KEY (id_keuangan_master) REFERENCES keuangan_master (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE keuangan_ref_bidang ADD CONSTRAINT id_keuangan_ref_bidang_master_fk FOREIGN KEY (id_keuangan_master) REFERENCES keuangan_master (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE keuangan_ref_bunga ADD CONSTRAINT id_keuangan_ref_bunga_master_fk FOREIGN KEY (id_keuangan_master) REFERENCES keuangan_master (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE keuangan_ref_desa ADD CONSTRAINT id_keuangan_ref_desa_master_fk FOREIGN KEY (id_keuangan_master) REFERENCES keuangan_master (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE keuangan_ref_kecamatan ADD CONSTRAINT id_keuangan_ref_kecamatan_master_fk FOREIGN KEY (id_keuangan_master) REFERENCES keuangan_master (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE keuangan_ref_kegiatan ADD CONSTRAINT id_keuangan_ref_kegiatan_master_fk FOREIGN KEY (id_keuangan_master) REFERENCES keuangan_master (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE keuangan_ref_korolari ADD CONSTRAINT id_keuangan_ref_korolari_master_fk FOREIGN KEY (id_keuangan_master) REFERENCES keuangan_master (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE keuangan_ref_neraca_close ADD CONSTRAINT id_keuangan_ref_neraca_close_master_fk FOREIGN KEY (id_keuangan_master) REFERENCES keuangan_master (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE keuangan_ref_perangkat ADD CONSTRAINT id_keuangan_ref_perangkat_master_fk FOREIGN KEY (id_keuangan_master) REFERENCES keuangan_master (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE keuangan_ref_potongan ADD CONSTRAINT id_keuangan_ref_potongan_master_fk FOREIGN KEY (id_keuangan_master) REFERENCES keuangan_master (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE keuangan_ref_rek1 ADD CONSTRAINT id_keuangan_ref_rek1_master_fk FOREIGN KEY (id_keuangan_master) REFERENCES keuangan_master (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE keuangan_ref_rek2 ADD CONSTRAINT id_keuangan_ref_rek2_master_fk FOREIGN KEY (id_keuangan_master) REFERENCES keuangan_master (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE keuangan_ref_rek3 ADD CONSTRAINT id_keuangan_ref_rek3_master_fk FOREIGN KEY (id_keuangan_master) REFERENCES keuangan_master (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE keuangan_ref_rek4 ADD CONSTRAINT id_keuangan_ref_rek4_master_fk FOREIGN KEY (id_keuangan_master) REFERENCES keuangan_master (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE keuangan_ref_sbu ADD CONSTRAINT id_keuangan_ref_sbu_master_fk FOREIGN KEY (id_keuangan_master) REFERENCES keuangan_master (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE keuangan_ref_sumber ADD CONSTRAINT id_keuangan_ref_sumber_master_fk FOREIGN KEY (id_keuangan_master) REFERENCES keuangan_master (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE keuangan_ta_anggaran ADD CONSTRAINT id_keuangan_ta_anggaran_master_fk FOREIGN KEY (id_keuangan_master) REFERENCES keuangan_master (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE keuangan_ta_anggaran_log ADD CONSTRAINT id_keuangan_ta_anggaran_log_master_fk FOREIGN KEY (id_keuangan_master) REFERENCES keuangan_master (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE keuangan_ta_anggaran_rinci ADD CONSTRAINT id_keuangan_ta_anggaran_rinci_master_fk FOREIGN KEY (id_keuangan_master) REFERENCES keuangan_master (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE keuangan_ta_bidang ADD CONSTRAINT id_keuangan_ta_bidang_master_fk FOREIGN KEY (id_keuangan_master) REFERENCES keuangan_master (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE keuangan_ta_desa ADD CONSTRAINT id_keuangan_ta_desa_master_fk FOREIGN KEY (id_keuangan_master) REFERENCES keuangan_master (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE keuangan_ta_jurnal_umum ADD CONSTRAINT id_keuangan_ta_jurnal_umum_master_fk FOREIGN KEY (id_keuangan_master) REFERENCES keuangan_master (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE keuangan_ta_jurnal_umum_rinci ADD CONSTRAINT id_keuangan_ta_jurnal_umum_rinci_master_fk FOREIGN KEY (id_keuangan_master) REFERENCES keuangan_master (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE keuangan_ta_kegiatan ADD CONSTRAINT id_keuangan_ta_kegiatan_master_fk FOREIGN KEY (id_keuangan_master) REFERENCES keuangan_master (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE keuangan_ta_mutasi ADD CONSTRAINT id_keuangan_ta_mutasi_master_fk FOREIGN KEY (id_keuangan_master) REFERENCES keuangan_master (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE keuangan_ta_pajak ADD CONSTRAINT id_keuangan_ta_pajak_master_fk FOREIGN KEY (id_keuangan_master) REFERENCES keuangan_master (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE keuangan_ta_pajak_rinci ADD CONSTRAINT id_keuangan_ta_pajak_rinci_master_fk FOREIGN KEY (id_keuangan_master) REFERENCES keuangan_master (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE keuangan_ta_pemda ADD CONSTRAINT id_keuangan_ta_pemda_master_fk FOREIGN KEY (id_keuangan_master) REFERENCES keuangan_master (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE keuangan_ta_pencairan ADD CONSTRAINT id_keuangan_ta_pencairan_master_fk FOREIGN KEY (id_keuangan_master) REFERENCES keuangan_master (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE keuangan_ta_perangkat ADD CONSTRAINT id_keuangan_ta_perangkat_master_fk FOREIGN KEY (id_keuangan_master) REFERENCES keuangan_master (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE keuangan_ta_rab ADD CONSTRAINT id_keuangan_ta_rab_master_fk FOREIGN KEY (id_keuangan_master) REFERENCES keuangan_master (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE keuangan_ta_rab_rinci ADD CONSTRAINT id_keuangan_ta_rab_rinci_master_fk FOREIGN KEY (id_keuangan_master) REFERENCES keuangan_master (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE keuangan_ta_rab_sub ADD CONSTRAINT id_keuangan_ta_rab_sub_master_fk FOREIGN KEY (id_keuangan_master) REFERENCES keuangan_master (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE keuangan_ta_rpjm_bidang ADD CONSTRAINT id_keuangan_ta_rpjm_bidang_master_fk FOREIGN KEY (id_keuangan_master) REFERENCES keuangan_master (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE keuangan_ta_rpjm_kegiatan ADD CONSTRAINT id_keuangan_ta_rpjm_kegiatan_master_fk FOREIGN KEY (id_keuangan_master) REFERENCES keuangan_master (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE keuangan_ta_rpjm_misi ADD CONSTRAINT id_keuangan_ta_rpjm_misi_master_fk FOREIGN KEY (id_keuangan_master) REFERENCES keuangan_master (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE keuangan_ta_rpjm_pagu_indikatif ADD CONSTRAINT id_keuangan_ta_rpjm_pagu_indikatif_master_fk FOREIGN KEY (id_keuangan_master) REFERENCES keuangan_master (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE keuangan_ta_rpjm_pagu_tahunan ADD CONSTRAINT id_keuangan_ta_rpjm_pagu_tahunan_master_fk FOREIGN KEY (id_keuangan_master) REFERENCES keuangan_master (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE keuangan_ta_rpjm_sasaran ADD CONSTRAINT id_keuangan_ta_rpjm_sasaran_master_fk FOREIGN KEY (id_keuangan_master) REFERENCES keuangan_master (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE keuangan_ta_rpjm_tujuan ADD CONSTRAINT id_keuangan_ta_rpjm_tujuan_master_fk FOREIGN KEY (id_keuangan_master) REFERENCES keuangan_master (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE keuangan_ta_rpjm_visi ADD CONSTRAINT id_keuangan_ta_rpjm_visi_master_fk FOREIGN KEY (id_keuangan_master) REFERENCES keuangan_master (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE keuangan_ta_saldo_awal ADD CONSTRAINT id_keuangan_ta_saldo_awal_master_fk FOREIGN KEY (id_keuangan_master) REFERENCES keuangan_master (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE keuangan_ta_spj ADD CONSTRAINT id_keuangan_ta_spj_master_fk FOREIGN KEY (id_keuangan_master) REFERENCES keuangan_master (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE keuangan_ta_spj_bukti ADD CONSTRAINT id_keuangan_ta_spj_bukti_master_fk FOREIGN KEY (id_keuangan_master) REFERENCES keuangan_master (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE keuangan_ta_spj_rinci ADD CONSTRAINT id_keuangan_ta_spj_rinci_master_fk FOREIGN KEY (id_keuangan_master) REFERENCES keuangan_master (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE keuangan_ta_spj_sisa ADD CONSTRAINT id_keuangan_ta_spj_sisa_master_fk FOREIGN KEY (id_keuangan_master) REFERENCES keuangan_master (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE keuangan_ta_spjpot ADD CONSTRAINT id_keuangan_ta_spjpot_master_fk FOREIGN KEY (id_keuangan_master) REFERENCES keuangan_master (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE keuangan_ta_spp ADD CONSTRAINT id_keuangan_ta_spp_master_fk FOREIGN KEY (id_keuangan_master) REFERENCES keuangan_master (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE keuangan_ta_spp_rinci ADD CONSTRAINT id_keuangan_ta_spp_rinci_master_fk FOREIGN KEY (id_keuangan_master) REFERENCES keuangan_master (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE keuangan_ta_sppbukti ADD CONSTRAINT id_keuangan_ta_sppbukti_master_fk FOREIGN KEY (id_keuangan_master) REFERENCES keuangan_master (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE keuangan_ta_spppot ADD CONSTRAINT id_keuangan_ta_spppot_master_fk FOREIGN KEY (id_keuangan_master) REFERENCES keuangan_master (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE keuangan_ta_sts ADD CONSTRAINT id_keuangan_ta_sts_master_fk FOREIGN KEY (id_keuangan_master) REFERENCES keuangan_master (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE keuangan_ta_sts_rinci ADD CONSTRAINT id_keuangan_ta_sts_rinci_master_fk FOREIGN KEY (id_keuangan_master) REFERENCES keuangan_master (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE keuangan_ta_tbp ADD CONSTRAINT id_keuangan_ta_tbp_master_fk FOREIGN KEY (id_keuangan_master) REFERENCES keuangan_master (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE keuangan_ta_tbp_rinci ADD CONSTRAINT id_keuangan_ta_tbp_rinci_master_fk FOREIGN KEY (id_keuangan_master) REFERENCES keuangan_master (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE keuangan_ta_triwulan ADD CONSTRAINT id_keuangan_ta_triwulan_master_fk FOREIGN KEY (id_keuangan_master) REFERENCES keuangan_master (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE keuangan_ta_triwulan_rinci ADD CONSTRAINT id_keuangan_ta_triwulan_rinci_master_fk FOREIGN KEY (id_keuangan_master) REFERENCES keuangan_master (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE kontak ADD CONSTRAINT kontak_ke_tweb_penduduk FOREIGN KEY (id_pend) REFERENCES tweb_penduduk (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE log_penduduk ADD CONSTRAINT id_ref_pindah FOREIGN KEY (ref_pindah) REFERENCES ref_pindah (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE mutasi_cdesa ADD CONSTRAINT cdesa_mutasi_fk FOREIGN KEY (id_cdesa_masuk) REFERENCES cdesa (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE setting_aplikasi_options ADD CONSTRAINT id_setting_fk FOREIGN KEY (id_setting) REFERENCES setting_aplikasi (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE suplemen_terdata ADD CONSTRAINT suplemen_terdata_ibfk_1 FOREIGN KEY (id_suplemen) REFERENCES suplemen (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE syarat_surat ADD CONSTRAINT id_surat_format FOREIGN KEY (surat_format_id) REFERENCES tweb_surat_format (id) ON UPDATE CASCADE ON DELETE CASCADE');
    }
}

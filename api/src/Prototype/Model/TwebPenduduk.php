<?php

/*
 * This file is part of the OpenSID project.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace OpenSID\Prototype\Model;

class TwebPenduduk
{
    private $nama;

    private $nik;

    private $idKk;

    private $kkLevel;

    private $idRtm;

    private $rtmLevel;

    private $sex;

    private $tempatlahir;

    private $tanggallahir;

    private $agamaId;

    private $pendidikanKkId;

    private $pendidikanSedangId;

    private $pekerjaanId;

    private $statusKawin;

    private $warganegaraId;

    private $dokumenPasport;

    private $dokumenKitas;

    private $ayahNik;

    private $ibuNik;

    private $namaAyah;

    private $namaIbu;

    private $foto;

    private $golonganDarahId;

    private $idCluster;

    private $status;

    private $alamatSebelumnya;

    private $alamatSekarang;

    private $statusDasar;

    private $hamil;

    private $cacatId;

    private $sakitMenahunId;

    private $aktaLahir;

    private $aktaPerkawinan;

    private $tanggalperkawinan;

    private $aktaPerceraian;

    private $tanggalperceraian;

    private $caraKbId;

    private $telepon;

    private $tanggalAkhirPaspor;

    private $noKkSebelumnya;

    private $ktpEl;

    private $statusRekam;

    private $waktuLahir;

    private $tempatDilahirkan;

    private $jenisKelahiran;

    private $kelahiranAnakKe;

    private $penolongKelahiran;

    private $beratLahir;

    private $panjangLahir;

    private $tagIdCard;

    private $createdAt;

    private $createdBy;

    private $updatedAt;

    private $updatedBy;

    private $idAsuransi;

    private $noAsuransi;

    private $email;

    private $bahasaId;

    private $ket;

    private $id;

    public function getNama(): ?string
    {
        return $this->nama;
    }

    public function setNama(string $nama): self
    {
        $this->nama = $nama;

        return $this;
    }

    public function getNik(): ?string
    {
        return $this->nik;
    }

    public function setNik(string $nik): self
    {
        $this->nik = $nik;

        return $this;
    }

    public function getIdKk(): ?int
    {
        return $this->idKk;
    }

    public function setIdKk(?int $idKk): self
    {
        $this->idKk = $idKk;

        return $this;
    }

    public function getKkLevel()
    {
        return $this->kkLevel;
    }

    public function setKkLevel($kkLevel): self
    {
        $this->kkLevel = $kkLevel;

        return $this;
    }

    public function getIdRtm(): ?string
    {
        return $this->idRtm;
    }

    public function setIdRtm(?string $idRtm): self
    {
        $this->idRtm = $idRtm;

        return $this;
    }

    public function getRtmLevel(): ?int
    {
        return $this->rtmLevel;
    }

    public function setRtmLevel(?int $rtmLevel): self
    {
        $this->rtmLevel = $rtmLevel;

        return $this;
    }

    public function getSex()
    {
        return $this->sex;
    }

    public function setSex($sex): self
    {
        $this->sex = $sex;

        return $this;
    }

    public function getTempatlahir(): ?string
    {
        return $this->tempatlahir;
    }

    public function setTempatlahir(?string $tempatlahir): self
    {
        $this->tempatlahir = $tempatlahir;

        return $this;
    }

    public function getTanggallahir(): ?\DateTimeInterface
    {
        return $this->tanggallahir;
    }

    public function setTanggallahir(?\DateTimeInterface $tanggallahir): self
    {
        $this->tanggallahir = $tanggallahir;

        return $this;
    }

    public function getAgamaId(): ?int
    {
        return $this->agamaId;
    }

    public function setAgamaId(?int $agamaId): self
    {
        $this->agamaId = $agamaId;

        return $this;
    }

    public function getPendidikanKkId(): ?int
    {
        return $this->pendidikanKkId;
    }

    public function setPendidikanKkId(?int $pendidikanKkId): self
    {
        $this->pendidikanKkId = $pendidikanKkId;

        return $this;
    }

    public function getPendidikanSedangId(): ?int
    {
        return $this->pendidikanSedangId;
    }

    public function setPendidikanSedangId(?int $pendidikanSedangId): self
    {
        $this->pendidikanSedangId = $pendidikanSedangId;

        return $this;
    }

    public function getPekerjaanId(): ?int
    {
        return $this->pekerjaanId;
    }

    public function setPekerjaanId(?int $pekerjaanId): self
    {
        $this->pekerjaanId = $pekerjaanId;

        return $this;
    }

    public function getStatusKawin()
    {
        return $this->statusKawin;
    }

    public function setStatusKawin($statusKawin): self
    {
        $this->statusKawin = $statusKawin;

        return $this;
    }

    public function getWarganegaraId()
    {
        return $this->warganegaraId;
    }

    public function setWarganegaraId($warganegaraId): self
    {
        $this->warganegaraId = $warganegaraId;

        return $this;
    }

    public function getDokumenPasport(): ?string
    {
        return $this->dokumenPasport;
    }

    public function setDokumenPasport(?string $dokumenPasport): self
    {
        $this->dokumenPasport = $dokumenPasport;

        return $this;
    }

    public function getDokumenKitas(): ?string
    {
        return $this->dokumenKitas;
    }

    public function setDokumenKitas(?string $dokumenKitas): self
    {
        $this->dokumenKitas = $dokumenKitas;

        return $this;
    }

    public function getAyahNik(): ?string
    {
        return $this->ayahNik;
    }

    public function setAyahNik(?string $ayahNik): self
    {
        $this->ayahNik = $ayahNik;

        return $this;
    }

    public function getIbuNik(): ?string
    {
        return $this->ibuNik;
    }

    public function setIbuNik(?string $ibuNik): self
    {
        $this->ibuNik = $ibuNik;

        return $this;
    }

    public function getNamaAyah(): ?string
    {
        return $this->namaAyah;
    }

    public function setNamaAyah(?string $namaAyah): self
    {
        $this->namaAyah = $namaAyah;

        return $this;
    }

    public function getNamaIbu(): ?string
    {
        return $this->namaIbu;
    }

    public function setNamaIbu(?string $namaIbu): self
    {
        $this->namaIbu = $namaIbu;

        return $this;
    }

    public function getFoto(): ?string
    {
        return $this->foto;
    }

    public function setFoto(?string $foto): self
    {
        $this->foto = $foto;

        return $this;
    }

    public function getGolonganDarahId(): ?int
    {
        return $this->golonganDarahId;
    }

    public function setGolonganDarahId(?int $golonganDarahId): self
    {
        $this->golonganDarahId = $golonganDarahId;

        return $this;
    }

    public function getIdCluster(): ?int
    {
        return $this->idCluster;
    }

    public function setIdCluster(int $idCluster): self
    {
        $this->idCluster = $idCluster;

        return $this;
    }

    public function getStatus(): ?int
    {
        return $this->status;
    }

    public function setStatus(?int $status): self
    {
        $this->status = $status;

        return $this;
    }

    public function getAlamatSebelumnya(): ?string
    {
        return $this->alamatSebelumnya;
    }

    public function setAlamatSebelumnya(?string $alamatSebelumnya): self
    {
        $this->alamatSebelumnya = $alamatSebelumnya;

        return $this;
    }

    public function getAlamatSekarang(): ?string
    {
        return $this->alamatSekarang;
    }

    public function setAlamatSekarang(?string $alamatSekarang): self
    {
        $this->alamatSekarang = $alamatSekarang;

        return $this;
    }

    public function getStatusDasar()
    {
        return $this->statusDasar;
    }

    public function setStatusDasar($statusDasar): self
    {
        $this->statusDasar = $statusDasar;

        return $this;
    }

    public function getHamil(): ?int
    {
        return $this->hamil;
    }

    public function setHamil(?int $hamil): self
    {
        $this->hamil = $hamil;

        return $this;
    }

    public function getCacatId(): ?int
    {
        return $this->cacatId;
    }

    public function setCacatId(?int $cacatId): self
    {
        $this->cacatId = $cacatId;

        return $this;
    }

    public function getSakitMenahunId(): ?int
    {
        return $this->sakitMenahunId;
    }

    public function setSakitMenahunId(?int $sakitMenahunId): self
    {
        $this->sakitMenahunId = $sakitMenahunId;

        return $this;
    }

    public function getAktaLahir(): ?string
    {
        return $this->aktaLahir;
    }

    public function setAktaLahir(?string $aktaLahir): self
    {
        $this->aktaLahir = $aktaLahir;

        return $this;
    }

    public function getAktaPerkawinan(): ?string
    {
        return $this->aktaPerkawinan;
    }

    public function setAktaPerkawinan(?string $aktaPerkawinan): self
    {
        $this->aktaPerkawinan = $aktaPerkawinan;

        return $this;
    }

    public function getTanggalperkawinan(): ?\DateTimeInterface
    {
        return $this->tanggalperkawinan;
    }

    public function setTanggalperkawinan(?\DateTimeInterface $tanggalperkawinan): self
    {
        $this->tanggalperkawinan = $tanggalperkawinan;

        return $this;
    }

    public function getAktaPerceraian(): ?string
    {
        return $this->aktaPerceraian;
    }

    public function setAktaPerceraian(?string $aktaPerceraian): self
    {
        $this->aktaPerceraian = $aktaPerceraian;

        return $this;
    }

    public function getTanggalperceraian(): ?\DateTimeInterface
    {
        return $this->tanggalperceraian;
    }

    public function setTanggalperceraian(?\DateTimeInterface $tanggalperceraian): self
    {
        $this->tanggalperceraian = $tanggalperceraian;

        return $this;
    }

    public function getCaraKbId()
    {
        return $this->caraKbId;
    }

    public function setCaraKbId($caraKbId): self
    {
        $this->caraKbId = $caraKbId;

        return $this;
    }

    public function getTelepon(): ?string
    {
        return $this->telepon;
    }

    public function setTelepon(?string $telepon): self
    {
        $this->telepon = $telepon;

        return $this;
    }

    public function getTanggalAkhirPaspor(): ?\DateTimeInterface
    {
        return $this->tanggalAkhirPaspor;
    }

    public function setTanggalAkhirPaspor(?\DateTimeInterface $tanggalAkhirPaspor): self
    {
        $this->tanggalAkhirPaspor = $tanggalAkhirPaspor;

        return $this;
    }

    public function getNoKkSebelumnya(): ?string
    {
        return $this->noKkSebelumnya;
    }

    public function setNoKkSebelumnya(?string $noKkSebelumnya): self
    {
        $this->noKkSebelumnya = $noKkSebelumnya;

        return $this;
    }

    public function getKtpEl()
    {
        return $this->ktpEl;
    }

    public function setKtpEl($ktpEl): self
    {
        $this->ktpEl = $ktpEl;

        return $this;
    }

    public function getStatusRekam()
    {
        return $this->statusRekam;
    }

    public function setStatusRekam($statusRekam): self
    {
        $this->statusRekam = $statusRekam;

        return $this;
    }

    public function getWaktuLahir(): ?string
    {
        return $this->waktuLahir;
    }

    public function setWaktuLahir(?string $waktuLahir): self
    {
        $this->waktuLahir = $waktuLahir;

        return $this;
    }

    public function getTempatDilahirkan()
    {
        return $this->tempatDilahirkan;
    }

    public function setTempatDilahirkan($tempatDilahirkan): self
    {
        $this->tempatDilahirkan = $tempatDilahirkan;

        return $this;
    }

    public function getJenisKelahiran()
    {
        return $this->jenisKelahiran;
    }

    public function setJenisKelahiran($jenisKelahiran): self
    {
        $this->jenisKelahiran = $jenisKelahiran;

        return $this;
    }

    public function getKelahiranAnakKe()
    {
        return $this->kelahiranAnakKe;
    }

    public function setKelahiranAnakKe($kelahiranAnakKe): self
    {
        $this->kelahiranAnakKe = $kelahiranAnakKe;

        return $this;
    }

    public function getPenolongKelahiran()
    {
        return $this->penolongKelahiran;
    }

    public function setPenolongKelahiran($penolongKelahiran): self
    {
        $this->penolongKelahiran = $penolongKelahiran;

        return $this;
    }

    public function getBeratLahir(): ?int
    {
        return $this->beratLahir;
    }

    public function setBeratLahir(?int $beratLahir): self
    {
        $this->beratLahir = $beratLahir;

        return $this;
    }

    public function getPanjangLahir(): ?string
    {
        return $this->panjangLahir;
    }

    public function setPanjangLahir(?string $panjangLahir): self
    {
        $this->panjangLahir = $panjangLahir;

        return $this;
    }

    public function getTagIdCard(): ?string
    {
        return $this->tagIdCard;
    }

    public function setTagIdCard(?string $tagIdCard): self
    {
        $this->tagIdCard = $tagIdCard;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeInterface $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getCreatedBy(): ?int
    {
        return $this->createdBy;
    }

    public function setCreatedBy(int $createdBy): self
    {
        $this->createdBy = $createdBy;

        return $this;
    }

    public function getUpdatedAt(): ?\DateTimeInterface
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(\DateTimeInterface $updatedAt): self
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    public function getUpdatedBy(): ?int
    {
        return $this->updatedBy;
    }

    public function setUpdatedBy(?int $updatedBy): self
    {
        $this->updatedBy = $updatedBy;

        return $this;
    }

    public function getIdAsuransi()
    {
        return $this->idAsuransi;
    }

    public function setIdAsuransi($idAsuransi): self
    {
        $this->idAsuransi = $idAsuransi;

        return $this;
    }

    public function getNoAsuransi(): ?string
    {
        return $this->noAsuransi;
    }

    public function setNoAsuransi(?string $noAsuransi): self
    {
        $this->noAsuransi = $noAsuransi;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getBahasaId(): ?int
    {
        return $this->bahasaId;
    }

    public function setBahasaId(?int $bahasaId): self
    {
        $this->bahasaId = $bahasaId;

        return $this;
    }

    public function getKet(): ?string
    {
        return $this->ket;
    }

    public function setKet(?string $ket): self
    {
        $this->ket = $ket;

        return $this;
    }

    public function getId(): ?int
    {
        return $this->id;
    }
}

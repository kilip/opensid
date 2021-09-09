<?php

namespace OpenSID\Prototype\Model;

class KeuanganTaRpjmPaguTahunan
{
    private $kdDesa;

    private $kdKeg;

    private $kdTahun;

    private $kdSumber;

    private $biaya;

    private $volume;

    private $satuan;

    private $lokasiSpesifik;

    private $jmlSasPria;

    private $jmlSasWanita;

    private $jmlSasArtm;

    private $waktu;

    private $mulai;

    private $selesai;

    private $polaKegiatan;

    private $pelaksana;

    private $noId;

    private $id;

    private $idKeuanganMaster;

    public function getKdDesa(): ?string
    {
        return $this->kdDesa;
    }

    public function setKdDesa(string $kdDesa): self
    {
        $this->kdDesa = $kdDesa;

        return $this;
    }

    public function getKdKeg(): ?string
    {
        return $this->kdKeg;
    }

    public function setKdKeg(string $kdKeg): self
    {
        $this->kdKeg = $kdKeg;

        return $this;
    }

    public function getKdTahun(): ?string
    {
        return $this->kdTahun;
    }

    public function setKdTahun(string $kdTahun): self
    {
        $this->kdTahun = $kdTahun;

        return $this;
    }

    public function getKdSumber(): ?string
    {
        return $this->kdSumber;
    }

    public function setKdSumber(string $kdSumber): self
    {
        $this->kdSumber = $kdSumber;

        return $this;
    }

    public function getBiaya(): ?string
    {
        return $this->biaya;
    }

    public function setBiaya(string $biaya): self
    {
        $this->biaya = $biaya;

        return $this;
    }

    public function getVolume(): ?string
    {
        return $this->volume;
    }

    public function setVolume(string $volume): self
    {
        $this->volume = $volume;

        return $this;
    }

    public function getSatuan(): ?string
    {
        return $this->satuan;
    }

    public function setSatuan(string $satuan): self
    {
        $this->satuan = $satuan;

        return $this;
    }

    public function getLokasiSpesifik(): ?string
    {
        return $this->lokasiSpesifik;
    }

    public function setLokasiSpesifik(string $lokasiSpesifik): self
    {
        $this->lokasiSpesifik = $lokasiSpesifik;

        return $this;
    }

    public function getJmlSasPria(): ?string
    {
        return $this->jmlSasPria;
    }

    public function setJmlSasPria(string $jmlSasPria): self
    {
        $this->jmlSasPria = $jmlSasPria;

        return $this;
    }

    public function getJmlSasWanita(): ?string
    {
        return $this->jmlSasWanita;
    }

    public function setJmlSasWanita(string $jmlSasWanita): self
    {
        $this->jmlSasWanita = $jmlSasWanita;

        return $this;
    }

    public function getJmlSasArtm(): ?string
    {
        return $this->jmlSasArtm;
    }

    public function setJmlSasArtm(string $jmlSasArtm): self
    {
        $this->jmlSasArtm = $jmlSasArtm;

        return $this;
    }

    public function getWaktu(): ?string
    {
        return $this->waktu;
    }

    public function setWaktu(string $waktu): self
    {
        $this->waktu = $waktu;

        return $this;
    }

    public function getMulai(): ?string
    {
        return $this->mulai;
    }

    public function setMulai(string $mulai): self
    {
        $this->mulai = $mulai;

        return $this;
    }

    public function getSelesai(): ?string
    {
        return $this->selesai;
    }

    public function setSelesai(string $selesai): self
    {
        $this->selesai = $selesai;

        return $this;
    }

    public function getPolaKegiatan(): ?string
    {
        return $this->polaKegiatan;
    }

    public function setPolaKegiatan(string $polaKegiatan): self
    {
        $this->polaKegiatan = $polaKegiatan;

        return $this;
    }

    public function getPelaksana(): ?string
    {
        return $this->pelaksana;
    }

    public function setPelaksana(string $pelaksana): self
    {
        $this->pelaksana = $pelaksana;

        return $this;
    }

    public function getNoId(): ?string
    {
        return $this->noId;
    }

    public function setNoId(?string $noId): self
    {
        $this->noId = $noId;

        return $this;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdKeuanganMaster(): ?KeuanganMaster
    {
        return $this->idKeuanganMaster;
    }

    public function setIdKeuanganMaster(?KeuanganMaster $idKeuanganMaster): self
    {
        $this->idKeuanganMaster = $idKeuanganMaster;

        return $this;
    }
}

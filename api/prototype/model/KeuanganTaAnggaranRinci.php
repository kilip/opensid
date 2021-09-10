<?php

namespace OpenSID\Prototype\Model;

class KeuanganTaAnggaranRinci
{
    private $kdposting;

    private $tahun;

    private $kdDesa;

    private $kdKeg;

    private $kdRincian;

    private $kdSubrinci;

    private $noUrut;

    private $uraian;

    private $sumberdana;

    private $jmlsatuan;

    private $hrgsatuan;

    private $satuan;

    private $anggaran;

    private $jmlsatuanpak;

    private $hrgsatuanpak;

    private $anggaranstlhpak;

    private $anggaranpak;

    private $id;

    private $idKeuanganMaster;

    public function getKdposting(): ?string
    {
        return $this->kdposting;
    }

    public function setKdposting(string $kdposting): self
    {
        $this->kdposting = $kdposting;

        return $this;
    }

    public function getTahun(): ?string
    {
        return $this->tahun;
    }

    public function setTahun(string $tahun): self
    {
        $this->tahun = $tahun;

        return $this;
    }

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

    public function getKdRincian(): ?string
    {
        return $this->kdRincian;
    }

    public function setKdRincian(string $kdRincian): self
    {
        $this->kdRincian = $kdRincian;

        return $this;
    }

    public function getKdSubrinci(): ?string
    {
        return $this->kdSubrinci;
    }

    public function setKdSubrinci(string $kdSubrinci): self
    {
        $this->kdSubrinci = $kdSubrinci;

        return $this;
    }

    public function getNoUrut(): ?string
    {
        return $this->noUrut;
    }

    public function setNoUrut(string $noUrut): self
    {
        $this->noUrut = $noUrut;

        return $this;
    }

    public function getUraian(): ?string
    {
        return $this->uraian;
    }

    public function setUraian(string $uraian): self
    {
        $this->uraian = $uraian;

        return $this;
    }

    public function getSumberdana(): ?string
    {
        return $this->sumberdana;
    }

    public function setSumberdana(string $sumberdana): self
    {
        $this->sumberdana = $sumberdana;

        return $this;
    }

    public function getJmlsatuan(): ?string
    {
        return $this->jmlsatuan;
    }

    public function setJmlsatuan(string $jmlsatuan): self
    {
        $this->jmlsatuan = $jmlsatuan;

        return $this;
    }

    public function getHrgsatuan(): ?string
    {
        return $this->hrgsatuan;
    }

    public function setHrgsatuan(string $hrgsatuan): self
    {
        $this->hrgsatuan = $hrgsatuan;

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

    public function getAnggaran(): ?string
    {
        return $this->anggaran;
    }

    public function setAnggaran(string $anggaran): self
    {
        $this->anggaran = $anggaran;

        return $this;
    }

    public function getJmlsatuanpak(): ?string
    {
        return $this->jmlsatuanpak;
    }

    public function setJmlsatuanpak(string $jmlsatuanpak): self
    {
        $this->jmlsatuanpak = $jmlsatuanpak;

        return $this;
    }

    public function getHrgsatuanpak(): ?string
    {
        return $this->hrgsatuanpak;
    }

    public function setHrgsatuanpak(string $hrgsatuanpak): self
    {
        $this->hrgsatuanpak = $hrgsatuanpak;

        return $this;
    }

    public function getAnggaranstlhpak(): ?string
    {
        return $this->anggaranstlhpak;
    }

    public function setAnggaranstlhpak(string $anggaranstlhpak): self
    {
        $this->anggaranstlhpak = $anggaranstlhpak;

        return $this;
    }

    public function getAnggaranpak(): ?string
    {
        return $this->anggaranpak;
    }

    public function setAnggaranpak(string $anggaranpak): self
    {
        $this->anggaranpak = $anggaranpak;

        return $this;
    }

    public function getId(): ?string
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

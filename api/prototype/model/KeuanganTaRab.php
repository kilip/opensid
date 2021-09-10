<?php

namespace OpenSID\Prototype\Model;

class KeuanganTaRab
{
    private $tahun;

    private $kdDesa;

    private $kdKeg;

    private $kdRincian;

    private $anggaran;

    private $anggaranpak;

    private $anggaranstlhpak;

    private $kdSubrinci;

    private $id;

    private $idKeuanganMaster;

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

    public function getAnggaran(): ?string
    {
        return $this->anggaran;
    }

    public function setAnggaran(string $anggaran): self
    {
        $this->anggaran = $anggaran;

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

    public function getAnggaranstlhpak(): ?string
    {
        return $this->anggaranstlhpak;
    }

    public function setAnggaranstlhpak(string $anggaranstlhpak): self
    {
        $this->anggaranstlhpak = $anggaranstlhpak;

        return $this;
    }

    public function getKdSubrinci(): ?string
    {
        return $this->kdSubrinci;
    }

    public function setKdSubrinci(?string $kdSubrinci): self
    {
        $this->kdSubrinci = $kdSubrinci;

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

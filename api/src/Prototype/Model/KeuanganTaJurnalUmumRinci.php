<?php

namespace OpenSID\Prototype\Model;

class KeuanganTaJurnalUmumRinci
{
    private $tahun;

    private $nobukti;

    private $kdKeg;

    private $rinciansd;

    private $noid;

    private $kdDesa;

    private $akun;

    private $kdRincian;

    private $sumberdana;

    private $dk;

    private $debet;

    private $kredit;

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

    public function getNobukti(): ?string
    {
        return $this->nobukti;
    }

    public function setNobukti(string $nobukti): self
    {
        $this->nobukti = $nobukti;

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

    public function getRinciansd(): ?string
    {
        return $this->rinciansd;
    }

    public function setRinciansd(string $rinciansd): self
    {
        $this->rinciansd = $rinciansd;

        return $this;
    }

    public function getNoid(): ?string
    {
        return $this->noid;
    }

    public function setNoid(string $noid): self
    {
        $this->noid = $noid;

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

    public function getAkun(): ?string
    {
        return $this->akun;
    }

    public function setAkun(string $akun): self
    {
        $this->akun = $akun;

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

    public function getSumberdana(): ?string
    {
        return $this->sumberdana;
    }

    public function setSumberdana(string $sumberdana): self
    {
        $this->sumberdana = $sumberdana;

        return $this;
    }

    public function getDk(): ?string
    {
        return $this->dk;
    }

    public function setDk(string $dk): self
    {
        $this->dk = $dk;

        return $this;
    }

    public function getDebet(): ?string
    {
        return $this->debet;
    }

    public function setDebet(string $debet): self
    {
        $this->debet = $debet;

        return $this;
    }

    public function getKredit(): ?string
    {
        return $this->kredit;
    }

    public function setKredit(string $kredit): self
    {
        $this->kredit = $kredit;

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

<?php

namespace OpenSID\Prototype\Model;

class KeuanganTaJurnalUmum
{
    private $tahun;

    private $kdbuku;

    private $kdDesa;

    private $tanggal;

    private $jnsbukti;

    private $nobukti;

    private $keterangan;

    private $dk;

    private $debet;

    private $kredit;

    private $jenis;

    private $posted;

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

    public function getKdbuku(): ?string
    {
        return $this->kdbuku;
    }

    public function setKdbuku(string $kdbuku): self
    {
        $this->kdbuku = $kdbuku;

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

    public function getTanggal(): ?string
    {
        return $this->tanggal;
    }

    public function setTanggal(string $tanggal): self
    {
        $this->tanggal = $tanggal;

        return $this;
    }

    public function getJnsbukti(): ?string
    {
        return $this->jnsbukti;
    }

    public function setJnsbukti(string $jnsbukti): self
    {
        $this->jnsbukti = $jnsbukti;

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

    public function getKeterangan(): ?string
    {
        return $this->keterangan;
    }

    public function setKeterangan(string $keterangan): self
    {
        $this->keterangan = $keterangan;

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

    public function getJenis(): ?string
    {
        return $this->jenis;
    }

    public function setJenis(string $jenis): self
    {
        $this->jenis = $jenis;

        return $this;
    }

    public function getPosted(): ?string
    {
        return $this->posted;
    }

    public function setPosted(string $posted): self
    {
        $this->posted = $posted;

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

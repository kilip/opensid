<?php

namespace OpenSID\Prototype\Model;

class KeuanganTaSaldoAwal
{
    private $tahun;

    private $kdDesa;

    private $kdRincian;

    private $jenis;

    private $anggaran;

    private $debet;

    private $kredit;

    private $tglBukti;

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

    public function getKdRincian(): ?string
    {
        return $this->kdRincian;
    }

    public function setKdRincian(string $kdRincian): self
    {
        $this->kdRincian = $kdRincian;

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

    public function getAnggaran(): ?string
    {
        return $this->anggaran;
    }

    public function setAnggaran(string $anggaran): self
    {
        $this->anggaran = $anggaran;

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

    public function getTglBukti(): ?string
    {
        return $this->tglBukti;
    }

    public function setTglBukti(string $tglBukti): self
    {
        $this->tglBukti = $tglBukti;

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

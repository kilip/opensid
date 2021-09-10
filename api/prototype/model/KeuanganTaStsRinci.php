<?php

namespace OpenSID\Prototype\Model;

class KeuanganTaStsRinci
{
    private $tahun;

    private $kdDesa;

    private $noBukti;

    private $noTbp;

    private $uraian;

    private $nilai;

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

    public function getNoBukti(): ?string
    {
        return $this->noBukti;
    }

    public function setNoBukti(string $noBukti): self
    {
        $this->noBukti = $noBukti;

        return $this;
    }

    public function getNoTbp(): ?string
    {
        return $this->noTbp;
    }

    public function setNoTbp(string $noTbp): self
    {
        $this->noTbp = $noTbp;

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

    public function getNilai(): ?string
    {
        return $this->nilai;
    }

    public function setNilai(string $nilai): self
    {
        $this->nilai = $nilai;

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

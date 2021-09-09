<?php

namespace OpenSID\Prototype\Model;

class KeuanganTaPajakRinci
{
    private $tahun;

    private $kdDesa;

    private $noSsp;

    private $noBukti;

    private $kdRincian;

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

    public function getNoSsp(): ?string
    {
        return $this->noSsp;
    }

    public function setNoSsp(string $noSsp): self
    {
        $this->noSsp = $noSsp;

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

    public function getKdRincian(): ?string
    {
        return $this->kdRincian;
    }

    public function setKdRincian(string $kdRincian): self
    {
        $this->kdRincian = $kdRincian;

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

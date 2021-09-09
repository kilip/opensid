<?php

namespace OpenSID\Prototype\Model;

class KeuanganTaSpjSisa
{
    private $tahun;

    private $kdDesa;

    private $noBukti;

    private $tglBukti;

    private $noSpj;

    private $tglSpj;

    private $noSpp;

    private $tglSpp;

    private $kdKeg;

    private $keterangan;

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

    public function getTglBukti(): ?string
    {
        return $this->tglBukti;
    }

    public function setTglBukti(string $tglBukti): self
    {
        $this->tglBukti = $tglBukti;

        return $this;
    }

    public function getNoSpj(): ?string
    {
        return $this->noSpj;
    }

    public function setNoSpj(string $noSpj): self
    {
        $this->noSpj = $noSpj;

        return $this;
    }

    public function getTglSpj(): ?string
    {
        return $this->tglSpj;
    }

    public function setTglSpj(string $tglSpj): self
    {
        $this->tglSpj = $tglSpj;

        return $this;
    }

    public function getNoSpp(): ?string
    {
        return $this->noSpp;
    }

    public function setNoSpp(string $noSpp): self
    {
        $this->noSpp = $noSpp;

        return $this;
    }

    public function getTglSpp(): ?string
    {
        return $this->tglSpp;
    }

    public function setTglSpp(string $tglSpp): self
    {
        $this->tglSpp = $tglSpp;

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

    public function getKeterangan(): ?string
    {
        return $this->keterangan;
    }

    public function setKeterangan(string $keterangan): self
    {
        $this->keterangan = $keterangan;

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

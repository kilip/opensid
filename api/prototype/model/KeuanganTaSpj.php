<?php

namespace OpenSID\Prototype\Model;

class KeuanganTaSpj
{
    private $tahun;

    private $noSpj;

    private $tglSpj;

    private $kdDesa;

    private $noSpp;

    private $keterangan;

    private $jumlah;

    private $potongan;

    private $status;

    private $kunci;

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

    public function getKdDesa(): ?string
    {
        return $this->kdDesa;
    }

    public function setKdDesa(string $kdDesa): self
    {
        $this->kdDesa = $kdDesa;

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

    public function getKeterangan(): ?string
    {
        return $this->keterangan;
    }

    public function setKeterangan(string $keterangan): self
    {
        $this->keterangan = $keterangan;

        return $this;
    }

    public function getJumlah(): ?string
    {
        return $this->jumlah;
    }

    public function setJumlah(string $jumlah): self
    {
        $this->jumlah = $jumlah;

        return $this;
    }

    public function getPotongan(): ?string
    {
        return $this->potongan;
    }

    public function setPotongan(string $potongan): self
    {
        $this->potongan = $potongan;

        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(string $status): self
    {
        $this->status = $status;

        return $this;
    }

    public function getKunci(): ?string
    {
        return $this->kunci;
    }

    public function setKunci(?string $kunci): self
    {
        $this->kunci = $kunci;

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

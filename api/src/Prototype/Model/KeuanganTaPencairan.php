<?php

namespace OpenSID\Prototype\Model;

class KeuanganTaPencairan
{
    private $tahun;

    private $noCek;

    private $noSpp;

    private $tglCek;

    private $kdDesa;

    private $keterangan;

    private $jumlah;

    private $potongan;

    private $kdbayar;

    private $idBank;

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

    public function getNoCek(): ?string
    {
        return $this->noCek;
    }

    public function setNoCek(string $noCek): self
    {
        $this->noCek = $noCek;

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

    public function getTglCek(): ?string
    {
        return $this->tglCek;
    }

    public function setTglCek(string $tglCek): self
    {
        $this->tglCek = $tglCek;

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

    public function getKeterangan(): ?string
    {
        return $this->keterangan;
    }

    public function setKeterangan(?string $keterangan): self
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

    public function getKdbayar(): ?string
    {
        return $this->kdbayar;
    }

    public function setKdbayar(string $kdbayar): self
    {
        $this->kdbayar = $kdbayar;

        return $this;
    }

    public function getIdBank(): ?string
    {
        return $this->idBank;
    }

    public function setIdBank(?string $idBank): self
    {
        $this->idBank = $idBank;

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

<?php

namespace OpenSID\Prototype\Model;

class Persil
{
    private $nomor;

    private $nomorUrutBidang;

    private $kelas;

    private $luasPersil;

    private $idWilayah;

    private $lokasi;

    private $path;

    private $cdesaAwal;

    private $id;

    public function getNomor(): ?string
    {
        return $this->nomor;
    }

    public function setNomor(string $nomor): self
    {
        $this->nomor = $nomor;

        return $this;
    }

    public function getNomorUrutBidang()
    {
        return $this->nomorUrutBidang;
    }

    public function setNomorUrutBidang($nomorUrutBidang): self
    {
        $this->nomorUrutBidang = $nomorUrutBidang;

        return $this;
    }

    public function getKelas(): ?int
    {
        return $this->kelas;
    }

    public function setKelas(int $kelas): self
    {
        $this->kelas = $kelas;

        return $this;
    }

    public function getLuasPersil(): ?string
    {
        return $this->luasPersil;
    }

    public function setLuasPersil(?string $luasPersil): self
    {
        $this->luasPersil = $luasPersil;

        return $this;
    }

    public function getIdWilayah(): ?int
    {
        return $this->idWilayah;
    }

    public function setIdWilayah(?int $idWilayah): self
    {
        $this->idWilayah = $idWilayah;

        return $this;
    }

    public function getLokasi(): ?string
    {
        return $this->lokasi;
    }

    public function setLokasi(?string $lokasi): self
    {
        $this->lokasi = $lokasi;

        return $this;
    }

    public function getPath(): ?string
    {
        return $this->path;
    }

    public function setPath(?string $path): self
    {
        $this->path = $path;

        return $this;
    }

    public function getCdesaAwal(): ?int
    {
        return $this->cdesaAwal;
    }

    public function setCdesaAwal(?int $cdesaAwal): self
    {
        $this->cdesaAwal = $cdesaAwal;

        return $this;
    }

    public function getId(): ?int
    {
        return $this->id;
    }
}

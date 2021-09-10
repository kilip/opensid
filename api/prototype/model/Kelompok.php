<?php

namespace OpenSID\Prototype\Model;

class Kelompok
{
    private $idMaster;

    private $idKetua;

    private $nama;

    private $keterangan;

    private $kode;

    private $id;

    public function getIdMaster(): ?string
    {
        return $this->idMaster;
    }

    public function setIdMaster(string $idMaster): self
    {
        $this->idMaster = $idMaster;

        return $this;
    }

    public function getIdKetua(): ?string
    {
        return $this->idKetua;
    }

    public function setIdKetua(string $idKetua): self
    {
        $this->idKetua = $idKetua;

        return $this;
    }

    public function getNama(): ?string
    {
        return $this->nama;
    }

    public function setNama(string $nama): self
    {
        $this->nama = $nama;

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

    public function getKode(): ?string
    {
        return $this->kode;
    }

    public function setKode(string $kode): self
    {
        $this->kode = $kode;

        return $this;
    }

    public function getId(): ?string
    {
        return $this->id;
    }
}

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

    public function getIdMaster(): ?int
    {
        return $this->idMaster;
    }

    public function setIdMaster(int $idMaster): self
    {
        $this->idMaster = $idMaster;

        return $this;
    }

    public function getIdKetua(): ?int
    {
        return $this->idKetua;
    }

    public function setIdKetua(int $idKetua): self
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

    public function getId(): ?int
    {
        return $this->id;
    }
}

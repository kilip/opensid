<?php

namespace OpenSID\Prototype\Model;

class Suplemen
{
    private $nama;

    private $sasaran;

    private $keterangan;

    private $id;

    public function getNama(): ?string
    {
        return $this->nama;
    }

    public function setNama(?string $nama): self
    {
        $this->nama = $nama;

        return $this;
    }

    public function getSasaran()
    {
        return $this->sasaran;
    }

    public function setSasaran($sasaran): self
    {
        $this->sasaran = $sasaran;

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

    public function getId(): ?int
    {
        return $this->id;
    }
}
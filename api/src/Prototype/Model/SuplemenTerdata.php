<?php

namespace OpenSID\Prototype\Model;

class SuplemenTerdata
{
    private $idTerdata;

    private $sasaran;

    private $keterangan;

    private $id;

    private $idSuplemen;

    public function getIdTerdata(): ?string
    {
        return $this->idTerdata;
    }

    public function setIdTerdata(?string $idTerdata): self
    {
        $this->idTerdata = $idTerdata;

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

    public function getIdSuplemen(): ?Suplemen
    {
        return $this->idSuplemen;
    }

    public function setIdSuplemen(?Suplemen $idSuplemen): self
    {
        $this->idSuplemen = $idSuplemen;

        return $this;
    }
}
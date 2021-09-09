<?php

namespace OpenSID\Prototype\Model;

class AnalisisKlasifikasi
{
    private $idMaster;

    private $nama;

    private $minval;

    private $maxval;

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

    public function getNama(): ?string
    {
        return $this->nama;
    }

    public function setNama(string $nama): self
    {
        $this->nama = $nama;

        return $this;
    }

    public function getMinval(): ?float
    {
        return $this->minval;
    }

    public function setMinval(float $minval): self
    {
        $this->minval = $minval;

        return $this;
    }

    public function getMaxval(): ?float
    {
        return $this->maxval;
    }

    public function setMaxval(float $maxval): self
    {
        $this->maxval = $maxval;

        return $this;
    }

    public function getId(): ?int
    {
        return $this->id;
    }
}

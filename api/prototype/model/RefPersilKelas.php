<?php

namespace OpenSID\Prototype\Model;

class RefPersilKelas
{
    private $tipe;

    private $kode;

    private $ndesc;

    private $id;

    public function getTipe(): ?string
    {
        return $this->tipe;
    }

    public function setTipe(string $tipe): self
    {
        $this->tipe = $tipe;

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

    public function getNdesc(): ?string
    {
        return $this->ndesc;
    }

    public function setNdesc(?string $ndesc): self
    {
        $this->ndesc = $ndesc;

        return $this;
    }

    public function getId(): ?int
    {
        return $this->id;
    }
}

<?php

namespace OpenSID\Prototype\Model;

class RefPendudukBahasa
{
    private $nama;

    private $inisial;

    private $id;

    public function getNama(): ?string
    {
        return $this->nama;
    }

    public function setNama(string $nama): self
    {
        $this->nama = $nama;

        return $this;
    }

    public function getInisial(): ?string
    {
        return $this->inisial;
    }

    public function setInisial(string $inisial): self
    {
        $this->inisial = $inisial;

        return $this;
    }

    public function getId(): ?int
    {
        return $this->id;
    }
}

<?php

namespace OpenSID\Prototype\Model;

class TwebSakitMenahun
{
    private $nama;

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

    public function getId(): ?string
    {
        return $this->id;
    }
}

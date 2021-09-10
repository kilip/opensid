<?php

namespace OpenSID\Prototype\Model;

class Provinsi
{
    private $nama;

    private $kode;

    public function getNama(): ?string
    {
        return $this->nama;
    }

    public function setNama(?string $nama): self
    {
        $this->nama = $nama;

        return $this;
    }

    public function getKode(): ?int
    {
        return $this->kode;
    }
}

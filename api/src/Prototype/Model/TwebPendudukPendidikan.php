<?php

namespace OpenSID\Prototype\Model;

class TwebPendudukPendidikan
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

    public function getId()
    {
        return $this->id;
    }
}

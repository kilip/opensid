<?php

namespace OpenSID\Prototype\Model;

class RefPersilMutasi
{
    private $nama;

    private $ndesc;

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

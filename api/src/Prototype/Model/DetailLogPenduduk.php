<?php

namespace OpenSID\Prototype\Model;

class DetailLogPenduduk
{
    private $id;

    private $nama;

    private $uuid;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(int $id): self
    {
        $this->id = $id;

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

    public function getUuid(): ?string
    {
        return $this->uuid;
    }
}

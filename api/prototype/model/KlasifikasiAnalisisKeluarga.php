<?php

namespace OpenSID\Prototype\Model;

class KlasifikasiAnalisisKeluarga
{
    private $nama;

    private $jenis;

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

    public function getJenis(): ?string
    {
        return $this->jenis;
    }

    public function setJenis(string $jenis): self
    {
        $this->jenis = $jenis;

        return $this;
    }

    public function getId(): ?string
    {
        return $this->id;
    }
}

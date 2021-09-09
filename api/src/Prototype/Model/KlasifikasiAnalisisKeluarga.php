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

    public function getJenis(): ?int
    {
        return $this->jenis;
    }

    public function setJenis(int $jenis): self
    {
        $this->jenis = $jenis;

        return $this;
    }

    public function getId(): ?int
    {
        return $this->id;
    }
}

<?php

namespace OpenSID\Prototype\Model;

class KelompokMaster
{
    private $kelompok;

    private $deskripsi;

    private $id;

    public function getKelompok(): ?string
    {
        return $this->kelompok;
    }

    public function setKelompok(string $kelompok): self
    {
        $this->kelompok = $kelompok;

        return $this;
    }

    public function getDeskripsi(): ?string
    {
        return $this->deskripsi;
    }

    public function setDeskripsi(string $deskripsi): self
    {
        $this->deskripsi = $deskripsi;

        return $this;
    }

    public function getId(): ?string
    {
        return $this->id;
    }
}

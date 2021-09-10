<?php

namespace OpenSID\Prototype\Model;

class KlasifikasiSurat
{
    private $kode;

    private $nama;

    private $uraian;

    private $enabled;

    private $id;

    public function getKode(): ?string
    {
        return $this->kode;
    }

    public function setKode(string $kode): self
    {
        $this->kode = $kode;

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

    public function getUraian(): ?string
    {
        return $this->uraian;
    }

    public function setUraian(string $uraian): self
    {
        $this->uraian = $uraian;

        return $this;
    }

    public function getEnabled(): ?int
    {
        return $this->enabled;
    }

    public function setEnabled(int $enabled): self
    {
        $this->enabled = $enabled;

        return $this;
    }

    public function getId(): ?int
    {
        return $this->id;
    }
}

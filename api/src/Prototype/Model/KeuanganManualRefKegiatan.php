<?php

namespace OpenSID\Prototype\Model;

class KeuanganManualRefKegiatan
{
    private $idKeg;

    private $namaKegiatan;

    private $id;

    public function getIdKeg(): ?string
    {
        return $this->idKeg;
    }

    public function setIdKeg(string $idKeg): self
    {
        $this->idKeg = $idKeg;

        return $this;
    }

    public function getNamaKegiatan(): ?string
    {
        return $this->namaKegiatan;
    }

    public function setNamaKegiatan(string $namaKegiatan): self
    {
        $this->namaKegiatan = $namaKegiatan;

        return $this;
    }

    public function getId(): ?int
    {
        return $this->id;
    }
}

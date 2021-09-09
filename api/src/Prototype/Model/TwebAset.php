<?php

namespace OpenSID\Prototype\Model;

class TwebAset
{
    private $golongan;

    private $bidang;

    private $kelompok;

    private $subKelompok;

    private $subSubKelompok;

    private $nama;

    private $idAset;

    public function getGolongan(): ?string
    {
        return $this->golongan;
    }

    public function setGolongan(string $golongan): self
    {
        $this->golongan = $golongan;

        return $this;
    }

    public function getBidang(): ?string
    {
        return $this->bidang;
    }

    public function setBidang(string $bidang): self
    {
        $this->bidang = $bidang;

        return $this;
    }

    public function getKelompok(): ?string
    {
        return $this->kelompok;
    }

    public function setKelompok(string $kelompok): self
    {
        $this->kelompok = $kelompok;

        return $this;
    }

    public function getSubKelompok(): ?string
    {
        return $this->subKelompok;
    }

    public function setSubKelompok(string $subKelompok): self
    {
        $this->subKelompok = $subKelompok;

        return $this;
    }

    public function getSubSubKelompok(): ?string
    {
        return $this->subSubKelompok;
    }

    public function setSubSubKelompok(string $subSubKelompok): self
    {
        $this->subSubKelompok = $subSubKelompok;

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

    public function getIdAset(): ?int
    {
        return $this->idAset;
    }
}

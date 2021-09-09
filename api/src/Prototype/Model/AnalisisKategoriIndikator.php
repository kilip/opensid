<?php

namespace OpenSID\Prototype\Model;

class AnalisisKategoriIndikator
{
    private $idMaster;

    private $kategori;

    private $kategoriKode;

    private $id;

    public function getIdMaster()
    {
        return $this->idMaster;
    }

    public function setIdMaster($idMaster): self
    {
        $this->idMaster = $idMaster;

        return $this;
    }

    public function getKategori(): ?string
    {
        return $this->kategori;
    }

    public function setKategori(string $kategori): self
    {
        $this->kategori = $kategori;

        return $this;
    }

    public function getKategoriKode(): ?string
    {
        return $this->kategoriKode;
    }

    public function setKategoriKode(?string $kategoriKode): self
    {
        $this->kategoriKode = $kategoriKode;

        return $this;
    }

    public function getId(): ?int
    {
        return $this->id;
    }
}

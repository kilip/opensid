<?php

namespace OpenSID\Prototype\Model;

class KeuanganRefRek3
{
    private $kelompok;

    private $jenis;

    private $namaJenis;

    private $formula;

    private $id;

    private $idKeuanganMaster;

    public function getKelompok(): ?string
    {
        return $this->kelompok;
    }

    public function setKelompok(string $kelompok): self
    {
        $this->kelompok = $kelompok;

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

    public function getNamaJenis(): ?string
    {
        return $this->namaJenis;
    }

    public function setNamaJenis(string $namaJenis): self
    {
        $this->namaJenis = $namaJenis;

        return $this;
    }

    public function getFormula(): ?int
    {
        return $this->formula;
    }

    public function setFormula(int $formula): self
    {
        $this->formula = $formula;

        return $this;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdKeuanganMaster(): ?KeuanganMaster
    {
        return $this->idKeuanganMaster;
    }

    public function setIdKeuanganMaster(?KeuanganMaster $idKeuanganMaster): self
    {
        $this->idKeuanganMaster = $idKeuanganMaster;

        return $this;
    }
}

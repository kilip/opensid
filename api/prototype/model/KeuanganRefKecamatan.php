<?php

namespace OpenSID\Prototype\Model;

class KeuanganRefKecamatan
{
    private $kdKec;

    private $namaKecamatan;

    private $id;

    private $idKeuanganMaster;

    public function getKdKec(): ?string
    {
        return $this->kdKec;
    }

    public function setKdKec(string $kdKec): self
    {
        $this->kdKec = $kdKec;

        return $this;
    }

    public function getNamaKecamatan(): ?string
    {
        return $this->namaKecamatan;
    }

    public function setNamaKecamatan(string $namaKecamatan): self
    {
        $this->namaKecamatan = $namaKecamatan;

        return $this;
    }

    public function getId(): ?string
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

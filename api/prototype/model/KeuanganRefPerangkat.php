<?php

namespace OpenSID\Prototype\Model;

class KeuanganRefPerangkat
{
    private $kode;

    private $namaPerangkat;

    private $id;

    private $idKeuanganMaster;

    public function getKode(): ?string
    {
        return $this->kode;
    }

    public function setKode(string $kode): self
    {
        $this->kode = $kode;

        return $this;
    }

    public function getNamaPerangkat(): ?string
    {
        return $this->namaPerangkat;
    }

    public function setNamaPerangkat(string $namaPerangkat): self
    {
        $this->namaPerangkat = $namaPerangkat;

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

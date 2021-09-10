<?php

namespace OpenSID\Prototype\Model;

class KeuanganRefDesa
{
    private $kdKec;

    private $kdDesa;

    private $namaDesa;

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

    public function getKdDesa(): ?string
    {
        return $this->kdDesa;
    }

    public function setKdDesa(string $kdDesa): self
    {
        $this->kdDesa = $kdDesa;

        return $this;
    }

    public function getNamaDesa(): ?string
    {
        return $this->namaDesa;
    }

    public function setNamaDesa(string $namaDesa): self
    {
        $this->namaDesa = $namaDesa;

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

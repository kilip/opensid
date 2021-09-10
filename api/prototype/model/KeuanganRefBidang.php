<?php

namespace OpenSID\Prototype\Model;

class KeuanganRefBidang
{
    private $kdBid;

    private $namaBidang;

    private $id;

    private $idKeuanganMaster;

    public function getKdBid(): ?string
    {
        return $this->kdBid;
    }

    public function setKdBid(string $kdBid): self
    {
        $this->kdBid = $kdBid;

        return $this;
    }

    public function getNamaBidang(): ?string
    {
        return $this->namaBidang;
    }

    public function setNamaBidang(string $namaBidang): self
    {
        $this->namaBidang = $namaBidang;

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

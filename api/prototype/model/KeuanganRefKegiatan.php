<?php

namespace OpenSID\Prototype\Model;

class KeuanganRefKegiatan
{
    private $kdBid;

    private $idKeg;

    private $namaKegiatan;

    private $jnsKegiatan;

    private $kdSub;

    private $id;

    private $idKeuanganMaster;

    public function getKdBid(): ?string
    {
        return $this->kdBid;
    }

    public function setKdBid(?string $kdBid): self
    {
        $this->kdBid = $kdBid;

        return $this;
    }

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

    public function getJnsKegiatan(): ?int
    {
        return $this->jnsKegiatan;
    }

    public function setJnsKegiatan(?int $jnsKegiatan): self
    {
        $this->jnsKegiatan = $jnsKegiatan;

        return $this;
    }

    public function getKdSub(): ?string
    {
        return $this->kdSub;
    }

    public function setKdSub(?string $kdSub): self
    {
        $this->kdSub = $kdSub;

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

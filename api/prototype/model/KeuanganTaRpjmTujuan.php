<?php

namespace OpenSID\Prototype\Model;

class KeuanganTaRpjmTujuan
{
    private $idTujuan;

    private $kdDesa;

    private $idMisi;

    private $noTujuan;

    private $uraianTujuan;

    private $id;

    private $idKeuanganMaster;

    public function getIdTujuan(): ?string
    {
        return $this->idTujuan;
    }

    public function setIdTujuan(string $idTujuan): self
    {
        $this->idTujuan = $idTujuan;

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

    public function getIdMisi(): ?string
    {
        return $this->idMisi;
    }

    public function setIdMisi(string $idMisi): self
    {
        $this->idMisi = $idMisi;

        return $this;
    }

    public function getNoTujuan(): ?string
    {
        return $this->noTujuan;
    }

    public function setNoTujuan(string $noTujuan): self
    {
        $this->noTujuan = $noTujuan;

        return $this;
    }

    public function getUraianTujuan(): ?string
    {
        return $this->uraianTujuan;
    }

    public function setUraianTujuan(?string $uraianTujuan): self
    {
        $this->uraianTujuan = $uraianTujuan;

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

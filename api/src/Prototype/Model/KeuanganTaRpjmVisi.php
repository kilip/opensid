<?php

namespace OpenSID\Prototype\Model;

class KeuanganTaRpjmVisi
{
    private $idVisi;

    private $kdDesa;

    private $noVisi;

    private $uraianVisi;

    private $tahuna;

    private $tahunn;

    private $id;

    private $idKeuanganMaster;

    public function getIdVisi(): ?string
    {
        return $this->idVisi;
    }

    public function setIdVisi(string $idVisi): self
    {
        $this->idVisi = $idVisi;

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

    public function getNoVisi(): ?string
    {
        return $this->noVisi;
    }

    public function setNoVisi(string $noVisi): self
    {
        $this->noVisi = $noVisi;

        return $this;
    }

    public function getUraianVisi(): ?string
    {
        return $this->uraianVisi;
    }

    public function setUraianVisi(?string $uraianVisi): self
    {
        $this->uraianVisi = $uraianVisi;

        return $this;
    }

    public function getTahuna(): ?string
    {
        return $this->tahuna;
    }

    public function setTahuna(string $tahuna): self
    {
        $this->tahuna = $tahuna;

        return $this;
    }

    public function getTahunn(): ?string
    {
        return $this->tahunn;
    }

    public function setTahunn(string $tahunn): self
    {
        $this->tahunn = $tahunn;

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

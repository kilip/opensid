<?php

namespace OpenSID\Prototype\Model;

class AnalisisResponHasil
{
    private $idMaster;

    private $idPeriode;

    private $idSubjek;

    private $akumulasi;

    private $tglUpdate;

    private $uuid;

    public function getIdMaster()
    {
        return $this->idMaster;
    }

    public function setIdMaster($idMaster): self
    {
        $this->idMaster = $idMaster;

        return $this;
    }

    public function getIdPeriode()
    {
        return $this->idPeriode;
    }

    public function setIdPeriode($idPeriode): self
    {
        $this->idPeriode = $idPeriode;

        return $this;
    }

    public function getIdSubjek(): ?int
    {
        return $this->idSubjek;
    }

    public function setIdSubjek(int $idSubjek): self
    {
        $this->idSubjek = $idSubjek;

        return $this;
    }

    public function getAkumulasi(): ?float
    {
        return $this->akumulasi;
    }

    public function setAkumulasi(float $akumulasi): self
    {
        $this->akumulasi = $akumulasi;

        return $this;
    }

    public function getTglUpdate(): ?\DateTimeInterface
    {
        return $this->tglUpdate;
    }

    public function setTglUpdate(\DateTimeInterface $tglUpdate): self
    {
        $this->tglUpdate = $tglUpdate;

        return $this;
    }

    public function getUuid(): ?string
    {
        return $this->uuid;
    }
}

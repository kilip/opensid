<?php

namespace OpenSID\Prototype\Model;

class AnalisisPartisipasi
{
    private $idSubjek;

    private $idMaster;

    private $idPeriode;

    private $idKlassifikasi;

    private $id;

    public function getIdSubjek(): ?int
    {
        return $this->idSubjek;
    }

    public function setIdSubjek(int $idSubjek): self
    {
        $this->idSubjek = $idSubjek;

        return $this;
    }

    public function getIdMaster(): ?int
    {
        return $this->idMaster;
    }

    public function setIdMaster(int $idMaster): self
    {
        $this->idMaster = $idMaster;

        return $this;
    }

    public function getIdPeriode(): ?int
    {
        return $this->idPeriode;
    }

    public function setIdPeriode(int $idPeriode): self
    {
        $this->idPeriode = $idPeriode;

        return $this;
    }

    public function getIdKlassifikasi(): ?int
    {
        return $this->idKlassifikasi;
    }

    public function setIdKlassifikasi(int $idKlassifikasi): self
    {
        $this->idKlassifikasi = $idKlassifikasi;

        return $this;
    }

    public function getId(): ?int
    {
        return $this->id;
    }
}

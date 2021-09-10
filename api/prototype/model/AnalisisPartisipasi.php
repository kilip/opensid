<?php

namespace OpenSID\Prototype\Model;

class AnalisisPartisipasi
{
    private $idSubjek;

    private $idMaster;

    private $idPeriode;

    private $idKlassifikasi;

    private $id;

    public function getIdSubjek(): ?string
    {
        return $this->idSubjek;
    }

    public function setIdSubjek(string $idSubjek): self
    {
        $this->idSubjek = $idSubjek;

        return $this;
    }

    public function getIdMaster(): ?string
    {
        return $this->idMaster;
    }

    public function setIdMaster(string $idMaster): self
    {
        $this->idMaster = $idMaster;

        return $this;
    }

    public function getIdPeriode(): ?string
    {
        return $this->idPeriode;
    }

    public function setIdPeriode(string $idPeriode): self
    {
        $this->idPeriode = $idPeriode;

        return $this;
    }

    public function getIdKlassifikasi(): ?string
    {
        return $this->idKlassifikasi;
    }

    public function setIdKlassifikasi(string $idKlassifikasi): self
    {
        $this->idKlassifikasi = $idKlassifikasi;

        return $this;
    }

    public function getId(): ?string
    {
        return $this->id;
    }
}

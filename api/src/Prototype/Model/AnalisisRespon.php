<?php

namespace OpenSID\Prototype\Model;

class AnalisisRespon
{
    private $idIndikator;

    private $idParameter;

    private $idSubjek;

    private $idPeriode;

    public function getIdIndikator(): ?int
    {
        return $this->idIndikator;
    }

    public function getIdParameter(): ?int
    {
        return $this->idParameter;
    }

    public function getIdSubjek(): ?int
    {
        return $this->idSubjek;
    }

    public function getIdPeriode(): ?int
    {
        return $this->idPeriode;
    }
}

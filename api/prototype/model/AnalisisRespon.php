<?php

namespace OpenSID\Prototype\Model;

class AnalisisRespon
{
    private $idIndikator;

    private $idParameter;

    private $idSubjek;

    private $idPeriode;

    public function getIdIndikator(): ?string
    {
        return $this->idIndikator;
    }

    public function getIdParameter(): ?string
    {
        return $this->idParameter;
    }

    public function getIdSubjek(): ?string
    {
        return $this->idSubjek;
    }

    public function getIdPeriode(): ?string
    {
        return $this->idPeriode;
    }
}

<?php

namespace OpenSID\Prototype\Model;

class Kontak
{
    private $noHp;

    private $idKontak;

    private $idPend;

    public function getNoHp(): ?string
    {
        return $this->noHp;
    }

    public function setNoHp(?string $noHp): self
    {
        $this->noHp = $noHp;

        return $this;
    }

    public function getIdKontak(): ?int
    {
        return $this->idKontak;
    }

    public function getIdPend(): ?TwebPenduduk
    {
        return $this->idPend;
    }

    public function setIdPend(?TwebPenduduk $idPend): self
    {
        $this->idPend = $idPend;

        return $this;
    }
}
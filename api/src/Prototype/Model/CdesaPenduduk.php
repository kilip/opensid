<?php

namespace OpenSID\Prototype\Model;

class CdesaPenduduk
{
    private $idPend;

    private $id;

    private $idCdesa;

    public function getIdPend(): ?int
    {
        return $this->idPend;
    }

    public function setIdPend(int $idPend): self
    {
        $this->idPend = $idPend;

        return $this;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdCdesa(): ?Cdesa
    {
        return $this->idCdesa;
    }

    public function setIdCdesa(?Cdesa $idCdesa): self
    {
        $this->idCdesa = $idCdesa;

        return $this;
    }
}

<?php

namespace OpenSID\Prototype\Model;

class AnggotaGrupKontak
{
    private $idGrupKontak;

    private $idKontak;

    private $idGrup;

    public function getIdGrupKontak(): ?int
    {
        return $this->idGrupKontak;
    }

    public function getIdKontak(): ?Kontak
    {
        return $this->idKontak;
    }

    public function setIdKontak(?Kontak $idKontak): self
    {
        $this->idKontak = $idKontak;

        return $this;
    }

    public function getIdGrup(): ?KontakGrup
    {
        return $this->idGrup;
    }

    public function setIdGrup(?KontakGrup $idGrup): self
    {
        $this->idGrup = $idGrup;

        return $this;
    }
}

<?php

namespace OpenSID\Prototype\Model;

class KontakGrup
{
    private $namaGrup;

    private $idGrup;

    public function getNamaGrup(): ?string
    {
        return $this->namaGrup;
    }

    public function setNamaGrup(string $namaGrup): self
    {
        $this->namaGrup = $namaGrup;

        return $this;
    }

    public function getIdGrup(): ?int
    {
        return $this->idGrup;
    }
}

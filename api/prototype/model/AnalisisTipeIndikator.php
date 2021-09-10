<?php

namespace OpenSID\Prototype\Model;

class AnalisisTipeIndikator
{
    private $tipe;

    private $id;

    public function getTipe(): ?string
    {
        return $this->tipe;
    }

    public function setTipe(string $tipe): self
    {
        $this->tipe = $tipe;

        return $this;
    }

    public function getId(): ?int
    {
        return $this->id;
    }
}

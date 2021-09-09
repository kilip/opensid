<?php

namespace OpenSID\Prototype\Model;

class GisSimbol
{
    private $simbol;

    private $id;

    public function getSimbol(): ?string
    {
        return $this->simbol;
    }

    public function setSimbol(?string $simbol): self
    {
        $this->simbol = $simbol;

        return $this;
    }

    public function getId(): ?int
    {
        return $this->id;
    }
}

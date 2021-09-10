<?php

namespace OpenSID\Prototype\Model;

class AnalisisRefSubjek
{
    private $subjek;

    private $id;

    public function getSubjek(): ?string
    {
        return $this->subjek;
    }

    public function setSubjek(string $subjek): self
    {
        $this->subjek = $subjek;

        return $this;
    }

    public function getId(): ?int
    {
        return $this->id;
    }
}

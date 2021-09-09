<?php

namespace OpenSID\Prototype\Model;

class Migrasi
{
    private $versiDatabase;

    private $id;

    public function getVersiDatabase(): ?string
    {
        return $this->versiDatabase;
    }

    public function setVersiDatabase(string $versiDatabase): self
    {
        $this->versiDatabase = $versiDatabase;

        return $this;
    }

    public function getId(): ?int
    {
        return $this->id;
    }
}

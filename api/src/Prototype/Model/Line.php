<?php

namespace OpenSID\Prototype\Model;

class Line
{
    private $nama;

    private $simbol;

    private $color;

    private $tipe;

    private $parrent;

    private $enabled;

    private $id;

    public function getNama(): ?string
    {
        return $this->nama;
    }

    public function setNama(string $nama): self
    {
        $this->nama = $nama;

        return $this;
    }

    public function getSimbol(): ?string
    {
        return $this->simbol;
    }

    public function setSimbol(?string $simbol): self
    {
        $this->simbol = $simbol;

        return $this;
    }

    public function getColor(): ?string
    {
        return $this->color;
    }

    public function setColor(string $color): self
    {
        $this->color = $color;

        return $this;
    }

    public function getTipe(): ?int
    {
        return $this->tipe;
    }

    public function setTipe(?int $tipe): self
    {
        $this->tipe = $tipe;

        return $this;
    }

    public function getParrent(): ?int
    {
        return $this->parrent;
    }

    public function setParrent(?int $parrent): self
    {
        $this->parrent = $parrent;

        return $this;
    }

    public function getEnabled(): ?int
    {
        return $this->enabled;
    }

    public function setEnabled(int $enabled): self
    {
        $this->enabled = $enabled;

        return $this;
    }

    public function getId(): ?int
    {
        return $this->id;
    }
}

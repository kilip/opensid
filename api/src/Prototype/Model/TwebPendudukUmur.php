<?php

namespace OpenSID\Prototype\Model;

class TwebPendudukUmur
{
    private $nama;

    private $dari;

    private $sampai;

    private $status;

    private $id;

    public function getNama(): ?string
    {
        return $this->nama;
    }

    public function setNama(?string $nama): self
    {
        $this->nama = $nama;

        return $this;
    }

    public function getDari(): ?int
    {
        return $this->dari;
    }

    public function setDari(?int $dari): self
    {
        $this->dari = $dari;

        return $this;
    }

    public function getSampai(): ?int
    {
        return $this->sampai;
    }

    public function setSampai(?int $sampai): self
    {
        $this->sampai = $sampai;

        return $this;
    }

    public function getStatus(): ?int
    {
        return $this->status;
    }

    public function setStatus(?int $status): self
    {
        $this->status = $status;

        return $this;
    }

    public function getId(): ?int
    {
        return $this->id;
    }
}
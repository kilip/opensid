<?php

namespace OpenSID\Prototype\Model;

class TwebRtm
{
    private $nikKepala;

    private $noKk;

    private $tglDaftar;

    private $kelasSosial;

    private $id;

    public function getNikKepala(): ?int
    {
        return $this->nikKepala;
    }

    public function setNikKepala(int $nikKepala): self
    {
        $this->nikKepala = $nikKepala;

        return $this;
    }

    public function getNoKk(): ?string
    {
        return $this->noKk;
    }

    public function setNoKk(string $noKk): self
    {
        $this->noKk = $noKk;

        return $this;
    }

    public function getTglDaftar(): ?\DateTimeInterface
    {
        return $this->tglDaftar;
    }

    public function setTglDaftar(\DateTimeInterface $tglDaftar): self
    {
        $this->tglDaftar = $tglDaftar;

        return $this;
    }

    public function getKelasSosial(): ?int
    {
        return $this->kelasSosial;
    }

    public function setKelasSosial(?int $kelasSosial): self
    {
        $this->kelasSosial = $kelasSosial;

        return $this;
    }

    public function getId(): ?int
    {
        return $this->id;
    }
}

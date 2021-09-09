<?php

namespace OpenSID\Prototype\Model;

class LogEkspor
{
    private $tglEkspor;

    private $kodeEkspor;

    private $semua;

    private $dariTgl;

    private $total;

    private $id;

    public function getTglEkspor(): ?\DateTimeInterface
    {
        return $this->tglEkspor;
    }

    public function setTglEkspor(\DateTimeInterface $tglEkspor): self
    {
        $this->tglEkspor = $tglEkspor;

        return $this;
    }

    public function getKodeEkspor(): ?string
    {
        return $this->kodeEkspor;
    }

    public function setKodeEkspor(string $kodeEkspor): self
    {
        $this->kodeEkspor = $kodeEkspor;

        return $this;
    }

    public function getSemua(): ?int
    {
        return $this->semua;
    }

    public function setSemua(int $semua): self
    {
        $this->semua = $semua;

        return $this;
    }

    public function getDariTgl(): ?\DateTimeInterface
    {
        return $this->dariTgl;
    }

    public function setDariTgl(?\DateTimeInterface $dariTgl): self
    {
        $this->dariTgl = $dariTgl;

        return $this;
    }

    public function getTotal(): ?int
    {
        return $this->total;
    }

    public function setTotal(int $total): self
    {
        $this->total = $total;

        return $this;
    }

    public function getId(): ?int
    {
        return $this->id;
    }
}

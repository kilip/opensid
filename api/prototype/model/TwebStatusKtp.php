<?php

namespace OpenSID\Prototype\Model;

class TwebStatusKtp
{
    private $nama;

    private $ktpEl;

    private $statusRekam;

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

    public function getKtpEl(): ?int
    {
        return $this->ktpEl;
    }

    public function setKtpEl(int $ktpEl): self
    {
        $this->ktpEl = $ktpEl;

        return $this;
    }

    public function getStatusRekam(): ?string
    {
        return $this->statusRekam;
    }

    public function setStatusRekam(string $statusRekam): self
    {
        $this->statusRekam = $statusRekam;

        return $this;
    }

    public function getId(): ?int
    {
        return $this->id;
    }
}

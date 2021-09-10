<?php

namespace OpenSID\Prototype\Model;

class SysTraffic
{
    private $ipaddress;

    private $jumlah;

    private $tanggal;

    public function getIpaddress(): ?string
    {
        return $this->ipaddress;
    }

    public function setIpaddress(string $ipaddress): self
    {
        $this->ipaddress = $ipaddress;

        return $this;
    }

    public function getJumlah(): ?string
    {
        return $this->jumlah;
    }

    public function setJumlah(string $jumlah): self
    {
        $this->jumlah = $jumlah;

        return $this;
    }

    public function getTanggal(): ?\DateTimeInterface
    {
        return $this->tanggal;
    }
}
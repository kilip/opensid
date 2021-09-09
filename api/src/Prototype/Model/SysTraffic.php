<?php

/*
 * This file is part of the OpenSID project.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

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

    public function getJumlah(): ?int
    {
        return $this->jumlah;
    }

    public function setJumlah(int $jumlah): self
    {
        $this->jumlah = $jumlah;

        return $this;
    }

    public function getTanggal(): ?\DateTimeInterface
    {
        return $this->tanggal;
    }
}

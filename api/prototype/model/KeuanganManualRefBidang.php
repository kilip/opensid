<?php

/*
 * This file is part of the OpenSID project.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace OpenSID\Prototype\Model;

class KeuanganManualRefBidang
{
    private $kdBid;

    private $namaBidang;

    private $id;

    public function getKdBid(): ?string
    {
        return $this->kdBid;
    }

    public function setKdBid(string $kdBid): self
    {
        $this->kdBid = $kdBid;

        return $this;
    }

    public function getNamaBidang(): ?string
    {
        return $this->namaBidang;
    }

    public function setNamaBidang(string $namaBidang): self
    {
        $this->namaBidang = $namaBidang;

        return $this;
    }

    public function getId(): ?string
    {
        return $this->id;
    }
}

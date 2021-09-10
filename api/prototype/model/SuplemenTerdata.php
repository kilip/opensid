<?php

/*
 * This file is part of the OpenSID project.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace OpenSID\Prototype\Model;

class SuplemenTerdata
{
    private $idTerdata;

    private $sasaran;

    private $keterangan;

    private $id;

    private $idSuplemen;

    public function getIdTerdata(): ?string
    {
        return $this->idTerdata;
    }

    public function setIdTerdata(?string $idTerdata): self
    {
        $this->idTerdata = $idTerdata;

        return $this;
    }

    public function getSasaran(): ?int
    {
        return $this->sasaran;
    }

    public function setSasaran(?int $sasaran): self
    {
        $this->sasaran = $sasaran;

        return $this;
    }

    public function getKeterangan(): ?string
    {
        return $this->keterangan;
    }

    public function setKeterangan(?string $keterangan): self
    {
        $this->keterangan = $keterangan;

        return $this;
    }

    public function getId(): ?string
    {
        return $this->id;
    }

    public function getIdSuplemen(): ?Suplemen
    {
        return $this->idSuplemen;
    }

    public function setIdSuplemen(?Suplemen $idSuplemen): self
    {
        $this->idSuplemen = $idSuplemen;

        return $this;
    }
}

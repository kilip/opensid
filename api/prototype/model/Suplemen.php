<?php

/*
 * This file is part of the OpenSID project.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace OpenSID\Prototype\Model;

class Suplemen
{
    private $nama;

    private $sasaran;

    private $keterangan;

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
}

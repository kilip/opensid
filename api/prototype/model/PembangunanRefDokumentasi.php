<?php

/*
 * This file is part of the OpenSID project.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace OpenSID\Prototype\Model;

class PembangunanRefDokumentasi
{
    private $idPembangunan;

    private $gambar;

    private $persentase;

    private $keterangan;

    private $createdAt;

    private $updatedAt;

    private $id;

    public function getIdPembangunan(): ?string
    {
        return $this->idPembangunan;
    }

    public function setIdPembangunan(string $idPembangunan): self
    {
        $this->idPembangunan = $idPembangunan;

        return $this;
    }

    public function getGambar(): ?string
    {
        return $this->gambar;
    }

    public function setGambar(?string $gambar): self
    {
        $this->gambar = $gambar;

        return $this;
    }

    public function getPersentase(): ?string
    {
        return $this->persentase;
    }

    public function setPersentase(?string $persentase): self
    {
        $this->persentase = $persentase;

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

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->createdAt;
    }

    public function setCreatedAt(?\DateTimeInterface $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getUpdatedAt(): ?\DateTimeInterface
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(?\DateTimeInterface $updatedAt): self
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    public function getId(): ?string
    {
        return $this->id;
    }
}

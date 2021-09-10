<?php

/*
 * This file is part of the OpenSID project.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace OpenSID\Prototype\Model;

class MutasiInventarisTanah
{
    private $jenisMutasi;

    private $tahunMutasi;

    private $hargaJual;

    private $sumbangkan;

    private $keterangan;

    private $createdAt;

    private $createdBy;

    private $updatedAt;

    private $updatedBy;

    private $visible;

    private $id;

    private $idInventarisTanah;

    public function getJenisMutasi(): ?string
    {
        return $this->jenisMutasi;
    }

    public function setJenisMutasi(string $jenisMutasi): self
    {
        $this->jenisMutasi = $jenisMutasi;

        return $this;
    }

    public function getTahunMutasi(): ?\DateTimeInterface
    {
        return $this->tahunMutasi;
    }

    public function setTahunMutasi(\DateTimeInterface $tahunMutasi): self
    {
        $this->tahunMutasi = $tahunMutasi;

        return $this;
    }

    public function getHargaJual(): ?float
    {
        return $this->hargaJual;
    }

    public function setHargaJual(?float $hargaJual): self
    {
        $this->hargaJual = $hargaJual;

        return $this;
    }

    public function getSumbangkan(): ?string
    {
        return $this->sumbangkan;
    }

    public function setSumbangkan(?string $sumbangkan): self
    {
        $this->sumbangkan = $sumbangkan;

        return $this;
    }

    public function getKeterangan(): ?string
    {
        return $this->keterangan;
    }

    public function setKeterangan(string $keterangan): self
    {
        $this->keterangan = $keterangan;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeInterface $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getCreatedBy(): ?string
    {
        return $this->createdBy;
    }

    public function setCreatedBy(string $createdBy): self
    {
        $this->createdBy = $createdBy;

        return $this;
    }

    public function getUpdatedAt(): ?\DateTimeInterface
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(\DateTimeInterface $updatedAt): self
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    public function getUpdatedBy(): ?string
    {
        return $this->updatedBy;
    }

    public function setUpdatedBy(string $updatedBy): self
    {
        $this->updatedBy = $updatedBy;

        return $this;
    }

    public function getVisible(): ?int
    {
        return $this->visible;
    }

    public function setVisible(int $visible): self
    {
        $this->visible = $visible;

        return $this;
    }

    public function getId(): ?string
    {
        return $this->id;
    }

    public function getIdInventarisTanah(): ?InventarisTanah
    {
        return $this->idInventarisTanah;
    }

    public function setIdInventarisTanah(?InventarisTanah $idInventarisTanah): self
    {
        $this->idInventarisTanah = $idInventarisTanah;

        return $this;
    }
}

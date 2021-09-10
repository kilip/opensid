<?php

/*
 * This file is part of the OpenSID project.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace OpenSID\Prototype\Model;

class InventarisPeralatan
{
    private $namaBarang;

    private $kodeBarang;

    private $register;

    private $merk;

    private $ukuran;

    private $bahan;

    private $tahunPengadaan;

    private $noPabrik;

    private $noRangka;

    private $noMesin;

    private $noPolisi;

    private $noBpkb;

    private $asal;

    private $harga;

    private $keterangan;

    private $createdAt;

    private $createdBy;

    private $updatedAt;

    private $updatedBy;

    private $status;

    private $visible;

    private $id;

    public function getNamaBarang(): ?string
    {
        return $this->namaBarang;
    }

    public function setNamaBarang(string $namaBarang): self
    {
        $this->namaBarang = $namaBarang;

        return $this;
    }

    public function getKodeBarang(): ?string
    {
        return $this->kodeBarang;
    }

    public function setKodeBarang(string $kodeBarang): self
    {
        $this->kodeBarang = $kodeBarang;

        return $this;
    }

    public function getRegister(): ?string
    {
        return $this->register;
    }

    public function setRegister(string $register): self
    {
        $this->register = $register;

        return $this;
    }

    public function getMerk(): ?string
    {
        return $this->merk;
    }

    public function setMerk(string $merk): self
    {
        $this->merk = $merk;

        return $this;
    }

    public function getUkuran(): ?string
    {
        return $this->ukuran;
    }

    public function setUkuran(string $ukuran): self
    {
        $this->ukuran = $ukuran;

        return $this;
    }

    public function getBahan(): ?string
    {
        return $this->bahan;
    }

    public function setBahan(string $bahan): self
    {
        $this->bahan = $bahan;

        return $this;
    }

    public function getTahunPengadaan(): ?int
    {
        return $this->tahunPengadaan;
    }

    public function setTahunPengadaan(int $tahunPengadaan): self
    {
        $this->tahunPengadaan = $tahunPengadaan;

        return $this;
    }

    public function getNoPabrik(): ?string
    {
        return $this->noPabrik;
    }

    public function setNoPabrik(?string $noPabrik): self
    {
        $this->noPabrik = $noPabrik;

        return $this;
    }

    public function getNoRangka(): ?string
    {
        return $this->noRangka;
    }

    public function setNoRangka(?string $noRangka): self
    {
        $this->noRangka = $noRangka;

        return $this;
    }

    public function getNoMesin(): ?string
    {
        return $this->noMesin;
    }

    public function setNoMesin(?string $noMesin): self
    {
        $this->noMesin = $noMesin;

        return $this;
    }

    public function getNoPolisi(): ?string
    {
        return $this->noPolisi;
    }

    public function setNoPolisi(?string $noPolisi): self
    {
        $this->noPolisi = $noPolisi;

        return $this;
    }

    public function getNoBpkb(): ?string
    {
        return $this->noBpkb;
    }

    public function setNoBpkb(?string $noBpkb): self
    {
        $this->noBpkb = $noBpkb;

        return $this;
    }

    public function getAsal(): ?string
    {
        return $this->asal;
    }

    public function setAsal(string $asal): self
    {
        $this->asal = $asal;

        return $this;
    }

    public function getHarga(): ?float
    {
        return $this->harga;
    }

    public function setHarga(float $harga): self
    {
        $this->harga = $harga;

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

    public function getStatus(): ?int
    {
        return $this->status;
    }

    public function setStatus(int $status): self
    {
        $this->status = $status;

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
}

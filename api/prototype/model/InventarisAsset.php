<?php

/*
 * This file is part of the OpenSID project.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace OpenSID\Prototype\Model;

class InventarisAsset
{
    private $namaBarang;

    private $kodeBarang;

    private $register;

    private $jenis;

    private $judulBuku;

    private $spesifikasiBuku;

    private $asalDaerah;

    private $pencipta;

    private $bahan;

    private $jenisHewan;

    private $ukuranHewan;

    private $jenisTumbuhan;

    private $ukuranTumbuhan;

    private $jumlah;

    private $tahunPengadaan;

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

    public function getJenis(): ?string
    {
        return $this->jenis;
    }

    public function setJenis(string $jenis): self
    {
        $this->jenis = $jenis;

        return $this;
    }

    public function getJudulBuku(): ?string
    {
        return $this->judulBuku;
    }

    public function setJudulBuku(?string $judulBuku): self
    {
        $this->judulBuku = $judulBuku;

        return $this;
    }

    public function getSpesifikasiBuku(): ?string
    {
        return $this->spesifikasiBuku;
    }

    public function setSpesifikasiBuku(?string $spesifikasiBuku): self
    {
        $this->spesifikasiBuku = $spesifikasiBuku;

        return $this;
    }

    public function getAsalDaerah(): ?string
    {
        return $this->asalDaerah;
    }

    public function setAsalDaerah(?string $asalDaerah): self
    {
        $this->asalDaerah = $asalDaerah;

        return $this;
    }

    public function getPencipta(): ?string
    {
        return $this->pencipta;
    }

    public function setPencipta(?string $pencipta): self
    {
        $this->pencipta = $pencipta;

        return $this;
    }

    public function getBahan(): ?string
    {
        return $this->bahan;
    }

    public function setBahan(?string $bahan): self
    {
        $this->bahan = $bahan;

        return $this;
    }

    public function getJenisHewan(): ?string
    {
        return $this->jenisHewan;
    }

    public function setJenisHewan(?string $jenisHewan): self
    {
        $this->jenisHewan = $jenisHewan;

        return $this;
    }

    public function getUkuranHewan(): ?string
    {
        return $this->ukuranHewan;
    }

    public function setUkuranHewan(?string $ukuranHewan): self
    {
        $this->ukuranHewan = $ukuranHewan;

        return $this;
    }

    public function getJenisTumbuhan(): ?string
    {
        return $this->jenisTumbuhan;
    }

    public function setJenisTumbuhan(?string $jenisTumbuhan): self
    {
        $this->jenisTumbuhan = $jenisTumbuhan;

        return $this;
    }

    public function getUkuranTumbuhan(): ?string
    {
        return $this->ukuranTumbuhan;
    }

    public function setUkuranTumbuhan(?string $ukuranTumbuhan): self
    {
        $this->ukuranTumbuhan = $ukuranTumbuhan;

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

    public function getTahunPengadaan(): ?int
    {
        return $this->tahunPengadaan;
    }

    public function setTahunPengadaan(int $tahunPengadaan): self
    {
        $this->tahunPengadaan = $tahunPengadaan;

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

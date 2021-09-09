<?php

/*
 * This file is part of the OpenSID project.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace OpenSID\Prototype\Model;

class InventarisTanah
{
    private $namaBarang;

    private $kodeBarang;

    private $register;

    private $luas;

    private $tahunPengadaan;

    private $letak;

    private $hak;

    private $noSertifikat;

    private $tanggalSertifikat;

    private $penggunaan;

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

    public function getLuas(): ?int
    {
        return $this->luas;
    }

    public function setLuas(int $luas): self
    {
        $this->luas = $luas;

        return $this;
    }

    public function getTahunPengadaan(): ?\DateTimeInterface
    {
        return $this->tahunPengadaan;
    }

    public function setTahunPengadaan(\DateTimeInterface $tahunPengadaan): self
    {
        $this->tahunPengadaan = $tahunPengadaan;

        return $this;
    }

    public function getLetak(): ?string
    {
        return $this->letak;
    }

    public function setLetak(string $letak): self
    {
        $this->letak = $letak;

        return $this;
    }

    public function getHak(): ?string
    {
        return $this->hak;
    }

    public function setHak(string $hak): self
    {
        $this->hak = $hak;

        return $this;
    }

    public function getNoSertifikat(): ?string
    {
        return $this->noSertifikat;
    }

    public function setNoSertifikat(string $noSertifikat): self
    {
        $this->noSertifikat = $noSertifikat;

        return $this;
    }

    public function getTanggalSertifikat(): ?\DateTimeInterface
    {
        return $this->tanggalSertifikat;
    }

    public function setTanggalSertifikat(\DateTimeInterface $tanggalSertifikat): self
    {
        $this->tanggalSertifikat = $tanggalSertifikat;

        return $this;
    }

    public function getPenggunaan(): ?string
    {
        return $this->penggunaan;
    }

    public function setPenggunaan(string $penggunaan): self
    {
        $this->penggunaan = $penggunaan;

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

    public function getCreatedBy(): ?int
    {
        return $this->createdBy;
    }

    public function setCreatedBy(int $createdBy): self
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

    public function getUpdatedBy(): ?int
    {
        return $this->updatedBy;
    }

    public function setUpdatedBy(int $updatedBy): self
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

    public function getId(): ?int
    {
        return $this->id;
    }
}

<?php

namespace OpenSID\Prototype\Model;

class InventarisJalan
{
    private $namaBarang;

    private $kodeBarang;

    private $register;

    private $kontruksi;

    private $panjang;

    private $lebar;

    private $luas;

    private $letak;

    private $tanggalDokument;

    private $noDokument;

    private $statusTanah;

    private $kodeTanah;

    private $kondisi;

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

    public function getKontruksi(): ?string
    {
        return $this->kontruksi;
    }

    public function setKontruksi(string $kontruksi): self
    {
        $this->kontruksi = $kontruksi;

        return $this;
    }

    public function getPanjang(): ?int
    {
        return $this->panjang;
    }

    public function setPanjang(int $panjang): self
    {
        $this->panjang = $panjang;

        return $this;
    }

    public function getLebar(): ?int
    {
        return $this->lebar;
    }

    public function setLebar(int $lebar): self
    {
        $this->lebar = $lebar;

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

    public function getLetak(): ?string
    {
        return $this->letak;
    }

    public function setLetak(?string $letak): self
    {
        $this->letak = $letak;

        return $this;
    }

    public function getTanggalDokument(): ?\DateTimeInterface
    {
        return $this->tanggalDokument;
    }

    public function setTanggalDokument(\DateTimeInterface $tanggalDokument): self
    {
        $this->tanggalDokument = $tanggalDokument;

        return $this;
    }

    public function getNoDokument(): ?string
    {
        return $this->noDokument;
    }

    public function setNoDokument(?string $noDokument): self
    {
        $this->noDokument = $noDokument;

        return $this;
    }

    public function getStatusTanah(): ?string
    {
        return $this->statusTanah;
    }

    public function setStatusTanah(?string $statusTanah): self
    {
        $this->statusTanah = $statusTanah;

        return $this;
    }

    public function getKodeTanah(): ?string
    {
        return $this->kodeTanah;
    }

    public function setKodeTanah(?string $kodeTanah): self
    {
        $this->kodeTanah = $kodeTanah;

        return $this;
    }

    public function getKondisi(): ?string
    {
        return $this->kondisi;
    }

    public function setKondisi(string $kondisi): self
    {
        $this->kondisi = $kondisi;

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

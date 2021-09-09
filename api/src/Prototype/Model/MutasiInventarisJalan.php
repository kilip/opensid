<?php

namespace OpenSID\Prototype\Model;

class MutasiInventarisJalan
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

    private $idInventarisJalan;

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

    public function getIdInventarisJalan(): ?InventarisJalan
    {
        return $this->idInventarisJalan;
    }

    public function setIdInventarisJalan(?InventarisJalan $idInventarisJalan): self
    {
        $this->idInventarisJalan = $idInventarisJalan;

        return $this;
    }
}

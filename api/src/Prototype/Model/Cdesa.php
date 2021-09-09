<?php

namespace OpenSID\Prototype\Model;

class Cdesa
{
    private $nomor;

    private $namaKepemilikan;

    private $jenisPemilik;

    private $namaPemilikLuar;

    private $alamatPemilikLuar;

    private $createdAt;

    private $createdBy;

    private $updatedAt;

    private $updatedBy;

    private $id;

    public function getNomor(): ?string
    {
        return $this->nomor;
    }

    public function setNomor(string $nomor): self
    {
        $this->nomor = $nomor;

        return $this;
    }

    public function getNamaKepemilikan(): ?string
    {
        return $this->namaKepemilikan;
    }

    public function setNamaKepemilikan(string $namaKepemilikan): self
    {
        $this->namaKepemilikan = $namaKepemilikan;

        return $this;
    }

    public function getJenisPemilik()
    {
        return $this->jenisPemilik;
    }

    public function setJenisPemilik($jenisPemilik): self
    {
        $this->jenisPemilik = $jenisPemilik;

        return $this;
    }

    public function getNamaPemilikLuar(): ?string
    {
        return $this->namaPemilikLuar;
    }

    public function setNamaPemilikLuar(?string $namaPemilikLuar): self
    {
        $this->namaPemilikLuar = $namaPemilikLuar;

        return $this;
    }

    public function getAlamatPemilikLuar(): ?string
    {
        return $this->alamatPemilikLuar;
    }

    public function setAlamatPemilikLuar(?string $alamatPemilikLuar): self
    {
        $this->alamatPemilikLuar = $alamatPemilikLuar;

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

    public function getId(): ?int
    {
        return $this->id;
    }
}

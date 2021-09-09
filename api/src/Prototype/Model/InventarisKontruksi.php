<?php

namespace OpenSID\Prototype\Model;

class InventarisKontruksi
{
    private $namaBarang;

    private $kondisiBangunan;

    private $kontruksiBertingkat;

    private $kontruksiBeton;

    private $luasBangunan;

    private $letak;

    private $tanggalDokument;

    private $noDokument;

    private $tanggal;

    private $statusTanah;

    private $kodeTanah;

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

    public function getKondisiBangunan(): ?string
    {
        return $this->kondisiBangunan;
    }

    public function setKondisiBangunan(string $kondisiBangunan): self
    {
        $this->kondisiBangunan = $kondisiBangunan;

        return $this;
    }

    public function getKontruksiBertingkat(): ?string
    {
        return $this->kontruksiBertingkat;
    }

    public function setKontruksiBertingkat(string $kontruksiBertingkat): self
    {
        $this->kontruksiBertingkat = $kontruksiBertingkat;

        return $this;
    }

    public function getKontruksiBeton()
    {
        return $this->kontruksiBeton;
    }

    public function setKontruksiBeton($kontruksiBeton): self
    {
        $this->kontruksiBeton = $kontruksiBeton;

        return $this;
    }

    public function getLuasBangunan(): ?int
    {
        return $this->luasBangunan;
    }

    public function setLuasBangunan(int $luasBangunan): self
    {
        $this->luasBangunan = $luasBangunan;

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

    public function getTanggalDokument(): ?\DateTimeInterface
    {
        return $this->tanggalDokument;
    }

    public function setTanggalDokument(?\DateTimeInterface $tanggalDokument): self
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

    public function getTanggal(): ?\DateTimeInterface
    {
        return $this->tanggal;
    }

    public function setTanggal(?\DateTimeInterface $tanggal): self
    {
        $this->tanggal = $tanggal;

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

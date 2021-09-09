<?php

namespace OpenSID\Prototype\Model;

class Dokumen
{
    private $satuan;

    private $nama;

    private $enabled;

    private $tglUpload;

    private $idPend;

    private $kategori;

    private $attr;

    private $tahun;

    private $kategoriInfoPublik;

    private $updatedAt;

    private $deleted;

    private $idSyarat;

    private $idParent;

    private $createdAt;

    private $createdBy;

    private $updatedBy;

    private $dokWarga;

    private $id;

    public function getSatuan(): ?string
    {
        return $this->satuan;
    }

    public function setSatuan(?string $satuan): self
    {
        $this->satuan = $satuan;

        return $this;
    }

    public function getNama(): ?string
    {
        return $this->nama;
    }

    public function setNama(string $nama): self
    {
        $this->nama = $nama;

        return $this;
    }

    public function getEnabled(): ?int
    {
        return $this->enabled;
    }

    public function setEnabled(int $enabled): self
    {
        $this->enabled = $enabled;

        return $this;
    }

    public function getTglUpload(): ?\DateTimeInterface
    {
        return $this->tglUpload;
    }

    public function setTglUpload(\DateTimeInterface $tglUpload): self
    {
        $this->tglUpload = $tglUpload;

        return $this;
    }

    public function getIdPend(): ?int
    {
        return $this->idPend;
    }

    public function setIdPend(int $idPend): self
    {
        $this->idPend = $idPend;

        return $this;
    }

    public function getKategori()
    {
        return $this->kategori;
    }

    public function setKategori($kategori): self
    {
        $this->kategori = $kategori;

        return $this;
    }

    public function getAttr(): ?string
    {
        return $this->attr;
    }

    public function setAttr(string $attr): self
    {
        $this->attr = $attr;

        return $this;
    }

    public function getTahun(): ?int
    {
        return $this->tahun;
    }

    public function setTahun(?int $tahun): self
    {
        $this->tahun = $tahun;

        return $this;
    }

    public function getKategoriInfoPublik()
    {
        return $this->kategoriInfoPublik;
    }

    public function setKategoriInfoPublik($kategoriInfoPublik): self
    {
        $this->kategoriInfoPublik = $kategoriInfoPublik;

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

    public function getDeleted()
    {
        return $this->deleted;
    }

    public function setDeleted($deleted): self
    {
        $this->deleted = $deleted;

        return $this;
    }

    public function getIdSyarat(): ?int
    {
        return $this->idSyarat;
    }

    public function setIdSyarat(?int $idSyarat): self
    {
        $this->idSyarat = $idSyarat;

        return $this;
    }

    public function getIdParent(): ?int
    {
        return $this->idParent;
    }

    public function setIdParent(?int $idParent): self
    {
        $this->idParent = $idParent;

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

    public function setCreatedBy(?string $createdBy): self
    {
        $this->createdBy = $createdBy;

        return $this;
    }

    public function getUpdatedBy(): ?string
    {
        return $this->updatedBy;
    }

    public function setUpdatedBy(?string $updatedBy): self
    {
        $this->updatedBy = $updatedBy;

        return $this;
    }

    public function getDokWarga()
    {
        return $this->dokWarga;
    }

    public function setDokWarga($dokWarga): self
    {
        $this->dokWarga = $dokWarga;

        return $this;
    }

    public function getId(): ?int
    {
        return $this->id;
    }
}

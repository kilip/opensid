<?php

namespace OpenSID\Prototype\Model;

class PermohonanSurat
{
    private $idPemohon;

    private $idSurat;

    private $isianForm;

    private $status;

    private $keterangan;

    private $noHpAktif;

    private $syarat;

    private $createdAt;

    private $updatedAt;

    private $id;

    public function getIdPemohon(): ?int
    {
        return $this->idPemohon;
    }

    public function setIdPemohon(int $idPemohon): self
    {
        $this->idPemohon = $idPemohon;

        return $this;
    }

    public function getIdSurat(): ?int
    {
        return $this->idSurat;
    }

    public function setIdSurat(int $idSurat): self
    {
        $this->idSurat = $idSurat;

        return $this;
    }

    public function getIsianForm(): ?string
    {
        return $this->isianForm;
    }

    public function setIsianForm(string $isianForm): self
    {
        $this->isianForm = $isianForm;

        return $this;
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function setStatus($status): self
    {
        $this->status = $status;

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

    public function getNoHpAktif(): ?string
    {
        return $this->noHpAktif;
    }

    public function setNoHpAktif(string $noHpAktif): self
    {
        $this->noHpAktif = $noHpAktif;

        return $this;
    }

    public function getSyarat(): ?string
    {
        return $this->syarat;
    }

    public function setSyarat(string $syarat): self
    {
        $this->syarat = $syarat;

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

    public function getUpdatedAt(): ?\DateTimeInterface
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(\DateTimeInterface $updatedAt): self
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    public function getId(): ?int
    {
        return $this->id;
    }
}

<?php

namespace OpenSID\Prototype\Model;

class Komentar
{
    private $idArtikel;

    private $owner;

    private $email;

    private $subjek;

    private $komentar;

    private $tglUpload;

    private $status;

    private $tipe;

    private $noHp;

    private $updatedAt;

    private $isArchived;

    private $id;

    public function getIdArtikel(): ?int
    {
        return $this->idArtikel;
    }

    public function setIdArtikel(int $idArtikel): self
    {
        $this->idArtikel = $idArtikel;

        return $this;
    }

    public function getOwner(): ?string
    {
        return $this->owner;
    }

    public function setOwner(string $owner): self
    {
        $this->owner = $owner;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getSubjek(): ?string
    {
        return $this->subjek;
    }

    public function setSubjek(?string $subjek): self
    {
        $this->subjek = $subjek;

        return $this;
    }

    public function getKomentar(): ?string
    {
        return $this->komentar;
    }

    public function setKomentar(string $komentar): self
    {
        $this->komentar = $komentar;

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

    public function getStatus()
    {
        return $this->status;
    }

    public function setStatus($status): self
    {
        $this->status = $status;

        return $this;
    }

    public function getTipe()
    {
        return $this->tipe;
    }

    public function setTipe($tipe): self
    {
        $this->tipe = $tipe;

        return $this;
    }

    public function getNoHp(): ?string
    {
        return $this->noHp;
    }

    public function setNoHp(?string $noHp): self
    {
        $this->noHp = $noHp;

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

    public function getIsArchived()
    {
        return $this->isArchived;
    }

    public function setIsArchived($isArchived): self
    {
        $this->isArchived = $isArchived;

        return $this;
    }

    public function getId(): ?int
    {
        return $this->id;
    }
}

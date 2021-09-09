<?php

namespace OpenSID\Prototype\Model;

class TeksBerjalan
{
    private $teks;

    private $urut;

    private $createdAt;

    private $createdBy;

    private $updatedAt;

    private $updatedBy;

    private $status;

    private $tautan;

    private $judulTautan;

    private $id;

    public function getTeks(): ?string
    {
        return $this->teks;
    }

    public function setTeks(?string $teks): self
    {
        $this->teks = $teks;

        return $this;
    }

    public function getUrut(): ?int
    {
        return $this->urut;
    }

    public function setUrut(?int $urut): self
    {
        $this->urut = $urut;

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

    public function setUpdatedBy(?int $updatedBy): self
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

    public function getTautan(): ?string
    {
        return $this->tautan;
    }

    public function setTautan(?string $tautan): self
    {
        $this->tautan = $tautan;

        return $this;
    }

    public function getJudulTautan(): ?string
    {
        return $this->judulTautan;
    }

    public function setJudulTautan(?string $judulTautan): self
    {
        $this->judulTautan = $judulTautan;

        return $this;
    }

    public function getId(): ?int
    {
        return $this->id;
    }
}

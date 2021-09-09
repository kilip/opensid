<?php

namespace OpenSID\Prototype\Model;

class LogHapusPenduduk
{
    private $idPend;

    private $nik;

    private $foto;

    private $deletedBy;

    private $deletedAt;

    private $id;

    public function getIdPend(): ?int
    {
        return $this->idPend;
    }

    public function setIdPend(int $idPend): self
    {
        $this->idPend = $idPend;

        return $this;
    }

    public function getNik(): ?string
    {
        return $this->nik;
    }

    public function setNik(string $nik): self
    {
        $this->nik = $nik;

        return $this;
    }

    public function getFoto(): ?string
    {
        return $this->foto;
    }

    public function setFoto(?string $foto): self
    {
        $this->foto = $foto;

        return $this;
    }

    public function getDeletedBy(): ?string
    {
        return $this->deletedBy;
    }

    public function setDeletedBy(?string $deletedBy): self
    {
        $this->deletedBy = $deletedBy;

        return $this;
    }

    public function getDeletedAt(): ?\DateTimeInterface
    {
        return $this->deletedAt;
    }

    public function setDeletedAt(\DateTimeInterface $deletedAt): self
    {
        $this->deletedAt = $deletedAt;

        return $this;
    }

    public function getId(): ?int
    {
        return $this->id;
    }
}

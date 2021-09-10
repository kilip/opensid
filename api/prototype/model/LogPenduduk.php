<?php

namespace OpenSID\Prototype\Model;

class LogPenduduk
{
    private $idPend;

    private $kodePeristiwa;

    private $meninggalDi;

    private $alamatTujuan;

    private $tglLapor;

    private $tglPeristiwa;

    private $catatan;

    private $noKk;

    private $namaKk;

    private $createdAt;

    private $createdBy;

    private $updatedAt;

    private $updatedBy;

    private $id;

    private $refPindah;

    public function getIdPend(): ?string
    {
        return $this->idPend;
    }

    public function setIdPend(string $idPend): self
    {
        $this->idPend = $idPend;

        return $this;
    }

    public function getKodePeristiwa(): ?string
    {
        return $this->kodePeristiwa;
    }

    public function setKodePeristiwa(?string $kodePeristiwa): self
    {
        $this->kodePeristiwa = $kodePeristiwa;

        return $this;
    }

    public function getMeninggalDi(): ?string
    {
        return $this->meninggalDi;
    }

    public function setMeninggalDi(?string $meninggalDi): self
    {
        $this->meninggalDi = $meninggalDi;

        return $this;
    }

    public function getAlamatTujuan(): ?string
    {
        return $this->alamatTujuan;
    }

    public function setAlamatTujuan(?string $alamatTujuan): self
    {
        $this->alamatTujuan = $alamatTujuan;

        return $this;
    }

    public function getTglLapor(): ?\DateTimeInterface
    {
        return $this->tglLapor;
    }

    public function setTglLapor(\DateTimeInterface $tglLapor): self
    {
        $this->tglLapor = $tglLapor;

        return $this;
    }

    public function getTglPeristiwa(): ?\DateTimeInterface
    {
        return $this->tglPeristiwa;
    }

    public function setTglPeristiwa(?\DateTimeInterface $tglPeristiwa): self
    {
        $this->tglPeristiwa = $tglPeristiwa;

        return $this;
    }

    public function getCatatan(): ?string
    {
        return $this->catatan;
    }

    public function setCatatan(?string $catatan): self
    {
        $this->catatan = $catatan;

        return $this;
    }

    public function getNoKk(): ?string
    {
        return $this->noKk;
    }

    public function setNoKk(?string $noKk): self
    {
        $this->noKk = $noKk;

        return $this;
    }

    public function getNamaKk(): ?string
    {
        return $this->namaKk;
    }

    public function setNamaKk(?string $namaKk): self
    {
        $this->namaKk = $namaKk;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->createdAt;
    }

    public function setCreatedAt(?\DateTimeInterface $createdAt): self
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

    public function getUpdatedAt(): ?\DateTimeInterface
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(?\DateTimeInterface $updatedAt): self
    {
        $this->updatedAt = $updatedAt;

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

    public function getId(): ?string
    {
        return $this->id;
    }

    public function getRefPindah(): ?RefPindah
    {
        return $this->refPindah;
    }

    public function setRefPindah(?RefPindah $refPindah): self
    {
        $this->refPindah = $refPindah;

        return $this;
    }
}

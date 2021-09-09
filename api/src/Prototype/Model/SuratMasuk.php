<?php

namespace OpenSID\Prototype\Model;

class SuratMasuk
{
    private $nomorUrut;

    private $tanggalPenerimaan;

    private $nomorSurat;

    private $kodeSurat;

    private $tanggalSurat;

    private $pengirim;

    private $isiSingkat;

    private $isiDisposisi;

    private $berkasScan;

    private $id;

    public function getNomorUrut(): ?int
    {
        return $this->nomorUrut;
    }

    public function setNomorUrut(?int $nomorUrut): self
    {
        $this->nomorUrut = $nomorUrut;

        return $this;
    }

    public function getTanggalPenerimaan(): ?\DateTimeInterface
    {
        return $this->tanggalPenerimaan;
    }

    public function setTanggalPenerimaan(\DateTimeInterface $tanggalPenerimaan): self
    {
        $this->tanggalPenerimaan = $tanggalPenerimaan;

        return $this;
    }

    public function getNomorSurat(): ?string
    {
        return $this->nomorSurat;
    }

    public function setNomorSurat(?string $nomorSurat): self
    {
        $this->nomorSurat = $nomorSurat;

        return $this;
    }

    public function getKodeSurat(): ?string
    {
        return $this->kodeSurat;
    }

    public function setKodeSurat(?string $kodeSurat): self
    {
        $this->kodeSurat = $kodeSurat;

        return $this;
    }

    public function getTanggalSurat(): ?\DateTimeInterface
    {
        return $this->tanggalSurat;
    }

    public function setTanggalSurat(\DateTimeInterface $tanggalSurat): self
    {
        $this->tanggalSurat = $tanggalSurat;

        return $this;
    }

    public function getPengirim(): ?string
    {
        return $this->pengirim;
    }

    public function setPengirim(?string $pengirim): self
    {
        $this->pengirim = $pengirim;

        return $this;
    }

    public function getIsiSingkat(): ?string
    {
        return $this->isiSingkat;
    }

    public function setIsiSingkat(?string $isiSingkat): self
    {
        $this->isiSingkat = $isiSingkat;

        return $this;
    }

    public function getIsiDisposisi(): ?string
    {
        return $this->isiDisposisi;
    }

    public function setIsiDisposisi(?string $isiDisposisi): self
    {
        $this->isiDisposisi = $isiDisposisi;

        return $this;
    }

    public function getBerkasScan(): ?string
    {
        return $this->berkasScan;
    }

    public function setBerkasScan(?string $berkasScan): self
    {
        $this->berkasScan = $berkasScan;

        return $this;
    }

    public function getId(): ?int
    {
        return $this->id;
    }
}

<?php

/*
 * This file is part of the OpenSID project.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace OpenSID\Prototype\Model;

class SuratKeluar
{
    private $nomorUrut;

    private $nomorSurat;

    private $kodeSurat;

    private $tanggalSurat;

    private $tanggalCatat;

    private $tujuan;

    private $isiSingkat;

    private $berkasScan;

    private $ekspedisi;

    private $tanggalPengiriman;

    private $tandaTerima;

    private $keterangan;

    private $createdAt;

    private $createdBy;

    private $updatedAt;

    private $updatedBy;

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

    public function getTanggalCatat(): ?\DateTimeInterface
    {
        return $this->tanggalCatat;
    }

    public function setTanggalCatat(\DateTimeInterface $tanggalCatat): self
    {
        $this->tanggalCatat = $tanggalCatat;

        return $this;
    }

    public function getTujuan(): ?string
    {
        return $this->tujuan;
    }

    public function setTujuan(?string $tujuan): self
    {
        $this->tujuan = $tujuan;

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

    public function getBerkasScan(): ?string
    {
        return $this->berkasScan;
    }

    public function setBerkasScan(?string $berkasScan): self
    {
        $this->berkasScan = $berkasScan;

        return $this;
    }

    public function getEkspedisi()
    {
        return $this->ekspedisi;
    }

    public function setEkspedisi($ekspedisi): self
    {
        $this->ekspedisi = $ekspedisi;

        return $this;
    }

    public function getTanggalPengiriman(): ?\DateTimeInterface
    {
        return $this->tanggalPengiriman;
    }

    public function setTanggalPengiriman(?\DateTimeInterface $tanggalPengiriman): self
    {
        $this->tanggalPengiriman = $tanggalPengiriman;

        return $this;
    }

    public function getTandaTerima(): ?string
    {
        return $this->tandaTerima;
    }

    public function setTandaTerima(?string $tandaTerima): self
    {
        $this->tandaTerima = $tandaTerima;

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

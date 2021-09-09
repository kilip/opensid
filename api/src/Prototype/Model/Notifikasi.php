<?php

/*
 * This file is part of the OpenSID project.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace OpenSID\Prototype\Model;

class Notifikasi
{
    private $kode;

    private $judul;

    private $jenis;

    private $isi;

    private $server;

    private $tglBerikutnya;

    private $updatedAt;

    private $updatedBy;

    private $frekuensi;

    private $aksi;

    private $aktif;

    private $id;

    public function getKode(): ?string
    {
        return $this->kode;
    }

    public function setKode(string $kode): self
    {
        $this->kode = $kode;

        return $this;
    }

    public function getJudul(): ?string
    {
        return $this->judul;
    }

    public function setJudul(string $judul): self
    {
        $this->judul = $judul;

        return $this;
    }

    public function getJenis(): ?string
    {
        return $this->jenis;
    }

    public function setJenis(string $jenis): self
    {
        $this->jenis = $jenis;

        return $this;
    }

    public function getIsi(): ?string
    {
        return $this->isi;
    }

    public function setIsi(string $isi): self
    {
        $this->isi = $isi;

        return $this;
    }

    public function getServer(): ?string
    {
        return $this->server;
    }

    public function setServer(string $server): self
    {
        $this->server = $server;

        return $this;
    }

    public function getTglBerikutnya(): ?\DateTimeInterface
    {
        return $this->tglBerikutnya;
    }

    public function setTglBerikutnya(\DateTimeInterface $tglBerikutnya): self
    {
        $this->tglBerikutnya = $tglBerikutnya;

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

    public function getFrekuensi(): ?int
    {
        return $this->frekuensi;
    }

    public function setFrekuensi(int $frekuensi): self
    {
        $this->frekuensi = $frekuensi;

        return $this;
    }

    public function getAksi(): ?string
    {
        return $this->aksi;
    }

    public function setAksi(string $aksi): self
    {
        $this->aksi = $aksi;

        return $this;
    }

    public function getAktif()
    {
        return $this->aktif;
    }

    public function setAktif($aktif): self
    {
        $this->aktif = $aktif;

        return $this;
    }

    public function getId(): ?int
    {
        return $this->id;
    }
}

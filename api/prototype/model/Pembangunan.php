<?php

/*
 * This file is part of the OpenSID project.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace OpenSID\Prototype\Model;

class Pembangunan
{
    private $idLokasi;

    private $sumberDana;

    private $judul;

    private $keterangan;

    private $lokasi;

    private $lat;

    private $lng;

    private $volume;

    private $tahunAnggaran;

    private $pelaksanaKegiatan;

    private $status;

    private $createdAt;

    private $updatedAt;

    private $foto;

    private $anggaran;

    private $id;

    public function getIdLokasi(): ?string
    {
        return $this->idLokasi;
    }

    public function setIdLokasi(?string $idLokasi): self
    {
        $this->idLokasi = $idLokasi;

        return $this;
    }

    public function getSumberDana(): ?string
    {
        return $this->sumberDana;
    }

    public function setSumberDana(?string $sumberDana): self
    {
        $this->sumberDana = $sumberDana;

        return $this;
    }

    public function getJudul(): ?string
    {
        return $this->judul;
    }

    public function setJudul(?string $judul): self
    {
        $this->judul = $judul;

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

    public function getLokasi(): ?string
    {
        return $this->lokasi;
    }

    public function setLokasi(?string $lokasi): self
    {
        $this->lokasi = $lokasi;

        return $this;
    }

    public function getLat(): ?string
    {
        return $this->lat;
    }

    public function setLat(?string $lat): self
    {
        $this->lat = $lat;

        return $this;
    }

    public function getLng(): ?string
    {
        return $this->lng;
    }

    public function setLng(?string $lng): self
    {
        $this->lng = $lng;

        return $this;
    }

    public function getVolume(): ?string
    {
        return $this->volume;
    }

    public function setVolume(?string $volume): self
    {
        $this->volume = $volume;

        return $this;
    }

    public function getTahunAnggaran(): ?int
    {
        return $this->tahunAnggaran;
    }

    public function setTahunAnggaran(?int $tahunAnggaran): self
    {
        $this->tahunAnggaran = $tahunAnggaran;

        return $this;
    }

    public function getPelaksanaKegiatan(): ?string
    {
        return $this->pelaksanaKegiatan;
    }

    public function setPelaksanaKegiatan(?string $pelaksanaKegiatan): self
    {
        $this->pelaksanaKegiatan = $pelaksanaKegiatan;

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

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->createdAt;
    }

    public function setCreatedAt(?\DateTimeInterface $createdAt): self
    {
        $this->createdAt = $createdAt;

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

    public function getFoto(): ?string
    {
        return $this->foto;
    }

    public function setFoto(?string $foto): self
    {
        $this->foto = $foto;

        return $this;
    }

    public function getAnggaran(): ?string
    {
        return $this->anggaran;
    }

    public function setAnggaran(string $anggaran): self
    {
        $this->anggaran = $anggaran;

        return $this;
    }

    public function getId(): ?string
    {
        return $this->id;
    }
}

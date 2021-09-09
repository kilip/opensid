<?php

/*
 * This file is part of the OpenSID project.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace OpenSID\Prototype\Model;

class Artikel
{
    private $gambar;

    private $isi;

    private $enabled;

    private $tglUpload;

    private $idKategori;

    private $idUser;

    private $judul;

    private $headline;

    private $gambar1;

    private $gambar2;

    private $gambar3;

    private $dokumen;

    private $linkDokumen;

    private $bolehKomentar;

    private $slug;

    private $hit;

    private $id;

    public function getGambar(): ?string
    {
        return $this->gambar;
    }

    public function setGambar(?string $gambar): self
    {
        $this->gambar = $gambar;

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

    public function getIdKategori(): ?int
    {
        return $this->idKategori;
    }

    public function setIdKategori(int $idKategori): self
    {
        $this->idKategori = $idKategori;

        return $this;
    }

    public function getIdUser(): ?int
    {
        return $this->idUser;
    }

    public function setIdUser(int $idUser): self
    {
        $this->idUser = $idUser;

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

    public function getHeadline(): ?int
    {
        return $this->headline;
    }

    public function setHeadline(int $headline): self
    {
        $this->headline = $headline;

        return $this;
    }

    public function getGambar1(): ?string
    {
        return $this->gambar1;
    }

    public function setGambar1(?string $gambar1): self
    {
        $this->gambar1 = $gambar1;

        return $this;
    }

    public function getGambar2(): ?string
    {
        return $this->gambar2;
    }

    public function setGambar2(?string $gambar2): self
    {
        $this->gambar2 = $gambar2;

        return $this;
    }

    public function getGambar3(): ?string
    {
        return $this->gambar3;
    }

    public function setGambar3(?string $gambar3): self
    {
        $this->gambar3 = $gambar3;

        return $this;
    }

    public function getDokumen(): ?string
    {
        return $this->dokumen;
    }

    public function setDokumen(?string $dokumen): self
    {
        $this->dokumen = $dokumen;

        return $this;
    }

    public function getLinkDokumen(): ?string
    {
        return $this->linkDokumen;
    }

    public function setLinkDokumen(?string $linkDokumen): self
    {
        $this->linkDokumen = $linkDokumen;

        return $this;
    }

    public function getBolehKomentar()
    {
        return $this->bolehKomentar;
    }

    public function setBolehKomentar($bolehKomentar): self
    {
        $this->bolehKomentar = $bolehKomentar;

        return $this;
    }

    public function getSlug(): ?string
    {
        return $this->slug;
    }

    public function setSlug(?string $slug): self
    {
        $this->slug = $slug;

        return $this;
    }

    public function getHit(): ?int
    {
        return $this->hit;
    }

    public function setHit(?int $hit): self
    {
        $this->hit = $hit;

        return $this;
    }

    public function getId(): ?int
    {
        return $this->id;
    }
}

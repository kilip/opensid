<?php

/*
 * This file is part of the OpenSID project.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace OpenSID\Blog\Model;

use OpenSID\Application\Contracts\UserInterface;
use OpenSID\Resource\Contracts\ResourceInterface;
use OpenSID\Resource\Contracts\ResourceTrait;

class Artikel implements ResourceInterface
{
    use ResourceTrait;

    protected string $judul;
    protected string $isi;
    protected bool $enabled = true;
    protected \DateTimeInterface $createdAt;
    protected Kategori $kategori;
    protected ?UserInterface $user = null;
    protected ?string $gambar      = null;
    protected ?string $gambar1     = null;
    protected ?string $gambar2     = null;
    protected ?string $gambar3     = null;
    protected ?string $dokumen     = null;
    protected ?string $linkDokumen = null;
    protected bool $bolehKomentar  = true;
    protected ?string $slug        = null;
    protected int $hit             = 0;
    protected ?int $headline       = 0;

    public function getIsi(): string
    {
        return $this->isi;
    }

    public function setIsi(string $isi): void
    {
        $this->isi = $isi;
    }

    public function isEnabled(): bool
    {
        return $this->enabled;
    }

    public function setEnabled(bool $enabled): void
    {
        $this->enabled = $enabled;
    }

    public function getCreatedAt(): \DateTimeInterface
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeInterface $createdAt): void
    {
        if ($createdAt instanceof \DateTime) {
            $createdAt = \DateTimeImmutable::createFromMutable($createdAt);
        }
        $this->createdAt = $createdAt;
    }

    public function getKategori(): Kategori
    {
        return $this->kategori;
    }

    public function setKategori(Kategori $kategori): void
    {
        $this->kategori = $kategori;
    }

    /**
     * @return UserInterface
     */
    public function getUser(): ?UserInterface
    {
        return $this->user;
    }

    public function setUser(UserInterface $user): void
    {
        $this->user = $user;
    }

    public function getJudul(): string
    {
        return $this->judul;
    }

    public function setJudul(string $judul): void
    {
        $this->judul = $judul;
    }

    public function getHeadline(): ?int
    {
        return $this->headline;
    }

    public function setHeadline(?int $headline): void
    {
        $this->headline = $headline;
    }

    public function getGambar(): ?string
    {
        return $this->gambar;
    }

    public function setGambar(?string $gambar): void
    {
        $this->gambar = $gambar;
    }

    public function getGambar1(): ?string
    {
        return $this->gambar1;
    }

    public function setGambar1(?string $gambar1): void
    {
        $this->gambar1 = $gambar1;
    }

    public function getGambar2(): ?string
    {
        return $this->gambar2;
    }

    public function setGambar2(?string $gambar2): void
    {
        $this->gambar2 = $gambar2;
    }

    public function getGambar3(): ?string
    {
        return $this->gambar3;
    }

    public function setGambar3(?string $gambar3): void
    {
        $this->gambar3 = $gambar3;
    }

    public function getDokumen(): ?string
    {
        return $this->dokumen;
    }

    public function setDokumen(?string $dokumen): void
    {
        $this->dokumen = $dokumen;
    }

    public function getLinkDokumen(): ?string
    {
        return $this->linkDokumen;
    }

    public function setLinkDokumen(?string $linkDokumen): void
    {
        $this->linkDokumen = $linkDokumen;
    }

    public function isBolehKomentar(): bool
    {
        return $this->bolehKomentar;
    }

    public function setBolehKomentar(bool $bolehKomentar): void
    {
        $this->bolehKomentar = $bolehKomentar;
    }

    public function getSlug(): ?string
    {
        return $this->slug;
    }

    public function setSlug(?string $slug): void
    {
        $this->slug = $slug;
    }

    public function getHit(): int
    {
        return $this->hit;
    }

    public function setHit(int $hit): void
    {
        $this->hit = $hit;
    }
}

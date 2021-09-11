<?php

/*
 * This file is part of the OpenSID project.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace OpenSID\Blog\Model;

class Kategori
{
    protected int $id;
    protected string $kategori;
    protected int $tipe = 1;
    protected int $urut;
    protected bool $enabled = true;
    protected int $parent   = 0;
    protected string $slug;

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getKategori(): string
    {
        return $this->kategori;
    }

    public function setKategori(string $kategori): void
    {
        $this->kategori = $kategori;
    }

    public function getTipe(): int
    {
        return $this->tipe;
    }

    public function setTipe(int $tipe): void
    {
        $this->tipe = $tipe;
    }

    public function getUrut(): int
    {
        return $this->urut;
    }

    public function setUrut(int $urut): void
    {
        $this->urut = $urut;
    }

    public function isEnabled(): bool
    {
        return $this->enabled;
    }

    public function setEnabled(bool $enabled): void
    {
        $this->enabled = $enabled;
    }

    public function getParent(): int
    {
        return $this->parent;
    }

    public function setParent(int $parent): void
    {
        $this->parent = $parent;
    }

    public function getSlug(): string
    {
        return $this->slug;
    }

    public function setSlug(string $slug): void
    {
        $this->slug = $slug;
    }
}

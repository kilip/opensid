<?php

/*
 * This file is part of the OpenSID project.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace OpenSID\Prototype\Model;

class MediaSosial
{
    private $gambar;

    private $link;

    private $nama;

    private $tipe;

    private $enabled;

    private $id;

    public function getGambar(): ?string
    {
        return $this->gambar;
    }

    public function setGambar(string $gambar): self
    {
        $this->gambar = $gambar;

        return $this;
    }

    public function getLink(): ?string
    {
        return $this->link;
    }

    public function setLink(?string $link): self
    {
        $this->link = $link;

        return $this;
    }

    public function getNama(): ?string
    {
        return $this->nama;
    }

    public function setNama(string $nama): self
    {
        $this->nama = $nama;

        return $this;
    }

    public function getTipe()
    {
        return $this->tipe;
    }

    public function setTipe($tipe): self
    {
        $this->tipe = $tipe;

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

    public function getId(): ?int
    {
        return $this->id;
    }
}

<?php

/*
 * This file is part of the OpenSID project.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace OpenSID\Prototype\Model;

class Point
{
    private $nama;

    private $simbol;

    private $tipe;

    private $parrent;

    private $enabled;

    private $id;

    public function getNama(): ?string
    {
        return $this->nama;
    }

    public function setNama(string $nama): self
    {
        $this->nama = $nama;

        return $this;
    }

    public function getSimbol(): ?string
    {
        return $this->simbol;
    }

    public function setSimbol(?string $simbol): self
    {
        $this->simbol = $simbol;

        return $this;
    }

    public function getTipe(): ?int
    {
        return $this->tipe;
    }

    public function setTipe(?int $tipe): self
    {
        $this->tipe = $tipe;

        return $this;
    }

    public function getParrent(): ?int
    {
        return $this->parrent;
    }

    public function setParrent(int $parrent): self
    {
        $this->parrent = $parrent;

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

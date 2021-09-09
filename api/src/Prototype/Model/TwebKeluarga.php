<?php

/*
 * This file is part of the OpenSID project.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace OpenSID\Prototype\Model;

class TwebKeluarga
{
    private $noKk;

    private $nikKepala;

    private $tglDaftar;

    private $kelasSosial;

    private $tglCetakKk;

    private $alamat;

    private $idCluster;

    private $id;

    public function getNoKk(): ?string
    {
        return $this->noKk;
    }

    public function setNoKk(?string $noKk): self
    {
        $this->noKk = $noKk;

        return $this;
    }

    public function getNikKepala(): ?string
    {
        return $this->nikKepala;
    }

    public function setNikKepala(?string $nikKepala): self
    {
        $this->nikKepala = $nikKepala;

        return $this;
    }

    public function getTglDaftar(): ?\DateTimeInterface
    {
        return $this->tglDaftar;
    }

    public function setTglDaftar(?\DateTimeInterface $tglDaftar): self
    {
        $this->tglDaftar = $tglDaftar;

        return $this;
    }

    public function getKelasSosial(): ?int
    {
        return $this->kelasSosial;
    }

    public function setKelasSosial(?int $kelasSosial): self
    {
        $this->kelasSosial = $kelasSosial;

        return $this;
    }

    public function getTglCetakKk(): ?\DateTimeInterface
    {
        return $this->tglCetakKk;
    }

    public function setTglCetakKk(?\DateTimeInterface $tglCetakKk): self
    {
        $this->tglCetakKk = $tglCetakKk;

        return $this;
    }

    public function getAlamat(): ?string
    {
        return $this->alamat;
    }

    public function setAlamat(?string $alamat): self
    {
        $this->alamat = $alamat;

        return $this;
    }

    public function getIdCluster(): ?int
    {
        return $this->idCluster;
    }

    public function setIdCluster(?int $idCluster): self
    {
        $this->idCluster = $idCluster;

        return $this;
    }

    public function getId(): ?int
    {
        return $this->id;
    }
}

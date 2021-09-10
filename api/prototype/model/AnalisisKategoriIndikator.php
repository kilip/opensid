<?php

/*
 * This file is part of the OpenSID project.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace OpenSID\Prototype\Model;

class AnalisisKategoriIndikator
{
    private $idMaster;

    private $kategori;

    private $kategoriKode;

    private $id;

    public function getIdMaster(): ?int
    {
        return $this->idMaster;
    }

    public function setIdMaster(int $idMaster): self
    {
        $this->idMaster = $idMaster;

        return $this;
    }

    public function getKategori(): ?string
    {
        return $this->kategori;
    }

    public function setKategori(string $kategori): self
    {
        $this->kategori = $kategori;

        return $this;
    }

    public function getKategoriKode(): ?string
    {
        return $this->kategoriKode;
    }

    public function setKategoriKode(?string $kategoriKode): self
    {
        $this->kategoriKode = $kategoriKode;

        return $this;
    }

    public function getId(): ?string
    {
        return $this->id;
    }
}

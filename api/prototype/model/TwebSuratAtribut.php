<?php

/*
 * This file is part of the OpenSID project.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace OpenSID\Prototype\Model;

class TwebSuratAtribut
{
    private $idSurat;

    private $idTipe;

    private $nama;

    private $long;

    private $kode;

    private $id;

    public function getIdSurat(): ?string
    {
        return $this->idSurat;
    }

    public function setIdSurat(string $idSurat): self
    {
        $this->idSurat = $idSurat;

        return $this;
    }

    public function getIdTipe(): ?int
    {
        return $this->idTipe;
    }

    public function setIdTipe(int $idTipe): self
    {
        $this->idTipe = $idTipe;

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

    public function getLong(): ?int
    {
        return $this->long;
    }

    public function setLong(int $long): self
    {
        $this->long = $long;

        return $this;
    }

    public function getKode(): ?int
    {
        return $this->kode;
    }

    public function setKode(int $kode): self
    {
        $this->kode = $kode;

        return $this;
    }

    public function getId(): ?string
    {
        return $this->id;
    }
}

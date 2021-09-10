<?php

/*
 * This file is part of the OpenSID project.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace OpenSID\Prototype\Model;

class AnalisisPeriode
{
    private $idMaster;

    private $nama;

    private $idState;

    private $aktif;

    private $keterangan;

    private $tahunPelaksanaan;

    private $id;

    public function getIdMaster(): ?string
    {
        return $this->idMaster;
    }

    public function setIdMaster(string $idMaster): self
    {
        $this->idMaster = $idMaster;

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

    public function getIdState(): ?int
    {
        return $this->idState;
    }

    public function setIdState(int $idState): self
    {
        $this->idState = $idState;

        return $this;
    }

    public function getAktif(): ?bool
    {
        return $this->aktif;
    }

    public function setAktif(bool $aktif): self
    {
        $this->aktif = $aktif;

        return $this;
    }

    public function getKeterangan(): ?string
    {
        return $this->keterangan;
    }

    public function setKeterangan(string $keterangan): self
    {
        $this->keterangan = $keterangan;

        return $this;
    }

    public function getTahunPelaksanaan(): ?int
    {
        return $this->tahunPelaksanaan;
    }

    public function setTahunPelaksanaan(int $tahunPelaksanaan): self
    {
        $this->tahunPelaksanaan = $tahunPelaksanaan;

        return $this;
    }

    public function getId(): ?string
    {
        return $this->id;
    }
}

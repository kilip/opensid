<?php

/*
 * This file is part of the OpenSID project.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace OpenSID\Prototype\Model;

class AnalisisMaster
{
    private $nama;

    private $subjekTipe;

    private $lock;

    private $deskripsi;

    private $kodeAnalisis;

    private $idKelompok;

    private $pembagi;

    private $idChild;

    private $formatImpor;

    private $jenis;

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

    public function getSubjekTipe()
    {
        return $this->subjekTipe;
    }

    public function setSubjekTipe($subjekTipe): self
    {
        $this->subjekTipe = $subjekTipe;

        return $this;
    }

    public function getLock()
    {
        return $this->lock;
    }

    public function setLock($lock): self
    {
        $this->lock = $lock;

        return $this;
    }

    public function getDeskripsi(): ?string
    {
        return $this->deskripsi;
    }

    public function setDeskripsi(string $deskripsi): self
    {
        $this->deskripsi = $deskripsi;

        return $this;
    }

    public function getKodeAnalisis(): ?string
    {
        return $this->kodeAnalisis;
    }

    public function setKodeAnalisis(string $kodeAnalisis): self
    {
        $this->kodeAnalisis = $kodeAnalisis;

        return $this;
    }

    public function getIdKelompok(): ?int
    {
        return $this->idKelompok;
    }

    public function setIdKelompok(?int $idKelompok): self
    {
        $this->idKelompok = $idKelompok;

        return $this;
    }

    public function getPembagi(): ?string
    {
        return $this->pembagi;
    }

    public function setPembagi(string $pembagi): self
    {
        $this->pembagi = $pembagi;

        return $this;
    }

    public function getIdChild(): ?int
    {
        return $this->idChild;
    }

    public function setIdChild(?int $idChild): self
    {
        $this->idChild = $idChild;

        return $this;
    }

    public function getFormatImpor()
    {
        return $this->formatImpor;
    }

    public function setFormatImpor($formatImpor): self
    {
        $this->formatImpor = $formatImpor;

        return $this;
    }

    public function getJenis()
    {
        return $this->jenis;
    }

    public function setJenis($jenis): self
    {
        $this->jenis = $jenis;

        return $this;
    }

    public function getId(): ?int
    {
        return $this->id;
    }
}

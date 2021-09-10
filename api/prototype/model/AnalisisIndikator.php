<?php

/*
 * This file is part of the OpenSID project.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace OpenSID\Prototype\Model;

class AnalisisIndikator
{
    private $idMaster;

    private $nomor;

    private $pertanyaan;

    private $idTipe;

    private $bobot;

    private $actAnalisis;

    private $idKategori;

    private $isPublik;

    private $isTeks;

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

    public function getNomor(): ?int
    {
        return $this->nomor;
    }

    public function setNomor(int $nomor): self
    {
        $this->nomor = $nomor;

        return $this;
    }

    public function getPertanyaan(): ?string
    {
        return $this->pertanyaan;
    }

    public function setPertanyaan(string $pertanyaan): self
    {
        $this->pertanyaan = $pertanyaan;

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

    public function getBobot(): ?int
    {
        return $this->bobot;
    }

    public function setBobot(int $bobot): self
    {
        $this->bobot = $bobot;

        return $this;
    }

    public function getActAnalisis(): ?bool
    {
        return $this->actAnalisis;
    }

    public function setActAnalisis(bool $actAnalisis): self
    {
        $this->actAnalisis = $actAnalisis;

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

    public function getIsPublik(): ?bool
    {
        return $this->isPublik;
    }

    public function setIsPublik(bool $isPublik): self
    {
        $this->isPublik = $isPublik;

        return $this;
    }

    public function getIsTeks(): ?bool
    {
        return $this->isTeks;
    }

    public function setIsTeks(bool $isTeks): self
    {
        $this->isTeks = $isTeks;

        return $this;
    }

    public function getId(): ?string
    {
        return $this->id;
    }
}

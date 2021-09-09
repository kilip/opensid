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

    public function getIdMaster(): ?int
    {
        return $this->idMaster;
    }

    public function setIdMaster(int $idMaster): self
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

    public function getIdTipe()
    {
        return $this->idTipe;
    }

    public function setIdTipe($idTipe): self
    {
        $this->idTipe = $idTipe;

        return $this;
    }

    public function getBobot()
    {
        return $this->bobot;
    }

    public function setBobot($bobot): self
    {
        $this->bobot = $bobot;

        return $this;
    }

    public function getActAnalisis()
    {
        return $this->actAnalisis;
    }

    public function setActAnalisis($actAnalisis): self
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

    public function getIsPublik()
    {
        return $this->isPublik;
    }

    public function setIsPublik($isPublik): self
    {
        $this->isPublik = $isPublik;

        return $this;
    }

    public function getIsTeks()
    {
        return $this->isTeks;
    }

    public function setIsTeks($isTeks): self
    {
        $this->isTeks = $isTeks;

        return $this;
    }

    public function getId(): ?int
    {
        return $this->id;
    }
}

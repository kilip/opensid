<?php

/*
 * This file is part of the OpenSID project.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace OpenSID\Prototype\Model;

class Covid19Pantau
{
    private $tanggalJam;

    private $suhuTubuh;

    private $batuk;

    private $flu;

    private $sesakNafas;

    private $keluhanLain;

    private $statusCovid;

    private $id;

    private $idPemudik;

    public function getTanggalJam(): ?\DateTimeInterface
    {
        return $this->tanggalJam;
    }

    public function setTanggalJam(?\DateTimeInterface $tanggalJam): self
    {
        $this->tanggalJam = $tanggalJam;

        return $this;
    }

    public function getSuhuTubuh(): ?string
    {
        return $this->suhuTubuh;
    }

    public function setSuhuTubuh(?string $suhuTubuh): self
    {
        $this->suhuTubuh = $suhuTubuh;

        return $this;
    }

    public function getBatuk(): ?string
    {
        return $this->batuk;
    }

    public function setBatuk(?string $batuk): self
    {
        $this->batuk = $batuk;

        return $this;
    }

    public function getFlu(): ?string
    {
        return $this->flu;
    }

    public function setFlu(?string $flu): self
    {
        $this->flu = $flu;

        return $this;
    }

    public function getSesakNafas(): ?string
    {
        return $this->sesakNafas;
    }

    public function setSesakNafas(?string $sesakNafas): self
    {
        $this->sesakNafas = $sesakNafas;

        return $this;
    }

    public function getKeluhanLain(): ?string
    {
        return $this->keluhanLain;
    }

    public function setKeluhanLain(?string $keluhanLain): self
    {
        $this->keluhanLain = $keluhanLain;

        return $this;
    }

    public function getStatusCovid(): ?string
    {
        return $this->statusCovid;
    }

    public function setStatusCovid(?string $statusCovid): self
    {
        $this->statusCovid = $statusCovid;

        return $this;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdPemudik(): ?Covid19Pemudik
    {
        return $this->idPemudik;
    }

    public function setIdPemudik(?Covid19Pemudik $idPemudik): self
    {
        $this->idPemudik = $idPemudik;

        return $this;
    }
}

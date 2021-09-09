<?php

/*
 * This file is part of the OpenSID project.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace OpenSID\Prototype\Model;

class KeuanganTaRpjmMisi
{
    private $idMisi;

    private $kdDesa;

    private $idVisi;

    private $noMisi;

    private $uraianMisi;

    private $id;

    private $idKeuanganMaster;

    public function getIdMisi(): ?string
    {
        return $this->idMisi;
    }

    public function setIdMisi(string $idMisi): self
    {
        $this->idMisi = $idMisi;

        return $this;
    }

    public function getKdDesa(): ?string
    {
        return $this->kdDesa;
    }

    public function setKdDesa(string $kdDesa): self
    {
        $this->kdDesa = $kdDesa;

        return $this;
    }

    public function getIdVisi(): ?string
    {
        return $this->idVisi;
    }

    public function setIdVisi(string $idVisi): self
    {
        $this->idVisi = $idVisi;

        return $this;
    }

    public function getNoMisi(): ?string
    {
        return $this->noMisi;
    }

    public function setNoMisi(string $noMisi): self
    {
        $this->noMisi = $noMisi;

        return $this;
    }

    public function getUraianMisi(): ?string
    {
        return $this->uraianMisi;
    }

    public function setUraianMisi(?string $uraianMisi): self
    {
        $this->uraianMisi = $uraianMisi;

        return $this;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdKeuanganMaster(): ?KeuanganMaster
    {
        return $this->idKeuanganMaster;
    }

    public function setIdKeuanganMaster(?KeuanganMaster $idKeuanganMaster): self
    {
        $this->idKeuanganMaster = $idKeuanganMaster;

        return $this;
    }
}

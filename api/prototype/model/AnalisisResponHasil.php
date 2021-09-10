<?php

/*
 * This file is part of the OpenSID project.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace OpenSID\Prototype\Model;

class AnalisisResponHasil
{
    private $idMaster;

    private $idPeriode;

    private $idSubjek;

    private $akumulasi;

    private $tglUpdate;

    private $uuid;

    public function getIdMaster(): ?int
    {
        return $this->idMaster;
    }

    public function setIdMaster(int $idMaster): self
    {
        $this->idMaster = $idMaster;

        return $this;
    }

    public function getIdPeriode(): ?int
    {
        return $this->idPeriode;
    }

    public function setIdPeriode(int $idPeriode): self
    {
        $this->idPeriode = $idPeriode;

        return $this;
    }

    public function getIdSubjek(): ?string
    {
        return $this->idSubjek;
    }

    public function setIdSubjek(string $idSubjek): self
    {
        $this->idSubjek = $idSubjek;

        return $this;
    }

    public function getAkumulasi(): ?float
    {
        return $this->akumulasi;
    }

    public function setAkumulasi(float $akumulasi): self
    {
        $this->akumulasi = $akumulasi;

        return $this;
    }

    public function getTglUpdate(): ?\DateTimeInterface
    {
        return $this->tglUpdate;
    }

    public function setTglUpdate(\DateTimeInterface $tglUpdate): self
    {
        $this->tglUpdate = $tglUpdate;

        return $this;
    }

    public function getUuid(): ?string
    {
        return $this->uuid;
    }
}

<?php

/*
 * This file is part of the OpenSID project.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace OpenSID\Prototype\Model;

class LogKeluarga
{
    private $idKk;

    private $kkSex;

    private $idPeristiwa;

    private $tglPeristiwa;

    private $id;

    public function getIdKk(): ?int
    {
        return $this->idKk;
    }

    public function setIdKk(int $idKk): self
    {
        $this->idKk = $idKk;

        return $this;
    }

    public function getKkSex()
    {
        return $this->kkSex;
    }

    public function setKkSex($kkSex): self
    {
        $this->kkSex = $kkSex;

        return $this;
    }

    public function getIdPeristiwa(): ?int
    {
        return $this->idPeristiwa;
    }

    public function setIdPeristiwa(int $idPeristiwa): self
    {
        $this->idPeristiwa = $idPeristiwa;

        return $this;
    }

    public function getTglPeristiwa(): ?\DateTimeInterface
    {
        return $this->tglPeristiwa;
    }

    public function setTglPeristiwa(\DateTimeInterface $tglPeristiwa): self
    {
        $this->tglPeristiwa = $tglPeristiwa;

        return $this;
    }

    public function getId(): ?int
    {
        return $this->id;
    }
}

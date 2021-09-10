<?php

/*
 * This file is part of the OpenSID project.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace OpenSID\Prototype\Model;

class KeuanganRefSumber
{
    private $kode;

    private $namaSumber;

    private $urut;

    private $id;

    private $idKeuanganMaster;

    public function getKode(): ?string
    {
        return $this->kode;
    }

    public function setKode(string $kode): self
    {
        $this->kode = $kode;

        return $this;
    }

    public function getNamaSumber(): ?string
    {
        return $this->namaSumber;
    }

    public function setNamaSumber(string $namaSumber): self
    {
        $this->namaSumber = $namaSumber;

        return $this;
    }

    public function getUrut(): ?string
    {
        return $this->urut;
    }

    public function setUrut(string $urut): self
    {
        $this->urut = $urut;

        return $this;
    }

    public function getId(): ?string
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

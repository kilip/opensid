<?php

/*
 * This file is part of the OpenSID project.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace OpenSID\Prototype\Model;

class KeuanganRefRek4
{
    private $jenis;

    private $obyek;

    private $namaObyek;

    private $peraturan;

    private $id;

    private $idKeuanganMaster;

    public function getJenis(): ?string
    {
        return $this->jenis;
    }

    public function setJenis(string $jenis): self
    {
        $this->jenis = $jenis;

        return $this;
    }

    public function getObyek(): ?string
    {
        return $this->obyek;
    }

    public function setObyek(string $obyek): self
    {
        $this->obyek = $obyek;

        return $this;
    }

    public function getNamaObyek(): ?string
    {
        return $this->namaObyek;
    }

    public function setNamaObyek(string $namaObyek): self
    {
        $this->namaObyek = $namaObyek;

        return $this;
    }

    public function getPeraturan(): ?string
    {
        return $this->peraturan;
    }

    public function setPeraturan(string $peraturan): self
    {
        $this->peraturan = $peraturan;

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

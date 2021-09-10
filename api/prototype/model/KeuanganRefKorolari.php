<?php

/*
 * This file is part of the OpenSID project.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace OpenSID\Prototype\Model;

class KeuanganRefKorolari
{
    private $kdRincian;

    private $kdRekdb;

    private $kdRekkd;

    private $jenis;

    private $id;

    private $idKeuanganMaster;

    public function getKdRincian(): ?string
    {
        return $this->kdRincian;
    }

    public function setKdRincian(string $kdRincian): self
    {
        $this->kdRincian = $kdRincian;

        return $this;
    }

    public function getKdRekdb(): ?string
    {
        return $this->kdRekdb;
    }

    public function setKdRekdb(string $kdRekdb): self
    {
        $this->kdRekdb = $kdRekdb;

        return $this;
    }

    public function getKdRekkd(): ?string
    {
        return $this->kdRekkd;
    }

    public function setKdRekkd(string $kdRekkd): self
    {
        $this->kdRekkd = $kdRekkd;

        return $this;
    }

    public function getJenis(): ?string
    {
        return $this->jenis;
    }

    public function setJenis(?string $jenis): self
    {
        $this->jenis = $jenis;

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

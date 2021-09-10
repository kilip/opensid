<?php

/*
 * This file is part of the OpenSID project.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace OpenSID\Prototype\Model;

class KeuanganRefBankDesa
{
    private $tahun;

    private $kdDesa;

    private $kdRincian;

    private $norekBank;

    private $namaBank;

    private $kantorCabang;

    private $namaPemilik;

    private $alamatPemilik;

    private $noIdentitas;

    private $noTelepon;

    private $idBank;

    private $id;

    private $idKeuanganMaster;

    public function getTahun(): ?string
    {
        return $this->tahun;
    }

    public function setTahun(string $tahun): self
    {
        $this->tahun = $tahun;

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

    public function getKdRincian(): ?string
    {
        return $this->kdRincian;
    }

    public function setKdRincian(string $kdRincian): self
    {
        $this->kdRincian = $kdRincian;

        return $this;
    }

    public function getNorekBank(): ?string
    {
        return $this->norekBank;
    }

    public function setNorekBank(string $norekBank): self
    {
        $this->norekBank = $norekBank;

        return $this;
    }

    public function getNamaBank(): ?string
    {
        return $this->namaBank;
    }

    public function setNamaBank(string $namaBank): self
    {
        $this->namaBank = $namaBank;

        return $this;
    }

    public function getKantorCabang(): ?string
    {
        return $this->kantorCabang;
    }

    public function setKantorCabang(?string $kantorCabang): self
    {
        $this->kantorCabang = $kantorCabang;

        return $this;
    }

    public function getNamaPemilik(): ?string
    {
        return $this->namaPemilik;
    }

    public function setNamaPemilik(?string $namaPemilik): self
    {
        $this->namaPemilik = $namaPemilik;

        return $this;
    }

    public function getAlamatPemilik(): ?string
    {
        return $this->alamatPemilik;
    }

    public function setAlamatPemilik(?string $alamatPemilik): self
    {
        $this->alamatPemilik = $alamatPemilik;

        return $this;
    }

    public function getNoIdentitas(): ?string
    {
        return $this->noIdentitas;
    }

    public function setNoIdentitas(?string $noIdentitas): self
    {
        $this->noIdentitas = $noIdentitas;

        return $this;
    }

    public function getNoTelepon(): ?string
    {
        return $this->noTelepon;
    }

    public function setNoTelepon(?string $noTelepon): self
    {
        $this->noTelepon = $noTelepon;

        return $this;
    }

    public function getIdBank(): ?string
    {
        return $this->idBank;
    }

    public function setIdBank(?string $idBank): self
    {
        $this->idBank = $idBank;

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

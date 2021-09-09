<?php

/*
 * This file is part of the OpenSID project.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace OpenSID\Prototype\Model;

class KeuanganTaPerangkat
{
    private $tahun;

    private $kdDesa;

    private $kdJabatan;

    private $noId;

    private $namaPerangkat;

    private $alamatPerangkat;

    private $nomorHp;

    private $rekBank;

    private $namaBank;

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

    public function getKdJabatan(): ?string
    {
        return $this->kdJabatan;
    }

    public function setKdJabatan(string $kdJabatan): self
    {
        $this->kdJabatan = $kdJabatan;

        return $this;
    }

    public function getNoId(): ?string
    {
        return $this->noId;
    }

    public function setNoId(string $noId): self
    {
        $this->noId = $noId;

        return $this;
    }

    public function getNamaPerangkat(): ?string
    {
        return $this->namaPerangkat;
    }

    public function setNamaPerangkat(string $namaPerangkat): self
    {
        $this->namaPerangkat = $namaPerangkat;

        return $this;
    }

    public function getAlamatPerangkat(): ?string
    {
        return $this->alamatPerangkat;
    }

    public function setAlamatPerangkat(string $alamatPerangkat): self
    {
        $this->alamatPerangkat = $alamatPerangkat;

        return $this;
    }

    public function getNomorHp(): ?string
    {
        return $this->nomorHp;
    }

    public function setNomorHp(string $nomorHp): self
    {
        $this->nomorHp = $nomorHp;

        return $this;
    }

    public function getRekBank(): ?string
    {
        return $this->rekBank;
    }

    public function setRekBank(string $rekBank): self
    {
        $this->rekBank = $rekBank;

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

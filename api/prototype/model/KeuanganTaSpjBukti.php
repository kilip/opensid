<?php

/*
 * This file is part of the OpenSID project.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace OpenSID\Prototype\Model;

class KeuanganTaSpjBukti
{
    private $tahun;

    private $noSpj;

    private $kdKeg;

    private $kdRincian;

    private $noBukti;

    private $tglBukti;

    private $sumberdana;

    private $kdDesa;

    private $nmPenerima;

    private $alamat;

    private $rekBank;

    private $nmBank;

    private $npwp;

    private $keterangan;

    private $nilai;

    private $kdSubrinci;

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

    public function getNoSpj(): ?string
    {
        return $this->noSpj;
    }

    public function setNoSpj(string $noSpj): self
    {
        $this->noSpj = $noSpj;

        return $this;
    }

    public function getKdKeg(): ?string
    {
        return $this->kdKeg;
    }

    public function setKdKeg(string $kdKeg): self
    {
        $this->kdKeg = $kdKeg;

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

    public function getNoBukti(): ?string
    {
        return $this->noBukti;
    }

    public function setNoBukti(string $noBukti): self
    {
        $this->noBukti = $noBukti;

        return $this;
    }

    public function getTglBukti(): ?string
    {
        return $this->tglBukti;
    }

    public function setTglBukti(string $tglBukti): self
    {
        $this->tglBukti = $tglBukti;

        return $this;
    }

    public function getSumberdana(): ?string
    {
        return $this->sumberdana;
    }

    public function setSumberdana(string $sumberdana): self
    {
        $this->sumberdana = $sumberdana;

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

    public function getNmPenerima(): ?string
    {
        return $this->nmPenerima;
    }

    public function setNmPenerima(string $nmPenerima): self
    {
        $this->nmPenerima = $nmPenerima;

        return $this;
    }

    public function getAlamat(): ?string
    {
        return $this->alamat;
    }

    public function setAlamat(string $alamat): self
    {
        $this->alamat = $alamat;

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

    public function getNmBank(): ?string
    {
        return $this->nmBank;
    }

    public function setNmBank(string $nmBank): self
    {
        $this->nmBank = $nmBank;

        return $this;
    }

    public function getNpwp(): ?string
    {
        return $this->npwp;
    }

    public function setNpwp(string $npwp): self
    {
        $this->npwp = $npwp;

        return $this;
    }

    public function getKeterangan(): ?string
    {
        return $this->keterangan;
    }

    public function setKeterangan(?string $keterangan): self
    {
        $this->keterangan = $keterangan;

        return $this;
    }

    public function getNilai(): ?string
    {
        return $this->nilai;
    }

    public function setNilai(string $nilai): self
    {
        $this->nilai = $nilai;

        return $this;
    }

    public function getKdSubrinci(): ?string
    {
        return $this->kdSubrinci;
    }

    public function setKdSubrinci(?string $kdSubrinci): self
    {
        $this->kdSubrinci = $kdSubrinci;

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

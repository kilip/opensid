<?php

/*
 * This file is part of the OpenSID project.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace OpenSID\Prototype\Model;

class KeuanganTaAnggaranLog
{
    private $kdposting;

    private $tahun;

    private $kdDesa;

    private $noPerdes;

    private $tglposting;

    private $userid;

    private $kunci;

    private $noPerkades;

    private $petugas;

    private $tanggal;

    private $id;

    private $idKeuanganMaster;

    public function getKdposting(): ?string
    {
        return $this->kdposting;
    }

    public function setKdposting(string $kdposting): self
    {
        $this->kdposting = $kdposting;

        return $this;
    }

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

    public function getNoPerdes(): ?string
    {
        return $this->noPerdes;
    }

    public function setNoPerdes(string $noPerdes): self
    {
        $this->noPerdes = $noPerdes;

        return $this;
    }

    public function getTglposting(): ?string
    {
        return $this->tglposting;
    }

    public function setTglposting(string $tglposting): self
    {
        $this->tglposting = $tglposting;

        return $this;
    }

    public function getUserid(): ?string
    {
        return $this->userid;
    }

    public function setUserid(string $userid): self
    {
        $this->userid = $userid;

        return $this;
    }

    public function getKunci(): ?string
    {
        return $this->kunci;
    }

    public function setKunci(string $kunci): self
    {
        $this->kunci = $kunci;

        return $this;
    }

    public function getNoPerkades(): ?string
    {
        return $this->noPerkades;
    }

    public function setNoPerkades(?string $noPerkades): self
    {
        $this->noPerkades = $noPerkades;

        return $this;
    }

    public function getPetugas(): ?string
    {
        return $this->petugas;
    }

    public function setPetugas(?string $petugas): self
    {
        $this->petugas = $petugas;

        return $this;
    }

    public function getTanggal(): ?string
    {
        return $this->tanggal;
    }

    public function setTanggal(?string $tanggal): self
    {
        $this->tanggal = $tanggal;

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

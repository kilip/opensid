<?php

/*
 * This file is part of the OpenSID project.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace OpenSID\Prototype\Model;

class KeuanganTaSpp
{
    private $tahun;

    private $noSpp;

    private $tglSpp;

    private $jnSpp;

    private $kdDesa;

    private $keterangan;

    private $jumlah;

    private $potongan;

    private $status;

    private $f10;

    private $f11;

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

    public function getNoSpp(): ?string
    {
        return $this->noSpp;
    }

    public function setNoSpp(string $noSpp): self
    {
        $this->noSpp = $noSpp;

        return $this;
    }

    public function getTglSpp(): ?string
    {
        return $this->tglSpp;
    }

    public function setTglSpp(string $tglSpp): self
    {
        $this->tglSpp = $tglSpp;

        return $this;
    }

    public function getJnSpp(): ?string
    {
        return $this->jnSpp;
    }

    public function setJnSpp(string $jnSpp): self
    {
        $this->jnSpp = $jnSpp;

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

    public function getKeterangan(): ?string
    {
        return $this->keterangan;
    }

    public function setKeterangan(?string $keterangan): self
    {
        $this->keterangan = $keterangan;

        return $this;
    }

    public function getJumlah(): ?string
    {
        return $this->jumlah;
    }

    public function setJumlah(string $jumlah): self
    {
        $this->jumlah = $jumlah;

        return $this;
    }

    public function getPotongan(): ?string
    {
        return $this->potongan;
    }

    public function setPotongan(string $potongan): self
    {
        $this->potongan = $potongan;

        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(string $status): self
    {
        $this->status = $status;

        return $this;
    }

    public function getF10(): ?string
    {
        return $this->f10;
    }

    public function setF10(?string $f10): self
    {
        $this->f10 = $f10;

        return $this;
    }

    public function getF11(): ?string
    {
        return $this->f11;
    }

    public function setF11(?string $f11): self
    {
        $this->f11 = $f11;

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

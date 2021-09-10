<?php

/*
 * This file is part of the OpenSID project.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace OpenSID\Prototype\Model;

class KeuanganTaTbp
{
    private $tahun;

    private $noBukti;

    private $tglBukti;

    private $kdDesa;

    private $uraian;

    private $nmPenyetor;

    private $alamatPenyetor;

    private $ttdPenyetor;

    private $norekBank;

    private $namaBank;

    private $jumlah;

    private $nmBendahara;

    private $jbtBendahara;

    private $status;

    private $kdbayar;

    private $refBayar;

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

    public function getKdDesa(): ?string
    {
        return $this->kdDesa;
    }

    public function setKdDesa(string $kdDesa): self
    {
        $this->kdDesa = $kdDesa;

        return $this;
    }

    public function getUraian(): ?string
    {
        return $this->uraian;
    }

    public function setUraian(?string $uraian): self
    {
        $this->uraian = $uraian;

        return $this;
    }

    public function getNmPenyetor(): ?string
    {
        return $this->nmPenyetor;
    }

    public function setNmPenyetor(string $nmPenyetor): self
    {
        $this->nmPenyetor = $nmPenyetor;

        return $this;
    }

    public function getAlamatPenyetor(): ?string
    {
        return $this->alamatPenyetor;
    }

    public function setAlamatPenyetor(string $alamatPenyetor): self
    {
        $this->alamatPenyetor = $alamatPenyetor;

        return $this;
    }

    public function getTtdPenyetor(): ?string
    {
        return $this->ttdPenyetor;
    }

    public function setTtdPenyetor(string $ttdPenyetor): self
    {
        $this->ttdPenyetor = $ttdPenyetor;

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

    public function getJumlah(): ?string
    {
        return $this->jumlah;
    }

    public function setJumlah(string $jumlah): self
    {
        $this->jumlah = $jumlah;

        return $this;
    }

    public function getNmBendahara(): ?string
    {
        return $this->nmBendahara;
    }

    public function setNmBendahara(string $nmBendahara): self
    {
        $this->nmBendahara = $nmBendahara;

        return $this;
    }

    public function getJbtBendahara(): ?string
    {
        return $this->jbtBendahara;
    }

    public function setJbtBendahara(string $jbtBendahara): self
    {
        $this->jbtBendahara = $jbtBendahara;

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

    public function getKdbayar(): ?string
    {
        return $this->kdbayar;
    }

    public function setKdbayar(string $kdbayar): self
    {
        $this->kdbayar = $kdbayar;

        return $this;
    }

    public function getRefBayar(): ?string
    {
        return $this->refBayar;
    }

    public function setRefBayar(string $refBayar): self
    {
        $this->refBayar = $refBayar;

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

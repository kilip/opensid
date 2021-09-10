<?php

/*
 * This file is part of the OpenSID project.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace OpenSID\Prototype\Model;

class KeuanganTaPajak
{
    private $tahun;

    private $kdDesa;

    private $noSsp;

    private $tglSsp;

    private $keterangan;

    private $namaWp;

    private $alamatWp;

    private $npwp;

    private $kdMap;

    private $nmPenyetor;

    private $jnTransaksi;

    private $kdRincian;

    private $jumlah;

    private $kdbayar;

    private $idBank;

    private $ntpn;

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

    public function getNoSsp(): ?string
    {
        return $this->noSsp;
    }

    public function setNoSsp(string $noSsp): self
    {
        $this->noSsp = $noSsp;

        return $this;
    }

    public function getTglSsp(): ?string
    {
        return $this->tglSsp;
    }

    public function setTglSsp(string $tglSsp): self
    {
        $this->tglSsp = $tglSsp;

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

    public function getNamaWp(): ?string
    {
        return $this->namaWp;
    }

    public function setNamaWp(string $namaWp): self
    {
        $this->namaWp = $namaWp;

        return $this;
    }

    public function getAlamatWp(): ?string
    {
        return $this->alamatWp;
    }

    public function setAlamatWp(string $alamatWp): self
    {
        $this->alamatWp = $alamatWp;

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

    public function getKdMap(): ?string
    {
        return $this->kdMap;
    }

    public function setKdMap(string $kdMap): self
    {
        $this->kdMap = $kdMap;

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

    public function getJnTransaksi(): ?string
    {
        return $this->jnTransaksi;
    }

    public function setJnTransaksi(string $jnTransaksi): self
    {
        $this->jnTransaksi = $jnTransaksi;

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

    public function getJumlah(): ?string
    {
        return $this->jumlah;
    }

    public function setJumlah(string $jumlah): self
    {
        $this->jumlah = $jumlah;

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

    public function getIdBank(): ?string
    {
        return $this->idBank;
    }

    public function setIdBank(?string $idBank): self
    {
        $this->idBank = $idBank;

        return $this;
    }

    public function getNtpn(): ?string
    {
        return $this->ntpn;
    }

    public function setNtpn(?string $ntpn): self
    {
        $this->ntpn = $ntpn;

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

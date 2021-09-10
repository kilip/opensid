<?php

/*
 * This file is part of the OpenSID project.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace OpenSID\Prototype\Model;

class KeuanganTaRpjmKegiatan
{
    private $kdDesa;

    private $kdBid;

    private $kdKeg;

    private $idKeg;

    private $namaKegiatan;

    private $lokasi;

    private $keluaran;

    private $kdSas;

    private $sasaran;

    private $tahun1;

    private $tahun2;

    private $tahun3;

    private $tahun4;

    private $tahun5;

    private $tahun6;

    private $swakelola;

    private $kerjasama;

    private $pihakKetiga;

    private $sumberdana;

    private $kdSub;

    private $id;

    private $idKeuanganMaster;

    public function getKdDesa(): ?string
    {
        return $this->kdDesa;
    }

    public function setKdDesa(string $kdDesa): self
    {
        $this->kdDesa = $kdDesa;

        return $this;
    }

    public function getKdBid(): ?string
    {
        return $this->kdBid;
    }

    public function setKdBid(?string $kdBid): self
    {
        $this->kdBid = $kdBid;

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

    public function getIdKeg(): ?string
    {
        return $this->idKeg;
    }

    public function setIdKeg(string $idKeg): self
    {
        $this->idKeg = $idKeg;

        return $this;
    }

    public function getNamaKegiatan(): ?string
    {
        return $this->namaKegiatan;
    }

    public function setNamaKegiatan(string $namaKegiatan): self
    {
        $this->namaKegiatan = $namaKegiatan;

        return $this;
    }

    public function getLokasi(): ?string
    {
        return $this->lokasi;
    }

    public function setLokasi(string $lokasi): self
    {
        $this->lokasi = $lokasi;

        return $this;
    }

    public function getKeluaran(): ?string
    {
        return $this->keluaran;
    }

    public function setKeluaran(string $keluaran): self
    {
        $this->keluaran = $keluaran;

        return $this;
    }

    public function getKdSas(): ?string
    {
        return $this->kdSas;
    }

    public function setKdSas(string $kdSas): self
    {
        $this->kdSas = $kdSas;

        return $this;
    }

    public function getSasaran(): ?string
    {
        return $this->sasaran;
    }

    public function setSasaran(string $sasaran): self
    {
        $this->sasaran = $sasaran;

        return $this;
    }

    public function getTahun1(): ?string
    {
        return $this->tahun1;
    }

    public function setTahun1(string $tahun1): self
    {
        $this->tahun1 = $tahun1;

        return $this;
    }

    public function getTahun2(): ?string
    {
        return $this->tahun2;
    }

    public function setTahun2(string $tahun2): self
    {
        $this->tahun2 = $tahun2;

        return $this;
    }

    public function getTahun3(): ?string
    {
        return $this->tahun3;
    }

    public function setTahun3(string $tahun3): self
    {
        $this->tahun3 = $tahun3;

        return $this;
    }

    public function getTahun4(): ?string
    {
        return $this->tahun4;
    }

    public function setTahun4(string $tahun4): self
    {
        $this->tahun4 = $tahun4;

        return $this;
    }

    public function getTahun5(): ?string
    {
        return $this->tahun5;
    }

    public function setTahun5(string $tahun5): self
    {
        $this->tahun5 = $tahun5;

        return $this;
    }

    public function getTahun6(): ?string
    {
        return $this->tahun6;
    }

    public function setTahun6(string $tahun6): self
    {
        $this->tahun6 = $tahun6;

        return $this;
    }

    public function getSwakelola(): ?string
    {
        return $this->swakelola;
    }

    public function setSwakelola(string $swakelola): self
    {
        $this->swakelola = $swakelola;

        return $this;
    }

    public function getKerjasama(): ?string
    {
        return $this->kerjasama;
    }

    public function setKerjasama(string $kerjasama): self
    {
        $this->kerjasama = $kerjasama;

        return $this;
    }

    public function getPihakKetiga(): ?string
    {
        return $this->pihakKetiga;
    }

    public function setPihakKetiga(string $pihakKetiga): self
    {
        $this->pihakKetiga = $pihakKetiga;

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

    public function getKdSub(): ?string
    {
        return $this->kdSub;
    }

    public function setKdSub(?string $kdSub): self
    {
        $this->kdSub = $kdSub;

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

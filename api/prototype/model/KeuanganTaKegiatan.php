<?php

/*
 * This file is part of the OpenSID project.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace OpenSID\Prototype\Model;

class KeuanganTaKegiatan
{
    private $tahun;

    private $kdDesa;

    private $kdBid;

    private $kdKeg;

    private $idKeg;

    private $namaKegiatan;

    private $pagu;

    private $paguPak;

    private $nmPptkd;

    private $nipPptkd;

    private $lokasi;

    private $waktu;

    private $keluaran;

    private $sumberdana;

    private $jbtPptkd;

    private $kdSub;

    private $nilai;

    private $nilaipak;

    private $satuan;

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

    public function getPagu(): ?string
    {
        return $this->pagu;
    }

    public function setPagu(string $pagu): self
    {
        $this->pagu = $pagu;

        return $this;
    }

    public function getPaguPak(): ?string
    {
        return $this->paguPak;
    }

    public function setPaguPak(string $paguPak): self
    {
        $this->paguPak = $paguPak;

        return $this;
    }

    public function getNmPptkd(): ?string
    {
        return $this->nmPptkd;
    }

    public function setNmPptkd(string $nmPptkd): self
    {
        $this->nmPptkd = $nmPptkd;

        return $this;
    }

    public function getNipPptkd(): ?string
    {
        return $this->nipPptkd;
    }

    public function setNipPptkd(string $nipPptkd): self
    {
        $this->nipPptkd = $nipPptkd;

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

    public function getWaktu(): ?string
    {
        return $this->waktu;
    }

    public function setWaktu(string $waktu): self
    {
        $this->waktu = $waktu;

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

    public function getSumberdana(): ?string
    {
        return $this->sumberdana;
    }

    public function setSumberdana(string $sumberdana): self
    {
        $this->sumberdana = $sumberdana;

        return $this;
    }

    public function getJbtPptkd(): ?string
    {
        return $this->jbtPptkd;
    }

    public function setJbtPptkd(?string $jbtPptkd): self
    {
        $this->jbtPptkd = $jbtPptkd;

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

    public function getNilai(): ?string
    {
        return $this->nilai;
    }

    public function setNilai(?string $nilai): self
    {
        $this->nilai = $nilai;

        return $this;
    }

    public function getNilaipak(): ?string
    {
        return $this->nilaipak;
    }

    public function setNilaipak(?string $nilaipak): self
    {
        $this->nilaipak = $nilaipak;

        return $this;
    }

    public function getSatuan(): ?string
    {
        return $this->satuan;
    }

    public function setSatuan(?string $satuan): self
    {
        $this->satuan = $satuan;

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

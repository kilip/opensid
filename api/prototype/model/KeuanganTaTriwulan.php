<?php

namespace OpenSID\Prototype\Model;

class KeuanganTaTriwulan
{
    private $kurinciansd;

    private $tahun;

    private $sifat;

    private $sumberdana;

    private $kdDesa;

    private $kdKeg;

    private $kdRincian;

    private $anggaran;

    private $anggaranpak;

    private $tw1rinci;

    private $tw2rinci;

    private $tw3rinci;

    private $tw4rinci;

    private $kuncidata;

    private $jan;

    private $peb;

    private $mar;

    private $apr;

    private $mei;

    private $jun;

    private $jul;

    private $agt;

    private $sep;

    private $okt;

    private $nop;

    private $des;

    private $kdSubrinci;

    private $id;

    private $idKeuanganMaster;

    public function getKurinciansd(): ?string
    {
        return $this->kurinciansd;
    }

    public function setKurinciansd(string $kurinciansd): self
    {
        $this->kurinciansd = $kurinciansd;

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

    public function getSifat(): ?string
    {
        return $this->sifat;
    }

    public function setSifat(string $sifat): self
    {
        $this->sifat = $sifat;

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

    public function getAnggaran(): ?string
    {
        return $this->anggaran;
    }

    public function setAnggaran(string $anggaran): self
    {
        $this->anggaran = $anggaran;

        return $this;
    }

    public function getAnggaranpak(): ?string
    {
        return $this->anggaranpak;
    }

    public function setAnggaranpak(string $anggaranpak): self
    {
        $this->anggaranpak = $anggaranpak;

        return $this;
    }

    public function getTw1rinci(): ?string
    {
        return $this->tw1rinci;
    }

    public function setTw1rinci(?string $tw1rinci): self
    {
        $this->tw1rinci = $tw1rinci;

        return $this;
    }

    public function getTw2rinci(): ?string
    {
        return $this->tw2rinci;
    }

    public function setTw2rinci(?string $tw2rinci): self
    {
        $this->tw2rinci = $tw2rinci;

        return $this;
    }

    public function getTw3rinci(): ?string
    {
        return $this->tw3rinci;
    }

    public function setTw3rinci(?string $tw3rinci): self
    {
        $this->tw3rinci = $tw3rinci;

        return $this;
    }

    public function getTw4rinci(): ?string
    {
        return $this->tw4rinci;
    }

    public function setTw4rinci(?string $tw4rinci): self
    {
        $this->tw4rinci = $tw4rinci;

        return $this;
    }

    public function getKuncidata(): ?string
    {
        return $this->kuncidata;
    }

    public function setKuncidata(string $kuncidata): self
    {
        $this->kuncidata = $kuncidata;

        return $this;
    }

    public function getJan(): ?string
    {
        return $this->jan;
    }

    public function setJan(?string $jan): self
    {
        $this->jan = $jan;

        return $this;
    }

    public function getPeb(): ?string
    {
        return $this->peb;
    }

    public function setPeb(?string $peb): self
    {
        $this->peb = $peb;

        return $this;
    }

    public function getMar(): ?string
    {
        return $this->mar;
    }

    public function setMar(?string $mar): self
    {
        $this->mar = $mar;

        return $this;
    }

    public function getApr(): ?string
    {
        return $this->apr;
    }

    public function setApr(?string $apr): self
    {
        $this->apr = $apr;

        return $this;
    }

    public function getMei(): ?string
    {
        return $this->mei;
    }

    public function setMei(?string $mei): self
    {
        $this->mei = $mei;

        return $this;
    }

    public function getJun(): ?string
    {
        return $this->jun;
    }

    public function setJun(?string $jun): self
    {
        $this->jun = $jun;

        return $this;
    }

    public function getJul(): ?string
    {
        return $this->jul;
    }

    public function setJul(?string $jul): self
    {
        $this->jul = $jul;

        return $this;
    }

    public function getAgt(): ?string
    {
        return $this->agt;
    }

    public function setAgt(?string $agt): self
    {
        $this->agt = $agt;

        return $this;
    }

    public function getSep(): ?string
    {
        return $this->sep;
    }

    public function setSep(?string $sep): self
    {
        $this->sep = $sep;

        return $this;
    }

    public function getOkt(): ?string
    {
        return $this->okt;
    }

    public function setOkt(?string $okt): self
    {
        $this->okt = $okt;

        return $this;
    }

    public function getNop(): ?string
    {
        return $this->nop;
    }

    public function setNop(?string $nop): self
    {
        $this->nop = $nop;

        return $this;
    }

    public function getDes(): ?string
    {
        return $this->des;
    }

    public function setDes(?string $des): self
    {
        $this->des = $des;

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

<?php

namespace OpenSID\Prototype\Model;

class KeuanganTaRpjmPaguIndikatif
{
    private $kdDesa;

    private $kdKeg;

    private $kdSumber;

    private $tahun1;

    private $tahun2;

    private $tahun3;

    private $tahun4;

    private $tahun5;

    private $tahun6;

    private $pola;

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

    public function getKdKeg(): ?string
    {
        return $this->kdKeg;
    }

    public function setKdKeg(string $kdKeg): self
    {
        $this->kdKeg = $kdKeg;

        return $this;
    }

    public function getKdSumber(): ?string
    {
        return $this->kdSumber;
    }

    public function setKdSumber(string $kdSumber): self
    {
        $this->kdSumber = $kdSumber;

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

    public function getPola(): ?string
    {
        return $this->pola;
    }

    public function setPola(string $pola): self
    {
        $this->pola = $pola;

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

<?php

namespace OpenSID\Prototype\Model;

class KeuanganTaPemda
{
    private $tahun;

    private $kdProv;

    private $kdKab;

    private $namaPemda;

    private $namaProvinsi;

    private $ibukota;

    private $alamat;

    private $nmBupati;

    private $jbtBupati;

    private $logo;

    private $cKode;

    private $cPemda;

    private $cData;

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

    public function getKdProv(): ?string
    {
        return $this->kdProv;
    }

    public function setKdProv(string $kdProv): self
    {
        $this->kdProv = $kdProv;

        return $this;
    }

    public function getKdKab(): ?string
    {
        return $this->kdKab;
    }

    public function setKdKab(string $kdKab): self
    {
        $this->kdKab = $kdKab;

        return $this;
    }

    public function getNamaPemda(): ?string
    {
        return $this->namaPemda;
    }

    public function setNamaPemda(string $namaPemda): self
    {
        $this->namaPemda = $namaPemda;

        return $this;
    }

    public function getNamaProvinsi(): ?string
    {
        return $this->namaProvinsi;
    }

    public function setNamaProvinsi(string $namaProvinsi): self
    {
        $this->namaProvinsi = $namaProvinsi;

        return $this;
    }

    public function getIbukota(): ?string
    {
        return $this->ibukota;
    }

    public function setIbukota(string $ibukota): self
    {
        $this->ibukota = $ibukota;

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

    public function getNmBupati(): ?string
    {
        return $this->nmBupati;
    }

    public function setNmBupati(string $nmBupati): self
    {
        $this->nmBupati = $nmBupati;

        return $this;
    }

    public function getJbtBupati(): ?string
    {
        return $this->jbtBupati;
    }

    public function setJbtBupati(string $jbtBupati): self
    {
        $this->jbtBupati = $jbtBupati;

        return $this;
    }

    public function getLogo()
    {
        return $this->logo;
    }

    public function setLogo($logo): self
    {
        $this->logo = $logo;

        return $this;
    }

    public function getCKode(): ?string
    {
        return $this->cKode;
    }

    public function setCKode(string $cKode): self
    {
        $this->cKode = $cKode;

        return $this;
    }

    public function getCPemda(): ?string
    {
        return $this->cPemda;
    }

    public function setCPemda(string $cPemda): self
    {
        $this->cPemda = $cPemda;

        return $this;
    }

    public function getCData(): ?string
    {
        return $this->cData;
    }

    public function setCData(string $cData): self
    {
        $this->cData = $cData;

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

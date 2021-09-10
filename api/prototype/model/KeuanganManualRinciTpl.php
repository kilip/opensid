<?php

namespace OpenSID\Prototype\Model;

class KeuanganManualRinciTpl
{
    private $tahun;

    private $kdAkun;

    private $kdKeg;

    private $kdRincian;

    private $nilaiAnggaran;

    private $nilaiRealisasi;

    private $id;

    public function getTahun(): ?string
    {
        return $this->tahun;
    }

    public function setTahun(string $tahun): self
    {
        $this->tahun = $tahun;

        return $this;
    }

    public function getKdAkun(): ?string
    {
        return $this->kdAkun;
    }

    public function setKdAkun(string $kdAkun): self
    {
        $this->kdAkun = $kdAkun;

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

    public function getNilaiAnggaran(): ?string
    {
        return $this->nilaiAnggaran;
    }

    public function setNilaiAnggaran(string $nilaiAnggaran): self
    {
        $this->nilaiAnggaran = $nilaiAnggaran;

        return $this;
    }

    public function getNilaiRealisasi(): ?string
    {
        return $this->nilaiRealisasi;
    }

    public function setNilaiRealisasi(string $nilaiRealisasi): self
    {
        $this->nilaiRealisasi = $nilaiRealisasi;

        return $this;
    }

    public function getId(): ?string
    {
        return $this->id;
    }
}

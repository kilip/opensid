<?php

namespace OpenSID\Prototype\Model;

class Config
{
    private $namaDesa;

    private $kodeDesa;

    private $namaKepalaDesa;

    private $nipKepalaDesa;

    private $kodePos;

    private $namaKecamatan;

    private $kodeKecamatan;

    private $namaKepalaCamat;

    private $nipKepalaCamat;

    private $namaKabupaten;

    private $kodeKabupaten;

    private $namaPropinsi;

    private $kodePropinsi;

    private $logo;

    private $lat;

    private $lng;

    private $zoom;

    private $mapTipe;

    private $path;

    private $alamatKantor;

    private $emailDesa;

    private $telepon;

    private $website;

    private $kantorDesa;

    private $warna;

    private $id;

    public function getNamaDesa(): ?string
    {
        return $this->namaDesa;
    }

    public function setNamaDesa(string $namaDesa): self
    {
        $this->namaDesa = $namaDesa;

        return $this;
    }

    public function getKodeDesa(): ?string
    {
        return $this->kodeDesa;
    }

    public function setKodeDesa(string $kodeDesa): self
    {
        $this->kodeDesa = $kodeDesa;

        return $this;
    }

    public function getNamaKepalaDesa(): ?string
    {
        return $this->namaKepalaDesa;
    }

    public function setNamaKepalaDesa(string $namaKepalaDesa): self
    {
        $this->namaKepalaDesa = $namaKepalaDesa;

        return $this;
    }

    public function getNipKepalaDesa(): ?string
    {
        return $this->nipKepalaDesa;
    }

    public function setNipKepalaDesa(string $nipKepalaDesa): self
    {
        $this->nipKepalaDesa = $nipKepalaDesa;

        return $this;
    }

    public function getKodePos(): ?string
    {
        return $this->kodePos;
    }

    public function setKodePos(string $kodePos): self
    {
        $this->kodePos = $kodePos;

        return $this;
    }

    public function getNamaKecamatan(): ?string
    {
        return $this->namaKecamatan;
    }

    public function setNamaKecamatan(string $namaKecamatan): self
    {
        $this->namaKecamatan = $namaKecamatan;

        return $this;
    }

    public function getKodeKecamatan(): ?string
    {
        return $this->kodeKecamatan;
    }

    public function setKodeKecamatan(string $kodeKecamatan): self
    {
        $this->kodeKecamatan = $kodeKecamatan;

        return $this;
    }

    public function getNamaKepalaCamat(): ?string
    {
        return $this->namaKepalaCamat;
    }

    public function setNamaKepalaCamat(string $namaKepalaCamat): self
    {
        $this->namaKepalaCamat = $namaKepalaCamat;

        return $this;
    }

    public function getNipKepalaCamat(): ?string
    {
        return $this->nipKepalaCamat;
    }

    public function setNipKepalaCamat(string $nipKepalaCamat): self
    {
        $this->nipKepalaCamat = $nipKepalaCamat;

        return $this;
    }

    public function getNamaKabupaten(): ?string
    {
        return $this->namaKabupaten;
    }

    public function setNamaKabupaten(string $namaKabupaten): self
    {
        $this->namaKabupaten = $namaKabupaten;

        return $this;
    }

    public function getKodeKabupaten(): ?string
    {
        return $this->kodeKabupaten;
    }

    public function setKodeKabupaten(string $kodeKabupaten): self
    {
        $this->kodeKabupaten = $kodeKabupaten;

        return $this;
    }

    public function getNamaPropinsi(): ?string
    {
        return $this->namaPropinsi;
    }

    public function setNamaPropinsi(string $namaPropinsi): self
    {
        $this->namaPropinsi = $namaPropinsi;

        return $this;
    }

    public function getKodePropinsi(): ?string
    {
        return $this->kodePropinsi;
    }

    public function setKodePropinsi(string $kodePropinsi): self
    {
        $this->kodePropinsi = $kodePropinsi;

        return $this;
    }

    public function getLogo(): ?string
    {
        return $this->logo;
    }

    public function setLogo(?string $logo): self
    {
        $this->logo = $logo;

        return $this;
    }

    public function getLat(): ?string
    {
        return $this->lat;
    }

    public function setLat(?string $lat): self
    {
        $this->lat = $lat;

        return $this;
    }

    public function getLng(): ?string
    {
        return $this->lng;
    }

    public function setLng(?string $lng): self
    {
        $this->lng = $lng;

        return $this;
    }

    public function getZoom()
    {
        return $this->zoom;
    }

    public function setZoom($zoom): self
    {
        $this->zoom = $zoom;

        return $this;
    }

    public function getMapTipe(): ?string
    {
        return $this->mapTipe;
    }

    public function setMapTipe(?string $mapTipe): self
    {
        $this->mapTipe = $mapTipe;

        return $this;
    }

    public function getPath(): ?string
    {
        return $this->path;
    }

    public function setPath(?string $path): self
    {
        $this->path = $path;

        return $this;
    }

    public function getAlamatKantor(): ?string
    {
        return $this->alamatKantor;
    }

    public function setAlamatKantor(?string $alamatKantor): self
    {
        $this->alamatKantor = $alamatKantor;

        return $this;
    }

    public function getEmailDesa(): ?string
    {
        return $this->emailDesa;
    }

    public function setEmailDesa(?string $emailDesa): self
    {
        $this->emailDesa = $emailDesa;

        return $this;
    }

    public function getTelepon(): ?string
    {
        return $this->telepon;
    }

    public function setTelepon(?string $telepon): self
    {
        $this->telepon = $telepon;

        return $this;
    }

    public function getWebsite(): ?string
    {
        return $this->website;
    }

    public function setWebsite(?string $website): self
    {
        $this->website = $website;

        return $this;
    }

    public function getKantorDesa(): ?string
    {
        return $this->kantorDesa;
    }

    public function setKantorDesa(?string $kantorDesa): self
    {
        $this->kantorDesa = $kantorDesa;

        return $this;
    }

    public function getWarna(): ?string
    {
        return $this->warna;
    }

    public function setWarna(?string $warna): self
    {
        $this->warna = $warna;

        return $this;
    }

    public function getId(): ?int
    {
        return $this->id;
    }
}

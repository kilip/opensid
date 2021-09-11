<?php

/*
 * This file is part of the OpenSID project.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace OpenSID\Application\Model;

use OpenSID\Resource\Contracts\ResourceInterface;
use OpenSID\Resource\Contracts\ResourceTrait;

class Config implements ResourceInterface
{
    use ResourceTrait;

    protected ?string $kodeDesa       = null;
    protected ?string $namaDesa       = null;
    protected ?string $namaKepalaDesa = null;
    protected ?string $nipKepalaDesa  = null;
    protected ?string $kodePos        = null;
    protected ?string $kodeKecamatan  = null;
    protected ?string $namaKecamatan  = null;
    protected ?string $namaCamat      = null;
    protected ?string $nipCamat       = null;
    protected ?string $kodeKabupaten  = null;
    protected ?string $namaKabupaten  = null;
    protected ?string $kodeProvinsi   = null;
    protected ?string $namaProvinsi   = null;
    protected ?string $logo           = null;
    protected ?string $latitude       = null;
    protected ?string $longitude      = null;
    protected ?int $zoom              = null;
    protected ?string $mapType        = null;
    protected ?string $path           = null;
    protected ?string $alamatKantor   = null;
    protected ?string $emailDesa      = null;
    protected ?string $telepon        = null;
    protected ?string $website        = null;
    protected ?string $kantorDesa     = null;
    protected ?string $warna          = null;

    public function getKodeDesa(): ?string
    {
        return $this->kodeDesa;
    }

    public function setKodeDesa(?string $kodeDesa): void
    {
        $this->kodeDesa = $kodeDesa;
    }

    public function getNamaDesa(): ?string
    {
        return $this->namaDesa;
    }

    public function setNamaDesa(?string $namaDesa): void
    {
        $this->namaDesa = $namaDesa;
    }

    public function getNamaKepalaDesa(): ?string
    {
        return $this->namaKepalaDesa;
    }

    public function setNamaKepalaDesa(?string $namaKepalaDesa): void
    {
        $this->namaKepalaDesa = $namaKepalaDesa;
    }

    public function getNipKepalaDesa(): ?string
    {
        return $this->nipKepalaDesa;
    }

    public function setNipKepalaDesa(?string $nipKepalaDesa): void
    {
        $this->nipKepalaDesa = $nipKepalaDesa;
    }

    public function getKodePos(): ?string
    {
        return $this->kodePos;
    }

    public function setKodePos(?string $kodePos): void
    {
        $this->kodePos = $kodePos;
    }

    public function getKodeKecamatan(): ?string
    {
        return $this->kodeKecamatan;
    }

    public function setKodeKecamatan(?string $kodeKecamatan): void
    {
        $this->kodeKecamatan = $kodeKecamatan;
    }

    public function getNamaKecamatan(): ?string
    {
        return $this->namaKecamatan;
    }

    public function setNamaKecamatan(?string $namaKecamatan): void
    {
        $this->namaKecamatan = $namaKecamatan;
    }

    public function getNamaCamat(): ?string
    {
        return $this->namaCamat;
    }

    public function setNamaCamat(?string $namaCamat): void
    {
        $this->namaCamat = $namaCamat;
    }

    public function getNipCamat(): ?string
    {
        return $this->nipCamat;
    }

    public function setNipCamat(?string $nipCamat): void
    {
        $this->nipCamat = $nipCamat;
    }

    public function getNamaKabupaten(): ?string
    {
        return $this->namaKabupaten;
    }

    public function setNamaKabupaten(?string $namaKabupaten): void
    {
        $this->namaKabupaten = $namaKabupaten;
    }

    public function getKodeKabupaten(): ?string
    {
        return $this->kodeKabupaten;
    }

    public function setKodeKabupaten(?string $kodeKabupaten): void
    {
        $this->kodeKabupaten = $kodeKabupaten;
    }

    public function getKodeProvinsi(): ?string
    {
        return $this->kodeProvinsi;
    }

    public function setKodeProvinsi(?string $kodeProvinsi): void
    {
        $this->kodeProvinsi = $kodeProvinsi;
    }

    public function getNamaProvinsi(): ?string
    {
        return $this->namaProvinsi;
    }

    public function setNamaProvinsi(?string $namaProvinsi): void
    {
        $this->namaProvinsi = $namaProvinsi;
    }

    public function getLogo(): ?string
    {
        return $this->logo;
    }

    public function setLogo(?string $logo): void
    {
        $this->logo = $logo;
    }

    public function getLatitude(): ?string
    {
        return $this->latitude;
    }

    public function setLatitude(?string $latitude): void
    {
        $this->latitude = $latitude;
    }

    public function getLongitude(): ?string
    {
        return $this->longitude;
    }

    public function setLongitude(?string $longitude): void
    {
        $this->longitude = $longitude;
    }

    public function getZoom(): ?int
    {
        return $this->zoom;
    }

    public function setZoom(?int $zoom): void
    {
        $this->zoom = $zoom;
    }

    public function getMapType(): ?string
    {
        return $this->mapType;
    }

    public function setMapType(?string $mapType): void
    {
        $this->mapType = $mapType;
    }

    public function getPath(): ?string
    {
        return $this->path;
    }

    public function setPath(?string $path): void
    {
        $this->path = $path;
    }

    public function getAlamatKantor(): ?string
    {
        return $this->alamatKantor;
    }

    public function setAlamatKantor(?string $alamatKantor): void
    {
        $this->alamatKantor = $alamatKantor;
    }

    public function getEmailDesa(): ?string
    {
        return $this->emailDesa;
    }

    public function setEmailDesa(?string $emailDesa): void
    {
        $this->emailDesa = $emailDesa;
    }

    public function getTelepon(): ?string
    {
        return $this->telepon;
    }

    public function setTelepon(?string $telepon): void
    {
        $this->telepon = $telepon;
    }

    public function getWebsite(): ?string
    {
        return $this->website;
    }

    public function setWebsite(?string $website): void
    {
        $this->website = $website;
    }

    public function getKantorDesa(): ?string
    {
        return $this->kantorDesa;
    }

    public function setKantorDesa(?string $kantorDesa): void
    {
        $this->kantorDesa = $kantorDesa;
    }

    public function getWarna(): ?string
    {
        return $this->warna;
    }

    public function setWarna(?string $warna): void
    {
        $this->warna = $warna;
    }
}

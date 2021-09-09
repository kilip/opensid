<?php

/*
 * This file is part of the OpenSID project.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace OpenSID\Prototype\Model;

class TwebSuratFormat
{
    private $nama;

    private $urlSurat;

    private $kodeSurat;

    private $lampiran;

    private $kunci;

    private $favorit;

    private $jenis;

    private $mandiri;

    private $masaBerlaku;

    private $satuanMasaBerlaku;

    private $id;

    public function getNama(): ?string
    {
        return $this->nama;
    }

    public function setNama(string $nama): self
    {
        $this->nama = $nama;

        return $this;
    }

    public function getUrlSurat(): ?string
    {
        return $this->urlSurat;
    }

    public function setUrlSurat(string $urlSurat): self
    {
        $this->urlSurat = $urlSurat;

        return $this;
    }

    public function getKodeSurat(): ?string
    {
        return $this->kodeSurat;
    }

    public function setKodeSurat(?string $kodeSurat): self
    {
        $this->kodeSurat = $kodeSurat;

        return $this;
    }

    public function getLampiran(): ?string
    {
        return $this->lampiran;
    }

    public function setLampiran(?string $lampiran): self
    {
        $this->lampiran = $lampiran;

        return $this;
    }

    public function getKunci()
    {
        return $this->kunci;
    }

    public function setKunci($kunci): self
    {
        $this->kunci = $kunci;

        return $this;
    }

    public function getFavorit()
    {
        return $this->favorit;
    }

    public function setFavorit($favorit): self
    {
        $this->favorit = $favorit;

        return $this;
    }

    public function getJenis()
    {
        return $this->jenis;
    }

    public function setJenis($jenis): self
    {
        $this->jenis = $jenis;

        return $this;
    }

    public function getMandiri()
    {
        return $this->mandiri;
    }

    public function setMandiri($mandiri): self
    {
        $this->mandiri = $mandiri;

        return $this;
    }

    public function getMasaBerlaku(): ?int
    {
        return $this->masaBerlaku;
    }

    public function setMasaBerlaku(?int $masaBerlaku): self
    {
        $this->masaBerlaku = $masaBerlaku;

        return $this;
    }

    public function getSatuanMasaBerlaku(): ?string
    {
        return $this->satuanMasaBerlaku;
    }

    public function setSatuanMasaBerlaku(?string $satuanMasaBerlaku): self
    {
        $this->satuanMasaBerlaku = $satuanMasaBerlaku;

        return $this;
    }

    public function getId(): ?int
    {
        return $this->id;
    }
}

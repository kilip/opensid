<?php

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

    public function getKunci(): ?bool
    {
        return $this->kunci;
    }

    public function setKunci(bool $kunci): self
    {
        $this->kunci = $kunci;

        return $this;
    }

    public function getFavorit(): ?bool
    {
        return $this->favorit;
    }

    public function setFavorit(bool $favorit): self
    {
        $this->favorit = $favorit;

        return $this;
    }

    public function getJenis(): ?int
    {
        return $this->jenis;
    }

    public function setJenis(int $jenis): self
    {
        $this->jenis = $jenis;

        return $this;
    }

    public function getMandiri(): ?bool
    {
        return $this->mandiri;
    }

    public function setMandiri(?bool $mandiri): self
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

    public function getId(): ?string
    {
        return $this->id;
    }
}

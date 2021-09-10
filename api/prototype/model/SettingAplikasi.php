<?php

namespace OpenSID\Prototype\Model;

class SettingAplikasi
{
    private $key;

    private $value;

    private $keterangan;

    private $jenis;

    private $kategori;

    private $id;

    public function getKey(): ?string
    {
        return $this->key;
    }

    public function setKey(?string $key): self
    {
        $this->key = $key;

        return $this;
    }

    public function getValue(): ?string
    {
        return $this->value;
    }

    public function setValue(?string $value): self
    {
        $this->value = $value;

        return $this;
    }

    public function getKeterangan(): ?string
    {
        return $this->keterangan;
    }

    public function setKeterangan(?string $keterangan): self
    {
        $this->keterangan = $keterangan;

        return $this;
    }

    public function getJenis(): ?string
    {
        return $this->jenis;
    }

    public function setJenis(?string $jenis): self
    {
        $this->jenis = $jenis;

        return $this;
    }

    public function getKategori(): ?string
    {
        return $this->kategori;
    }

    public function setKategori(?string $kategori): self
    {
        $this->kategori = $kategori;

        return $this;
    }

    public function getId(): ?string
    {
        return $this->id;
    }
}

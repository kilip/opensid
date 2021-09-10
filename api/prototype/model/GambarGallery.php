<?php

namespace OpenSID\Prototype\Model;

class GambarGallery
{
    private $parrent;

    private $gambar;

    private $nama;

    private $enabled;

    private $tglUpload;

    private $tipe;

    private $slider;

    private $urut;

    private $id;

    public function getParrent(): ?int
    {
        return $this->parrent;
    }

    public function setParrent(?int $parrent): self
    {
        $this->parrent = $parrent;

        return $this;
    }

    public function getGambar(): ?string
    {
        return $this->gambar;
    }

    public function setGambar(string $gambar): self
    {
        $this->gambar = $gambar;

        return $this;
    }

    public function getNama(): ?string
    {
        return $this->nama;
    }

    public function setNama(string $nama): self
    {
        $this->nama = $nama;

        return $this;
    }

    public function getEnabled(): ?int
    {
        return $this->enabled;
    }

    public function setEnabled(int $enabled): self
    {
        $this->enabled = $enabled;

        return $this;
    }

    public function getTglUpload(): ?\DateTimeInterface
    {
        return $this->tglUpload;
    }

    public function setTglUpload(\DateTimeInterface $tglUpload): self
    {
        $this->tglUpload = $tglUpload;

        return $this;
    }

    public function getTipe(): ?int
    {
        return $this->tipe;
    }

    public function setTipe(?int $tipe): self
    {
        $this->tipe = $tipe;

        return $this;
    }

    public function getSlider(): ?bool
    {
        return $this->slider;
    }

    public function setSlider(?bool $slider): self
    {
        $this->slider = $slider;

        return $this;
    }

    public function getUrut(): ?int
    {
        return $this->urut;
    }

    public function setUrut(?int $urut): self
    {
        $this->urut = $urut;

        return $this;
    }

    public function getId(): ?string
    {
        return $this->id;
    }
}

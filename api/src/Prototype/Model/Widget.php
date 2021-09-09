<?php

namespace OpenSID\Prototype\Model;

class Widget
{
    private $isi;

    private $enabled;

    private $judul;

    private $jenisWidget;

    private $urut;

    private $formAdmin;

    private $setting;

    private $id;

    public function getIsi(): ?string
    {
        return $this->isi;
    }

    public function setIsi(?string $isi): self
    {
        $this->isi = $isi;

        return $this;
    }

    public function getEnabled(): ?int
    {
        return $this->enabled;
    }

    public function setEnabled(?int $enabled): self
    {
        $this->enabled = $enabled;

        return $this;
    }

    public function getJudul(): ?string
    {
        return $this->judul;
    }

    public function setJudul(?string $judul): self
    {
        $this->judul = $judul;

        return $this;
    }

    public function getJenisWidget()
    {
        return $this->jenisWidget;
    }

    public function setJenisWidget($jenisWidget): self
    {
        $this->jenisWidget = $jenisWidget;

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

    public function getFormAdmin(): ?string
    {
        return $this->formAdmin;
    }

    public function setFormAdmin(?string $formAdmin): self
    {
        $this->formAdmin = $formAdmin;

        return $this;
    }

    public function getSetting(): ?string
    {
        return $this->setting;
    }

    public function setSetting(?string $setting): self
    {
        $this->setting = $setting;

        return $this;
    }

    public function getId(): ?int
    {
        return $this->id;
    }
}
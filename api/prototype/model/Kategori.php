<?php

namespace OpenSID\Prototype\Model;

class Kategori
{
    private $kategori;

    private $tipe;

    private $urut;

    private $enabled;

    private $parrent;

    private $slug;

    private $id;

    public function getKategori(): ?string
    {
        return $this->kategori;
    }

    public function setKategori(string $kategori): self
    {
        $this->kategori = $kategori;

        return $this;
    }

    public function getTipe(): ?int
    {
        return $this->tipe;
    }

    public function setTipe(int $tipe): self
    {
        $this->tipe = $tipe;

        return $this;
    }

    public function getUrut(): ?int
    {
        return $this->urut;
    }

    public function setUrut(int $urut): self
    {
        $this->urut = $urut;

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

    public function getParrent(): ?int
    {
        return $this->parrent;
    }

    public function setParrent(int $parrent): self
    {
        $this->parrent = $parrent;

        return $this;
    }

    public function getSlug(): ?string
    {
        return $this->slug;
    }

    public function setSlug(?string $slug): self
    {
        $this->slug = $slug;

        return $this;
    }

    public function getId(): ?int
    {
        return $this->id;
    }
}

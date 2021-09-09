<?php

namespace OpenSID\Prototype\Model;

class TwebWilClusterdesa
{
    private $rt;

    private $rw;

    private $dusun;

    private $idKepala;

    private $lat;

    private $lng;

    private $zoom;

    private $path;

    private $mapTipe;

    private $warna;

    private $urut;

    private $urutCetak;

    private $id;

    public function getRt(): ?string
    {
        return $this->rt;
    }

    public function setRt(string $rt): self
    {
        $this->rt = $rt;

        return $this;
    }

    public function getRw(): ?string
    {
        return $this->rw;
    }

    public function setRw(string $rw): self
    {
        $this->rw = $rw;

        return $this;
    }

    public function getDusun(): ?string
    {
        return $this->dusun;
    }

    public function setDusun(string $dusun): self
    {
        $this->dusun = $dusun;

        return $this;
    }

    public function getIdKepala(): ?int
    {
        return $this->idKepala;
    }

    public function setIdKepala(?int $idKepala): self
    {
        $this->idKepala = $idKepala;

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

    public function getZoom(): ?int
    {
        return $this->zoom;
    }

    public function setZoom(?int $zoom): self
    {
        $this->zoom = $zoom;

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

    public function getMapTipe(): ?string
    {
        return $this->mapTipe;
    }

    public function setMapTipe(?string $mapTipe): self
    {
        $this->mapTipe = $mapTipe;

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

    public function getUrut(): ?int
    {
        return $this->urut;
    }

    public function setUrut(?int $urut): self
    {
        $this->urut = $urut;

        return $this;
    }

    public function getUrutCetak(): ?int
    {
        return $this->urutCetak;
    }

    public function setUrutCetak(?int $urutCetak): self
    {
        $this->urutCetak = $urutCetak;

        return $this;
    }

    public function getId(): ?int
    {
        return $this->id;
    }
}

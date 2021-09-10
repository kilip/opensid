<?php

namespace OpenSID\Prototype\Model;

class Area
{
    private $nama;

    private $path;

    private $enabled;

    private $refPolygon;

    private $foto;

    private $idCluster;

    private $desk;

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

    public function getPath(): ?string
    {
        return $this->path;
    }

    public function setPath(?string $path): self
    {
        $this->path = $path;

        return $this;
    }

    public function getEnabled(): ?string
    {
        return $this->enabled;
    }

    public function setEnabled(string $enabled): self
    {
        $this->enabled = $enabled;

        return $this;
    }

    public function getRefPolygon(): ?int
    {
        return $this->refPolygon;
    }

    public function setRefPolygon(int $refPolygon): self
    {
        $this->refPolygon = $refPolygon;

        return $this;
    }

    public function getFoto(): ?string
    {
        return $this->foto;
    }

    public function setFoto(?string $foto): self
    {
        $this->foto = $foto;

        return $this;
    }

    public function getIdCluster(): ?string
    {
        return $this->idCluster;
    }

    public function setIdCluster(?string $idCluster): self
    {
        $this->idCluster = $idCluster;

        return $this;
    }

    public function getDesk(): ?string
    {
        return $this->desk;
    }

    public function setDesk(string $desk): self
    {
        $this->desk = $desk;

        return $this;
    }

    public function getId(): ?int
    {
        return $this->id;
    }
}

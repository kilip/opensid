<?php

/*
 * This file is part of the OpenSID project.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace OpenSID\Prototype\Model;

class Lokasi
{
    private $desk;

    private $nama;

    private $enabled;

    private $lat;

    private $lng;

    private $refPoint;

    private $foto;

    private $idCluster;

    private $id;

    public function getDesk(): ?string
    {
        return $this->desk;
    }

    public function setDesk(string $desk): self
    {
        $this->desk = $desk;

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

    public function getRefPoint(): ?int
    {
        return $this->refPoint;
    }

    public function setRefPoint(int $refPoint): self
    {
        $this->refPoint = $refPoint;

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

    public function getIdCluster(): ?int
    {
        return $this->idCluster;
    }

    public function setIdCluster(?int $idCluster): self
    {
        $this->idCluster = $idCluster;

        return $this;
    }

    public function getId(): ?int
    {
        return $this->id;
    }
}

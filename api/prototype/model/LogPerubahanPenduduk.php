<?php

/*
 * This file is part of the OpenSID project.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace OpenSID\Prototype\Model;

class LogPerubahanPenduduk
{
    private $idPend;

    private $idCluster;

    private $tanggal;

    private $id;

    public function getIdPend(): ?string
    {
        return $this->idPend;
    }

    public function setIdPend(string $idPend): self
    {
        $this->idPend = $idPend;

        return $this;
    }

    public function getIdCluster(): ?string
    {
        return $this->idCluster;
    }

    public function setIdCluster(string $idCluster): self
    {
        $this->idCluster = $idCluster;

        return $this;
    }

    public function getTanggal(): ?\DateTimeInterface
    {
        return $this->tanggal;
    }

    public function setTanggal(?\DateTimeInterface $tanggal): self
    {
        $this->tanggal = $tanggal;

        return $this;
    }

    public function getId(): ?string
    {
        return $this->id;
    }
}

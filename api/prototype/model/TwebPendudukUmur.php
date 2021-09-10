<?php

/*
 * This file is part of the OpenSID project.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace OpenSID\Prototype\Model;

class TwebPendudukUmur
{
    private $nama;

    private $dari;

    private $sampai;

    private $status;

    private $id;

    public function getNama(): ?string
    {
        return $this->nama;
    }

    public function setNama(?string $nama): self
    {
        $this->nama = $nama;

        return $this;
    }

    public function getDari(): ?string
    {
        return $this->dari;
    }

    public function setDari(?string $dari): self
    {
        $this->dari = $dari;

        return $this;
    }

    public function getSampai(): ?string
    {
        return $this->sampai;
    }

    public function setSampai(?string $sampai): self
    {
        $this->sampai = $sampai;

        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(?string $status): self
    {
        $this->status = $status;

        return $this;
    }

    public function getId(): ?string
    {
        return $this->id;
    }
}

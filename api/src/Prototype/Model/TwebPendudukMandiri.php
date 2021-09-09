<?php

/*
 * This file is part of the OpenSID project.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace OpenSID\Prototype\Model;

class TwebPendudukMandiri
{
    private $pin;

    private $lastLogin;

    private $tanggalBuat;

    private $gantiPin;

    private $idPend;

    public function getPin(): ?string
    {
        return $this->pin;
    }

    public function setPin(string $pin): self
    {
        $this->pin = $pin;

        return $this;
    }

    public function getLastLogin(): ?\DateTimeInterface
    {
        return $this->lastLogin;
    }

    public function setLastLogin(?\DateTimeInterface $lastLogin): self
    {
        $this->lastLogin = $lastLogin;

        return $this;
    }

    public function getTanggalBuat(): ?\DateTimeInterface
    {
        return $this->tanggalBuat;
    }

    public function setTanggalBuat(?\DateTimeInterface $tanggalBuat): self
    {
        $this->tanggalBuat = $tanggalBuat;

        return $this;
    }

    public function getGantiPin()
    {
        return $this->gantiPin;
    }

    public function setGantiPin($gantiPin): self
    {
        $this->gantiPin = $gantiPin;

        return $this;
    }

    public function getIdPend(): ?TwebPenduduk
    {
        return $this->idPend;
    }

    public function setIdPend(?TwebPenduduk $idPend): self
    {
        $this->idPend = $idPend;

        return $this;
    }
}

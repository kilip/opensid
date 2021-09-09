<?php

/*
 * This file is part of the OpenSID project.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace OpenSID\Prototype\Model;

class Pertanyaan
{
    private $q1;

    private $pendapatanPerbulan;

    private $q36;

    private $q15;

    private $q24;

    private $q23;

    private $q26;

    private $q28;

    private $uuid;

    public function getQ1(): ?int
    {
        return $this->q1;
    }

    public function setQ1(?int $q1): self
    {
        $this->q1 = $q1;

        return $this;
    }

    public function getPendapatanPerbulan(): ?string
    {
        return $this->pendapatanPerbulan;
    }

    public function setPendapatanPerbulan(?string $pendapatanPerbulan): self
    {
        $this->pendapatanPerbulan = $pendapatanPerbulan;

        return $this;
    }

    public function getQ36(): ?int
    {
        return $this->q36;
    }

    public function setQ36(?int $q36): self
    {
        $this->q36 = $q36;

        return $this;
    }

    public function getQ15(): ?int
    {
        return $this->q15;
    }

    public function setQ15(?int $q15): self
    {
        $this->q15 = $q15;

        return $this;
    }

    public function getQ24(): ?int
    {
        return $this->q24;
    }

    public function setQ24(?int $q24): self
    {
        $this->q24 = $q24;

        return $this;
    }

    public function getQ23(): ?int
    {
        return $this->q23;
    }

    public function setQ23(?int $q23): self
    {
        $this->q23 = $q23;

        return $this;
    }

    public function getQ26(): ?int
    {
        return $this->q26;
    }

    public function setQ26(?int $q26): self
    {
        $this->q26 = $q26;

        return $this;
    }

    public function getQ28(): ?int
    {
        return $this->q28;
    }

    public function setQ28(?int $q28): self
    {
        $this->q28 = $q28;

        return $this;
    }

    public function getUuid(): ?string
    {
        return $this->uuid;
    }
}

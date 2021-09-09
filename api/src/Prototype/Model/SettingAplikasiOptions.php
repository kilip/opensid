<?php

/*
 * This file is part of the OpenSID project.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace OpenSID\Prototype\Model;

class SettingAplikasiOptions
{
    private $value;

    private $kode;

    private $id;

    private $idSetting;

    public function getValue(): ?string
    {
        return $this->value;
    }

    public function setValue(string $value): self
    {
        $this->value = $value;

        return $this;
    }

    public function getKode()
    {
        return $this->kode;
    }

    public function setKode($kode): self
    {
        $this->kode = $kode;

        return $this;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdSetting(): ?SettingAplikasi
    {
        return $this->idSetting;
    }

    public function setIdSetting(?SettingAplikasi $idSetting): self
    {
        $this->idSetting = $idSetting;

        return $this;
    }
}

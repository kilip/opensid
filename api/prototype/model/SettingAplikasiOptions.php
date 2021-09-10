<?php

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

    public function getKode(): ?int
    {
        return $this->kode;
    }

    public function setKode(?int $kode): self
    {
        $this->kode = $kode;

        return $this;
    }

    public function getId(): ?string
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

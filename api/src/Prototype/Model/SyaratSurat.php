<?php

namespace OpenSID\Prototype\Model;

class SyaratSurat
{
    private $refSyaratId;

    private $id;

    private $suratFormat;

    public function getRefSyaratId(): ?int
    {
        return $this->refSyaratId;
    }

    public function setRefSyaratId(int $refSyaratId): self
    {
        $this->refSyaratId = $refSyaratId;

        return $this;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSuratFormat(): ?TwebSuratFormat
    {
        return $this->suratFormat;
    }

    public function setSuratFormat(?TwebSuratFormat $suratFormat): self
    {
        $this->suratFormat = $suratFormat;

        return $this;
    }
}

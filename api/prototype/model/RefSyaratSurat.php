<?php

namespace OpenSID\Prototype\Model;

class RefSyaratSurat
{
    private $refSyaratNama;

    private $refSyaratId;

    public function getRefSyaratNama(): ?string
    {
        return $this->refSyaratNama;
    }

    public function setRefSyaratNama(string $refSyaratNama): self
    {
        $this->refSyaratNama = $refSyaratNama;

        return $this;
    }

    public function getRefSyaratId(): ?int
    {
        return $this->refSyaratId;
    }
}

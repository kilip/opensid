<?php

namespace OpenSID\Prototype\Model;

class AnalisisResponBukti
{
    private $idMaster;

    private $idPeriode;

    private $idSubjek;

    private $pengesahan;

    private $tglUpdate;

    private $uuid;

    public function getIdMaster(): ?int
    {
        return $this->idMaster;
    }

    public function setIdMaster(int $idMaster): self
    {
        $this->idMaster = $idMaster;

        return $this;
    }

    public function getIdPeriode(): ?int
    {
        return $this->idPeriode;
    }

    public function setIdPeriode(int $idPeriode): self
    {
        $this->idPeriode = $idPeriode;

        return $this;
    }

    public function getIdSubjek(): ?string
    {
        return $this->idSubjek;
    }

    public function setIdSubjek(string $idSubjek): self
    {
        $this->idSubjek = $idSubjek;

        return $this;
    }

    public function getPengesahan(): ?string
    {
        return $this->pengesahan;
    }

    public function setPengesahan(string $pengesahan): self
    {
        $this->pengesahan = $pengesahan;

        return $this;
    }

    public function getTglUpdate(): ?\DateTimeInterface
    {
        return $this->tglUpdate;
    }

    public function setTglUpdate(\DateTimeInterface $tglUpdate): self
    {
        $this->tglUpdate = $tglUpdate;

        return $this;
    }

    public function getUuid(): ?string
    {
        return $this->uuid;
    }
}

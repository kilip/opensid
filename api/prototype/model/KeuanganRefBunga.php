<?php

namespace OpenSID\Prototype\Model;

class KeuanganRefBunga
{
    private $kdBunga;

    private $kdAdmin;

    private $id;

    private $idKeuanganMaster;

    public function getKdBunga(): ?string
    {
        return $this->kdBunga;
    }

    public function setKdBunga(string $kdBunga): self
    {
        $this->kdBunga = $kdBunga;

        return $this;
    }

    public function getKdAdmin(): ?string
    {
        return $this->kdAdmin;
    }

    public function setKdAdmin(string $kdAdmin): self
    {
        $this->kdAdmin = $kdAdmin;

        return $this;
    }

    public function getId(): ?string
    {
        return $this->id;
    }

    public function getIdKeuanganMaster(): ?KeuanganMaster
    {
        return $this->idKeuanganMaster;
    }

    public function setIdKeuanganMaster(?KeuanganMaster $idKeuanganMaster): self
    {
        $this->idKeuanganMaster = $idKeuanganMaster;

        return $this;
    }
}
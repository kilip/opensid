<?php

namespace OpenSID\Prototype\Model;

class KeuanganRefPotongan
{
    private $kdRincian;

    private $kdPotongan;

    private $id;

    private $idKeuanganMaster;

    public function getKdRincian(): ?string
    {
        return $this->kdRincian;
    }

    public function setKdRincian(string $kdRincian): self
    {
        $this->kdRincian = $kdRincian;

        return $this;
    }

    public function getKdPotongan(): ?string
    {
        return $this->kdPotongan;
    }

    public function setKdPotongan(string $kdPotongan): self
    {
        $this->kdPotongan = $kdPotongan;

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

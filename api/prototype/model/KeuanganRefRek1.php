<?php

namespace OpenSID\Prototype\Model;

class KeuanganRefRek1
{
    private $akun;

    private $namaAkun;

    private $nolap;

    private $id;

    private $idKeuanganMaster;

    public function getAkun(): ?string
    {
        return $this->akun;
    }

    public function setAkun(string $akun): self
    {
        $this->akun = $akun;

        return $this;
    }

    public function getNamaAkun(): ?string
    {
        return $this->namaAkun;
    }

    public function setNamaAkun(string $namaAkun): self
    {
        $this->namaAkun = $namaAkun;

        return $this;
    }

    public function getNolap(): ?string
    {
        return $this->nolap;
    }

    public function setNolap(string $nolap): self
    {
        $this->nolap = $nolap;

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

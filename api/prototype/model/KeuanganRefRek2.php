<?php

namespace OpenSID\Prototype\Model;

class KeuanganRefRek2
{
    private $akun;

    private $kelompok;

    private $namaKelompok;

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

    public function getKelompok(): ?string
    {
        return $this->kelompok;
    }

    public function setKelompok(string $kelompok): self
    {
        $this->kelompok = $kelompok;

        return $this;
    }

    public function getNamaKelompok(): ?string
    {
        return $this->namaKelompok;
    }

    public function setNamaKelompok(string $namaKelompok): self
    {
        $this->namaKelompok = $namaKelompok;

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

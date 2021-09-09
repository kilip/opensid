<?php

namespace OpenSID\Prototype\Model;

class KeuanganRefSbu
{
    private $kdRincian;

    private $kodeSbu;

    private $nourutSbu;

    private $namaSbu;

    private $nilai;

    private $satuan;

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

    public function getKodeSbu(): ?string
    {
        return $this->kodeSbu;
    }

    public function setKodeSbu(string $kodeSbu): self
    {
        $this->kodeSbu = $kodeSbu;

        return $this;
    }

    public function getNourutSbu(): ?string
    {
        return $this->nourutSbu;
    }

    public function setNourutSbu(string $nourutSbu): self
    {
        $this->nourutSbu = $nourutSbu;

        return $this;
    }

    public function getNamaSbu(): ?string
    {
        return $this->namaSbu;
    }

    public function setNamaSbu(string $namaSbu): self
    {
        $this->namaSbu = $namaSbu;

        return $this;
    }

    public function getNilai(): ?string
    {
        return $this->nilai;
    }

    public function setNilai(string $nilai): self
    {
        $this->nilai = $nilai;

        return $this;
    }

    public function getSatuan(): ?string
    {
        return $this->satuan;
    }

    public function setSatuan(string $satuan): self
    {
        $this->satuan = $satuan;

        return $this;
    }

    public function getId(): ?int
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

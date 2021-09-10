<?php

namespace OpenSID\Prototype\Model;

class Covid19Pemudik
{
    private $tanggalDatang;

    private $asalMudik;

    private $durasiMudik;

    private $tujuanMudik;

    private $keluhanKesehatan;

    private $statusCovid;

    private $noHp;

    private $email;

    private $keterangan;

    private $isWajibPantau;

    private $id;

    private $idTerdata;

    public function getTanggalDatang(): ?\DateTimeInterface
    {
        return $this->tanggalDatang;
    }

    public function setTanggalDatang(?\DateTimeInterface $tanggalDatang): self
    {
        $this->tanggalDatang = $tanggalDatang;

        return $this;
    }

    public function getAsalMudik(): ?string
    {
        return $this->asalMudik;
    }

    public function setAsalMudik(?string $asalMudik): self
    {
        $this->asalMudik = $asalMudik;

        return $this;
    }

    public function getDurasiMudik(): ?string
    {
        return $this->durasiMudik;
    }

    public function setDurasiMudik(?string $durasiMudik): self
    {
        $this->durasiMudik = $durasiMudik;

        return $this;
    }

    public function getTujuanMudik(): ?string
    {
        return $this->tujuanMudik;
    }

    public function setTujuanMudik(?string $tujuanMudik): self
    {
        $this->tujuanMudik = $tujuanMudik;

        return $this;
    }

    public function getKeluhanKesehatan(): ?string
    {
        return $this->keluhanKesehatan;
    }

    public function setKeluhanKesehatan(?string $keluhanKesehatan): self
    {
        $this->keluhanKesehatan = $keluhanKesehatan;

        return $this;
    }

    public function getStatusCovid(): ?string
    {
        return $this->statusCovid;
    }

    public function setStatusCovid(?string $statusCovid): self
    {
        $this->statusCovid = $statusCovid;

        return $this;
    }

    public function getNoHp(): ?string
    {
        return $this->noHp;
    }

    public function setNoHp(?string $noHp): self
    {
        $this->noHp = $noHp;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getKeterangan(): ?string
    {
        return $this->keterangan;
    }

    public function setKeterangan(?string $keterangan): self
    {
        $this->keterangan = $keterangan;

        return $this;
    }

    public function getIsWajibPantau(): ?string
    {
        return $this->isWajibPantau;
    }

    public function setIsWajibPantau(?string $isWajibPantau): self
    {
        $this->isWajibPantau = $isWajibPantau;

        return $this;
    }

    public function getId(): ?string
    {
        return $this->id;
    }

    public function getIdTerdata(): ?TwebPenduduk
    {
        return $this->idTerdata;
    }

    public function setIdTerdata(?TwebPenduduk $idTerdata): self
    {
        $this->idTerdata = $idTerdata;

        return $this;
    }
}

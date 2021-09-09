<?php

namespace OpenSID\Prototype\Model;

class DisposisiSuratMasuk
{
    private $disposisiKe;

    private $idDisposisi;

    private $idDesaPamong;

    private $idSuratMasuk;

    public function getDisposisiKe(): ?string
    {
        return $this->disposisiKe;
    }

    public function setDisposisiKe(?string $disposisiKe): self
    {
        $this->disposisiKe = $disposisiKe;

        return $this;
    }

    public function getIdDisposisi(): ?int
    {
        return $this->idDisposisi;
    }

    public function getIdDesaPamong(): ?TwebDesaPamong
    {
        return $this->idDesaPamong;
    }

    public function setIdDesaPamong(?TwebDesaPamong $idDesaPamong): self
    {
        $this->idDesaPamong = $idDesaPamong;

        return $this;
    }

    public function getIdSuratMasuk(): ?SuratMasuk
    {
        return $this->idSuratMasuk;
    }

    public function setIdSuratMasuk(?SuratMasuk $idSuratMasuk): self
    {
        $this->idSuratMasuk = $idSuratMasuk;

        return $this;
    }
}

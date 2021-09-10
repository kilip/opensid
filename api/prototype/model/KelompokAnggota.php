<?php

namespace OpenSID\Prototype\Model;

class KelompokAnggota
{
    private $idPenduduk;

    private $noAnggota;

    private $keterangan;

    private $jabatan;

    private $noSkJabatan;

    private $foto;

    private $id;

    private $idKelompok;

    public function getIdPenduduk(): ?string
    {
        return $this->idPenduduk;
    }

    public function setIdPenduduk(string $idPenduduk): self
    {
        $this->idPenduduk = $idPenduduk;

        return $this;
    }

    public function getNoAnggota(): ?string
    {
        return $this->noAnggota;
    }

    public function setNoAnggota(?string $noAnggota): self
    {
        $this->noAnggota = $noAnggota;

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

    public function getJabatan(): ?string
    {
        return $this->jabatan;
    }

    public function setJabatan(?string $jabatan): self
    {
        $this->jabatan = $jabatan;

        return $this;
    }

    public function getNoSkJabatan(): ?string
    {
        return $this->noSkJabatan;
    }

    public function setNoSkJabatan(?string $noSkJabatan): self
    {
        $this->noSkJabatan = $noSkJabatan;

        return $this;
    }

    public function getFoto(): ?string
    {
        return $this->foto;
    }

    public function setFoto(?string $foto): self
    {
        $this->foto = $foto;

        return $this;
    }

    public function getId(): ?string
    {
        return $this->id;
    }

    public function getIdKelompok(): ?Kelompok
    {
        return $this->idKelompok;
    }

    public function setIdKelompok(?Kelompok $idKelompok): self
    {
        $this->idKelompok = $idKelompok;

        return $this;
    }
}

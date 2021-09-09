<?php

namespace OpenSID\Prototype\Model;

class TwebSuratAtribut
{
    private $idSurat;

    private $idTipe;

    private $nama;

    private $long;

    private $kode;

    private $id;

    public function getIdSurat(): ?int
    {
        return $this->idSurat;
    }

    public function setIdSurat(int $idSurat): self
    {
        $this->idSurat = $idSurat;

        return $this;
    }

    public function getIdTipe()
    {
        return $this->idTipe;
    }

    public function setIdTipe($idTipe): self
    {
        $this->idTipe = $idTipe;

        return $this;
    }

    public function getNama(): ?string
    {
        return $this->nama;
    }

    public function setNama(string $nama): self
    {
        $this->nama = $nama;

        return $this;
    }

    public function getLong()
    {
        return $this->long;
    }

    public function setLong($long): self
    {
        $this->long = $long;

        return $this;
    }

    public function getKode()
    {
        return $this->kode;
    }

    public function setKode($kode): self
    {
        $this->kode = $kode;

        return $this;
    }

    public function getId(): ?int
    {
        return $this->id;
    }
}

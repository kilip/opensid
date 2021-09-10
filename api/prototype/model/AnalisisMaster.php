<?php

namespace OpenSID\Prototype\Model;

class AnalisisMaster
{
    private $nama;

    private $subjekTipe;

    private $lock;

    private $deskripsi;

    private $kodeAnalisis;

    private $idKelompok;

    private $pembagi;

    private $idChild;

    private $formatImpor;

    private $jenis;

    private $id;

    public function getNama(): ?string
    {
        return $this->nama;
    }

    public function setNama(string $nama): self
    {
        $this->nama = $nama;

        return $this;
    }

    public function getSubjekTipe(): ?int
    {
        return $this->subjekTipe;
    }

    public function setSubjekTipe(int $subjekTipe): self
    {
        $this->subjekTipe = $subjekTipe;

        return $this;
    }

    public function getLock(): ?bool
    {
        return $this->lock;
    }

    public function setLock(bool $lock): self
    {
        $this->lock = $lock;

        return $this;
    }

    public function getDeskripsi(): ?string
    {
        return $this->deskripsi;
    }

    public function setDeskripsi(string $deskripsi): self
    {
        $this->deskripsi = $deskripsi;

        return $this;
    }

    public function getKodeAnalisis(): ?string
    {
        return $this->kodeAnalisis;
    }

    public function setKodeAnalisis(string $kodeAnalisis): self
    {
        $this->kodeAnalisis = $kodeAnalisis;

        return $this;
    }

    public function getIdKelompok(): ?string
    {
        return $this->idKelompok;
    }

    public function setIdKelompok(?string $idKelompok): self
    {
        $this->idKelompok = $idKelompok;

        return $this;
    }

    public function getPembagi(): ?string
    {
        return $this->pembagi;
    }

    public function setPembagi(string $pembagi): self
    {
        $this->pembagi = $pembagi;

        return $this;
    }

    public function getIdChild(): ?int
    {
        return $this->idChild;
    }

    public function setIdChild(?int $idChild): self
    {
        $this->idChild = $idChild;

        return $this;
    }

    public function getFormatImpor(): ?int
    {
        return $this->formatImpor;
    }

    public function setFormatImpor(?int $formatImpor): self
    {
        $this->formatImpor = $formatImpor;

        return $this;
    }

    public function getJenis(): ?int
    {
        return $this->jenis;
    }

    public function setJenis(int $jenis): self
    {
        $this->jenis = $jenis;

        return $this;
    }

    public function getId(): ?string
    {
        return $this->id;
    }
}

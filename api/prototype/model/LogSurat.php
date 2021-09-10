<?php

namespace OpenSID\Prototype\Model;

class LogSurat
{
    private $idFormatSurat;

    private $idPend;

    private $idPamong;

    private $idUser;

    private $tanggal;

    private $bulan;

    private $tahun;

    private $noSurat;

    private $namaSurat;

    private $lampiran;

    private $nikNonWarga;

    private $namaNonWarga;

    private $keterangan;

    private $id;

    public function getIdFormatSurat(): ?int
    {
        return $this->idFormatSurat;
    }

    public function setIdFormatSurat(int $idFormatSurat): self
    {
        $this->idFormatSurat = $idFormatSurat;

        return $this;
    }

    public function getIdPend(): ?string
    {
        return $this->idPend;
    }

    public function setIdPend(?string $idPend): self
    {
        $this->idPend = $idPend;

        return $this;
    }

    public function getIdPamong(): ?int
    {
        return $this->idPamong;
    }

    public function setIdPamong(int $idPamong): self
    {
        $this->idPamong = $idPamong;

        return $this;
    }

    public function getIdUser(): ?int
    {
        return $this->idUser;
    }

    public function setIdUser(int $idUser): self
    {
        $this->idUser = $idUser;

        return $this;
    }

    public function getTanggal(): ?\DateTimeInterface
    {
        return $this->tanggal;
    }

    public function setTanggal(\DateTimeInterface $tanggal): self
    {
        $this->tanggal = $tanggal;

        return $this;
    }

    public function getBulan(): ?string
    {
        return $this->bulan;
    }

    public function setBulan(?string $bulan): self
    {
        $this->bulan = $bulan;

        return $this;
    }

    public function getTahun(): ?string
    {
        return $this->tahun;
    }

    public function setTahun(?string $tahun): self
    {
        $this->tahun = $tahun;

        return $this;
    }

    public function getNoSurat(): ?string
    {
        return $this->noSurat;
    }

    public function setNoSurat(?string $noSurat): self
    {
        $this->noSurat = $noSurat;

        return $this;
    }

    public function getNamaSurat(): ?string
    {
        return $this->namaSurat;
    }

    public function setNamaSurat(?string $namaSurat): self
    {
        $this->namaSurat = $namaSurat;

        return $this;
    }

    public function getLampiran(): ?string
    {
        return $this->lampiran;
    }

    public function setLampiran(?string $lampiran): self
    {
        $this->lampiran = $lampiran;

        return $this;
    }

    public function getNikNonWarga(): ?string
    {
        return $this->nikNonWarga;
    }

    public function setNikNonWarga(?string $nikNonWarga): self
    {
        $this->nikNonWarga = $nikNonWarga;

        return $this;
    }

    public function getNamaNonWarga(): ?string
    {
        return $this->namaNonWarga;
    }

    public function setNamaNonWarga(?string $namaNonWarga): self
    {
        $this->namaNonWarga = $namaNonWarga;

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

    public function getId(): ?string
    {
        return $this->id;
    }
}

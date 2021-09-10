<?php

namespace OpenSID\Prototype\Model;

class ProgramPeserta
{
    private $peserta;

    private $programId;

    private $noIdKartu;

    private $kartuNik;

    private $kartuNama;

    private $kartuTempatLahir;

    private $kartuTanggalLahir;

    private $kartuAlamat;

    private $kartuPeserta;

    private $kartuIdPend;

    private $id;

    public function getPeserta(): ?string
    {
        return $this->peserta;
    }

    public function setPeserta(string $peserta): self
    {
        $this->peserta = $peserta;

        return $this;
    }

    public function getProgramId(): ?string
    {
        return $this->programId;
    }

    public function setProgramId(string $programId): self
    {
        $this->programId = $programId;

        return $this;
    }

    public function getNoIdKartu(): ?string
    {
        return $this->noIdKartu;
    }

    public function setNoIdKartu(?string $noIdKartu): self
    {
        $this->noIdKartu = $noIdKartu;

        return $this;
    }

    public function getKartuNik(): ?string
    {
        return $this->kartuNik;
    }

    public function setKartuNik(?string $kartuNik): self
    {
        $this->kartuNik = $kartuNik;

        return $this;
    }

    public function getKartuNama(): ?string
    {
        return $this->kartuNama;
    }

    public function setKartuNama(?string $kartuNama): self
    {
        $this->kartuNama = $kartuNama;

        return $this;
    }

    public function getKartuTempatLahir(): ?string
    {
        return $this->kartuTempatLahir;
    }

    public function setKartuTempatLahir(?string $kartuTempatLahir): self
    {
        $this->kartuTempatLahir = $kartuTempatLahir;

        return $this;
    }

    public function getKartuTanggalLahir(): ?\DateTimeInterface
    {
        return $this->kartuTanggalLahir;
    }

    public function setKartuTanggalLahir(?\DateTimeInterface $kartuTanggalLahir): self
    {
        $this->kartuTanggalLahir = $kartuTanggalLahir;

        return $this;
    }

    public function getKartuAlamat(): ?string
    {
        return $this->kartuAlamat;
    }

    public function setKartuAlamat(?string $kartuAlamat): self
    {
        $this->kartuAlamat = $kartuAlamat;

        return $this;
    }

    public function getKartuPeserta(): ?string
    {
        return $this->kartuPeserta;
    }

    public function setKartuPeserta(?string $kartuPeserta): self
    {
        $this->kartuPeserta = $kartuPeserta;

        return $this;
    }

    public function getKartuIdPend(): ?string
    {
        return $this->kartuIdPend;
    }

    public function setKartuIdPend(?string $kartuIdPend): self
    {
        $this->kartuIdPend = $kartuIdPend;

        return $this;
    }

    public function getId(): ?string
    {
        return $this->id;
    }
}

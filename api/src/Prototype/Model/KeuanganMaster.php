<?php

namespace OpenSID\Prototype\Model;

class KeuanganMaster
{
    private $versiDatabase;

    private $tahunAnggaran;

    private $aktif;

    private $tanggalImpor;

    private $id;

    public function getVersiDatabase(): ?string
    {
        return $this->versiDatabase;
    }

    public function setVersiDatabase(string $versiDatabase): self
    {
        $this->versiDatabase = $versiDatabase;

        return $this;
    }

    public function getTahunAnggaran(): ?string
    {
        return $this->tahunAnggaran;
    }

    public function setTahunAnggaran(string $tahunAnggaran): self
    {
        $this->tahunAnggaran = $tahunAnggaran;

        return $this;
    }

    public function getAktif(): ?int
    {
        return $this->aktif;
    }

    public function setAktif(int $aktif): self
    {
        $this->aktif = $aktif;

        return $this;
    }

    public function getTanggalImpor(): ?\DateTimeInterface
    {
        return $this->tanggalImpor;
    }

    public function setTanggalImpor(\DateTimeInterface $tanggalImpor): self
    {
        $this->tanggalImpor = $tanggalImpor;

        return $this;
    }

    public function getId(): ?int
    {
        return $this->id;
    }
}

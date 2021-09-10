<?php

namespace OpenSID\Prototype\Model;

class AnalisisParameter
{
    private $idIndikator;

    private $jawaban;

    private $nilai;

    private $kodeJawaban;

    private $asign;

    private $id;

    public function getIdIndikator(): ?string
    {
        return $this->idIndikator;
    }

    public function setIdIndikator(string $idIndikator): self
    {
        $this->idIndikator = $idIndikator;

        return $this;
    }

    public function getJawaban(): ?string
    {
        return $this->jawaban;
    }

    public function setJawaban(string $jawaban): self
    {
        $this->jawaban = $jawaban;

        return $this;
    }

    public function getNilai(): ?int
    {
        return $this->nilai;
    }

    public function setNilai(int $nilai): self
    {
        $this->nilai = $nilai;

        return $this;
    }

    public function getKodeJawaban(): ?int
    {
        return $this->kodeJawaban;
    }

    public function setKodeJawaban(?int $kodeJawaban): self
    {
        $this->kodeJawaban = $kodeJawaban;

        return $this;
    }

    public function getAsign(): ?bool
    {
        return $this->asign;
    }

    public function setAsign(bool $asign): self
    {
        $this->asign = $asign;

        return $this;
    }

    public function getId(): ?string
    {
        return $this->id;
    }
}

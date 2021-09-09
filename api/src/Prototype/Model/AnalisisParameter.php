<?php

/*
 * This file is part of the OpenSID project.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace OpenSID\Prototype\Model;

class AnalisisParameter
{
    private $idIndikator;

    private $jawaban;

    private $nilai;

    private $kodeJawaban;

    private $asign;

    private $id;

    public function getIdIndikator(): ?int
    {
        return $this->idIndikator;
    }

    public function setIdIndikator(int $idIndikator): self
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

    public function getAsign()
    {
        return $this->asign;
    }

    public function setAsign($asign): self
    {
        $this->asign = $asign;

        return $this;
    }

    public function getId(): ?int
    {
        return $this->id;
    }
}

<?php

/*
 * This file is part of the OpenSID project.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace OpenSID\Prototype\Model;

class KeuanganManualRefRek2
{
    private $akun;

    private $kelompok;

    private $namaKelompok;

    private $id;

    public function getAkun(): ?string
    {
        return $this->akun;
    }

    public function setAkun(string $akun): self
    {
        $this->akun = $akun;

        return $this;
    }

    public function getKelompok(): ?string
    {
        return $this->kelompok;
    }

    public function setKelompok(string $kelompok): self
    {
        $this->kelompok = $kelompok;

        return $this;
    }

    public function getNamaKelompok(): ?string
    {
        return $this->namaKelompok;
    }

    public function setNamaKelompok(string $namaKelompok): self
    {
        $this->namaKelompok = $namaKelompok;

        return $this;
    }

    public function getId(): ?string
    {
        return $this->id;
    }
}

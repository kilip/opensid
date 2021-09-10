<?php

/*
 * This file is part of the OpenSID project.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace OpenSID\Prototype\Model;

class KeuanganManualRefRek3
{
    private $kelompok;

    private $jenis;

    private $namaJenis;

    private $id;

    public function getKelompok(): ?string
    {
        return $this->kelompok;
    }

    public function setKelompok(string $kelompok): self
    {
        $this->kelompok = $kelompok;

        return $this;
    }

    public function getJenis(): ?string
    {
        return $this->jenis;
    }

    public function setJenis(string $jenis): self
    {
        $this->jenis = $jenis;

        return $this;
    }

    public function getNamaJenis(): ?string
    {
        return $this->namaJenis;
    }

    public function setNamaJenis(string $namaJenis): self
    {
        $this->namaJenis = $namaJenis;

        return $this;
    }

    public function getId(): ?string
    {
        return $this->id;
    }
}

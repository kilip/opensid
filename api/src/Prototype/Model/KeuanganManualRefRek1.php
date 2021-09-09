<?php

/*
 * This file is part of the OpenSID project.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace OpenSID\Prototype\Model;

class KeuanganManualRefRek1
{
    private $akun;

    private $namaAkun;

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

    public function getNamaAkun(): ?string
    {
        return $this->namaAkun;
    }

    public function setNamaAkun(string $namaAkun): self
    {
        $this->namaAkun = $namaAkun;

        return $this;
    }

    public function getId(): ?int
    {
        return $this->id;
    }
}

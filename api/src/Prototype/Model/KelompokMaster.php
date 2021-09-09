<?php

/*
 * This file is part of the OpenSID project.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace OpenSID\Prototype\Model;

class KelompokMaster
{
    private $kelompok;

    private $deskripsi;

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

    public function getDeskripsi(): ?string
    {
        return $this->deskripsi;
    }

    public function setDeskripsi(string $deskripsi): self
    {
        $this->deskripsi = $deskripsi;

        return $this;
    }

    public function getId(): ?int
    {
        return $this->id;
    }
}

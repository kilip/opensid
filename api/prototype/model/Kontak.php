<?php

/*
 * This file is part of the OpenSID project.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace OpenSID\Prototype\Model;

class Kontak
{
    private $noHp;

    private $idKontak;

    private $idPend;

    public function getNoHp(): ?string
    {
        return $this->noHp;
    }

    public function setNoHp(?string $noHp): self
    {
        $this->noHp = $noHp;

        return $this;
    }

    public function getIdKontak(): ?string
    {
        return $this->idKontak;
    }

    public function getIdPend(): ?TwebPenduduk
    {
        return $this->idPend;
    }

    public function setIdPend(?TwebPenduduk $idPend): self
    {
        $this->idPend = $idPend;

        return $this;
    }
}

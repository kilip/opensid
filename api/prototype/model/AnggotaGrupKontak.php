<?php

/*
 * This file is part of the OpenSID project.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace OpenSID\Prototype\Model;

class AnggotaGrupKontak
{
    private $idGrupKontak;

    private $idKontak;

    private $idGrup;

    public function getIdGrupKontak(): ?string
    {
        return $this->idGrupKontak;
    }

    public function getIdKontak(): ?Kontak
    {
        return $this->idKontak;
    }

    public function setIdKontak(?Kontak $idKontak): self
    {
        $this->idKontak = $idKontak;

        return $this;
    }

    public function getIdGrup(): ?KontakGrup
    {
        return $this->idGrup;
    }

    public function setIdGrup(?KontakGrup $idGrup): self
    {
        $this->idGrup = $idGrup;

        return $this;
    }
}

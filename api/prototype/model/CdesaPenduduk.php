<?php

/*
 * This file is part of the OpenSID project.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace OpenSID\Prototype\Model;

class CdesaPenduduk
{
    private $idPend;

    private $id;

    private $idCdesa;

    public function getIdPend(): ?string
    {
        return $this->idPend;
    }

    public function setIdPend(string $idPend): self
    {
        $this->idPend = $idPend;

        return $this;
    }

    public function getId(): ?string
    {
        return $this->id;
    }

    public function getIdCdesa(): ?Cdesa
    {
        return $this->idCdesa;
    }

    public function setIdCdesa(?Cdesa $idCdesa): self
    {
        $this->idCdesa = $idCdesa;

        return $this;
    }
}

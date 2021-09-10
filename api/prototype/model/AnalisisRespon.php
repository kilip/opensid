<?php

/*
 * This file is part of the OpenSID project.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace OpenSID\Prototype\Model;

class AnalisisRespon
{
    private $idIndikator;

    private $idParameter;

    private $idSubjek;

    private $idPeriode;

    public function getIdIndikator(): ?string
    {
        return $this->idIndikator;
    }

    public function getIdParameter(): ?string
    {
        return $this->idParameter;
    }

    public function getIdSubjek(): ?string
    {
        return $this->idSubjek;
    }

    public function getIdPeriode(): ?string
    {
        return $this->idPeriode;
    }
}

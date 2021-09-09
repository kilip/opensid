<?php

/*
 * This file is part of the OpenSID project.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace OpenSID\Prototype\Model;

class KontakGrup
{
    private $namaGrup;

    private $idGrup;

    public function getNamaGrup(): ?string
    {
        return $this->namaGrup;
    }

    public function setNamaGrup(string $namaGrup): self
    {
        $this->namaGrup = $namaGrup;

        return $this;
    }

    public function getIdGrup(): ?int
    {
        return $this->idGrup;
    }
}

<?php

/*
 * This file is part of the OpenSID project.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace OpenSID\Prototype\Model;

class AnalisisTipeIndikator
{
    private $tipe;

    private $id;

    public function getTipe(): ?string
    {
        return $this->tipe;
    }

    public function setTipe(string $tipe): self
    {
        $this->tipe = $tipe;

        return $this;
    }

    public function getId()
    {
        return $this->id;
    }
}

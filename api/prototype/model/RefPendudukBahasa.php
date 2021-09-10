<?php

/*
 * This file is part of the OpenSID project.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace OpenSID\Prototype\Model;

class RefPendudukBahasa
{
    private $nama;

    private $inisial;

    private $id;

    public function getNama(): ?string
    {
        return $this->nama;
    }

    public function setNama(string $nama): self
    {
        $this->nama = $nama;

        return $this;
    }

    public function getInisial(): ?string
    {
        return $this->inisial;
    }

    public function setInisial(string $inisial): self
    {
        $this->inisial = $inisial;

        return $this;
    }

    public function getId(): ?string
    {
        return $this->id;
    }
}

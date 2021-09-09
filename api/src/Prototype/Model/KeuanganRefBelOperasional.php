<?php

/*
 * This file is part of the OpenSID project.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace OpenSID\Prototype\Model;

class KeuanganRefBelOperasional
{
    private $idKeg;

    private $id;

    private $idKeuanganMaster;

    public function getIdKeg(): ?string
    {
        return $this->idKeg;
    }

    public function setIdKeg(string $idKeg): self
    {
        $this->idKeg = $idKeg;

        return $this;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdKeuanganMaster(): ?KeuanganMaster
    {
        return $this->idKeuanganMaster;
    }

    public function setIdKeuanganMaster(?KeuanganMaster $idKeuanganMaster): self
    {
        $this->idKeuanganMaster = $idKeuanganMaster;

        return $this;
    }
}

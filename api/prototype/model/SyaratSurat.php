<?php

/*
 * This file is part of the OpenSID project.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace OpenSID\Prototype\Model;

class SyaratSurat
{
    private $refSyaratId;

    private $id;

    private $suratFormat;

    public function getRefSyaratId(): ?string
    {
        return $this->refSyaratId;
    }

    public function setRefSyaratId(string $refSyaratId): self
    {
        $this->refSyaratId = $refSyaratId;

        return $this;
    }

    public function getId(): ?string
    {
        return $this->id;
    }

    public function getSuratFormat(): ?TwebSuratFormat
    {
        return $this->suratFormat;
    }

    public function setSuratFormat(?TwebSuratFormat $suratFormat): self
    {
        $this->suratFormat = $suratFormat;

        return $this;
    }
}

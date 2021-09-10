<?php

/*
 * This file is part of the OpenSID project.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace OpenSID\Prototype\Model;

class RefSyaratSurat
{
    private $refSyaratNama;

    private $refSyaratId;

    public function getRefSyaratNama(): ?string
    {
        return $this->refSyaratNama;
    }

    public function setRefSyaratNama(string $refSyaratNama): self
    {
        $this->refSyaratNama = $refSyaratNama;

        return $this;
    }

    public function getRefSyaratId(): ?int
    {
        return $this->refSyaratId;
    }
}

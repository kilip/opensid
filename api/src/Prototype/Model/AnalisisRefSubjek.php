<?php

/*
 * This file is part of the OpenSID project.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace OpenSID\Prototype\Model;

class AnalisisRefSubjek
{
    private $subjek;

    private $id;

    public function getSubjek(): ?string
    {
        return $this->subjek;
    }

    public function setSubjek(string $subjek): self
    {
        $this->subjek = $subjek;

        return $this;
    }

    public function getId()
    {
        return $this->id;
    }
}

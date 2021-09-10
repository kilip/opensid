<?php

/*
 * This file is part of the OpenSID project.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace OpenSID\Prototype\Model;

class Migrasi
{
    private $versiDatabase;

    private $id;

    public function getVersiDatabase(): ?string
    {
        return $this->versiDatabase;
    }

    public function setVersiDatabase(string $versiDatabase): self
    {
        $this->versiDatabase = $versiDatabase;

        return $this;
    }

    public function getId(): ?string
    {
        return $this->id;
    }
}

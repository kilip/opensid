<?php

/*
 * This file is part of the OpenSID project.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace OpenSID\Prototype\Model;

class SettingSms
{
    private $autoreplyText;

    private $uuid;

    public function getAutoreplyText(): ?string
    {
        return $this->autoreplyText;
    }

    public function setAutoreplyText(?string $autoreplyText): self
    {
        $this->autoreplyText = $autoreplyText;

        return $this;
    }

    public function getUuid(): ?string
    {
        return $this->uuid;
    }
}

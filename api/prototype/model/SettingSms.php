<?php

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

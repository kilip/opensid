<?php

/*
 * This file is part of the OpenSID project.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace OpenSID\Prototype\Model;

class CaptchaCodes
{
    private $code;

    private $codeDisplay;

    private $created;

    private $audioData;

    private $id;

    private $namespace;

    public function getCode(): ?string
    {
        return $this->code;
    }

    public function setCode(string $code): self
    {
        $this->code = $code;

        return $this;
    }

    public function getCodeDisplay(): ?string
    {
        return $this->codeDisplay;
    }

    public function setCodeDisplay(string $codeDisplay): self
    {
        $this->codeDisplay = $codeDisplay;

        return $this;
    }

    public function getCreated(): ?string
    {
        return $this->created;
    }

    public function setCreated(string $created): self
    {
        $this->created = $created;

        return $this;
    }

    public function getAudioData()
    {
        return $this->audioData;
    }

    public function setAudioData($audioData): self
    {
        $this->audioData = $audioData;

        return $this;
    }

    public function getId(): ?string
    {
        return $this->id;
    }

    public function getNamespace(): ?string
    {
        return $this->namespace;
    }
}

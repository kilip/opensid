<?php

namespace OpenSID\Prototype\Model;

class DoctrineMigrationVersions
{
    private $executedAt;

    private $executionTime;

    private $version;

    public function getExecutedAt(): ?\DateTimeInterface
    {
        return $this->executedAt;
    }

    public function setExecutedAt(?\DateTimeInterface $executedAt): self
    {
        $this->executedAt = $executedAt;

        return $this;
    }

    public function getExecutionTime(): ?int
    {
        return $this->executionTime;
    }

    public function setExecutionTime(?int $executionTime): self
    {
        $this->executionTime = $executionTime;

        return $this;
    }

    public function getVersion(): ?string
    {
        return $this->version;
    }
}

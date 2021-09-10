<?php

namespace OpenSID\Prototype\Model;

class TwebCaraKb
{
    private $nama;

    private $sex;

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

    public function getSex(): ?int
    {
        return $this->sex;
    }

    public function setSex(?int $sex): self
    {
        $this->sex = $sex;

        return $this;
    }

    public function getId(): ?int
    {
        return $this->id;
    }
}

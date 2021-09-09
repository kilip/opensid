<?php

namespace OpenSID\Prototype\Model;

class Menu
{
    private $nama;

    private $link;

    private $tipe;

    private $parrent;

    private $linkTipe;

    private $enabled;

    private $urut;

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

    public function getLink(): ?string
    {
        return $this->link;
    }

    public function setLink(string $link): self
    {
        $this->link = $link;

        return $this;
    }

    public function getTipe(): ?int
    {
        return $this->tipe;
    }

    public function setTipe(int $tipe): self
    {
        $this->tipe = $tipe;

        return $this;
    }

    public function getParrent(): ?int
    {
        return $this->parrent;
    }

    public function setParrent(int $parrent): self
    {
        $this->parrent = $parrent;

        return $this;
    }

    public function getLinkTipe()
    {
        return $this->linkTipe;
    }

    public function setLinkTipe($linkTipe): self
    {
        $this->linkTipe = $linkTipe;

        return $this;
    }

    public function getEnabled(): ?int
    {
        return $this->enabled;
    }

    public function setEnabled(int $enabled): self
    {
        $this->enabled = $enabled;

        return $this;
    }

    public function getUrut(): ?int
    {
        return $this->urut;
    }

    public function setUrut(?int $urut): self
    {
        $this->urut = $urut;

        return $this;
    }

    public function getId(): ?int
    {
        return $this->id;
    }
}

<?php

namespace OpenSID\Prototype\Model;

class SettingModul
{
    private $modul;

    private $url;

    private $aktif;

    private $ikon;

    private $urut;

    private $level;

    private $hidden;

    private $ikonKecil;

    private $parent;

    private $id;

    public function getModul(): ?string
    {
        return $this->modul;
    }

    public function setModul(string $modul): self
    {
        $this->modul = $modul;

        return $this;
    }

    public function getUrl(): ?string
    {
        return $this->url;
    }

    public function setUrl(string $url): self
    {
        $this->url = $url;

        return $this;
    }

    public function getAktif()
    {
        return $this->aktif;
    }

    public function setAktif($aktif): self
    {
        $this->aktif = $aktif;

        return $this;
    }

    public function getIkon(): ?string
    {
        return $this->ikon;
    }

    public function setIkon(string $ikon): self
    {
        $this->ikon = $ikon;

        return $this;
    }

    public function getUrut()
    {
        return $this->urut;
    }

    public function setUrut($urut): self
    {
        $this->urut = $urut;

        return $this;
    }

    public function getLevel()
    {
        return $this->level;
    }

    public function setLevel($level): self
    {
        $this->level = $level;

        return $this;
    }

    public function getHidden()
    {
        return $this->hidden;
    }

    public function setHidden($hidden): self
    {
        $this->hidden = $hidden;

        return $this;
    }

    public function getIkonKecil(): ?string
    {
        return $this->ikonKecil;
    }

    public function setIkonKecil(string $ikonKecil): self
    {
        $this->ikonKecil = $ikonKecil;

        return $this;
    }

    public function getParent(): ?int
    {
        return $this->parent;
    }

    public function setParent(int $parent): self
    {
        $this->parent = $parent;

        return $this;
    }

    public function getId(): ?int
    {
        return $this->id;
    }
}
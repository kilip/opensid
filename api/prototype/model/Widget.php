<?php

/*
 * This file is part of the OpenSID project.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace OpenSID\Prototype\Model;

class Widget
{
    private $isi;

    private $enabled;

    private $judul;

    private $jenisWidget;

    private $urut;

    private $formAdmin;

    private $setting;

    private $id;

    public function getIsi(): ?string
    {
        return $this->isi;
    }

    public function setIsi(?string $isi): self
    {
        $this->isi = $isi;

        return $this;
    }

    public function getEnabled(): ?int
    {
        return $this->enabled;
    }

    public function setEnabled(?int $enabled): self
    {
        $this->enabled = $enabled;

        return $this;
    }

    public function getJudul(): ?string
    {
        return $this->judul;
    }

    public function setJudul(?string $judul): self
    {
        $this->judul = $judul;

        return $this;
    }

    public function getJenisWidget(): ?int
    {
        return $this->jenisWidget;
    }

    public function setJenisWidget(int $jenisWidget): self
    {
        $this->jenisWidget = $jenisWidget;

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

    public function getFormAdmin(): ?string
    {
        return $this->formAdmin;
    }

    public function setFormAdmin(?string $formAdmin): self
    {
        $this->formAdmin = $formAdmin;

        return $this;
    }

    public function getSetting(): ?string
    {
        return $this->setting;
    }

    public function setSetting(?string $setting): self
    {
        $this->setting = $setting;

        return $this;
    }

    public function getId(): ?string
    {
        return $this->id;
    }
}

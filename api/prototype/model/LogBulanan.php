<?php

/*
 * This file is part of the OpenSID project.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace OpenSID\Prototype\Model;

class LogBulanan
{
    private $pend;

    private $wniLk;

    private $wniPr;

    private $kk;

    private $tgl;

    private $kkLk;

    private $kkPr;

    private $wnaLk;

    private $wnaPr;

    private $id;

    public function getPend(): ?string
    {
        return $this->pend;
    }

    public function setPend(string $pend): self
    {
        $this->pend = $pend;

        return $this;
    }

    public function getWniLk(): ?string
    {
        return $this->wniLk;
    }

    public function setWniLk(?string $wniLk): self
    {
        $this->wniLk = $wniLk;

        return $this;
    }

    public function getWniPr(): ?string
    {
        return $this->wniPr;
    }

    public function setWniPr(?string $wniPr): self
    {
        $this->wniPr = $wniPr;

        return $this;
    }

    public function getKk(): ?string
    {
        return $this->kk;
    }

    public function setKk(string $kk): self
    {
        $this->kk = $kk;

        return $this;
    }

    public function getTgl(): ?\DateTimeInterface
    {
        return $this->tgl;
    }

    public function setTgl(?\DateTimeInterface $tgl): self
    {
        $this->tgl = $tgl;

        return $this;
    }

    public function getKkLk(): ?string
    {
        return $this->kkLk;
    }

    public function setKkLk(?string $kkLk): self
    {
        $this->kkLk = $kkLk;

        return $this;
    }

    public function getKkPr(): ?string
    {
        return $this->kkPr;
    }

    public function setKkPr(?string $kkPr): self
    {
        $this->kkPr = $kkPr;

        return $this;
    }

    public function getWnaLk(): ?string
    {
        return $this->wnaLk;
    }

    public function setWnaLk(?string $wnaLk): self
    {
        $this->wnaLk = $wnaLk;

        return $this;
    }

    public function getWnaPr(): ?string
    {
        return $this->wnaPr;
    }

    public function setWnaPr(?string $wnaPr): self
    {
        $this->wnaPr = $wnaPr;

        return $this;
    }

    public function getId(): ?string
    {
        return $this->id;
    }
}

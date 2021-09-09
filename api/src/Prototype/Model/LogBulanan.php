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

    public function getPend(): ?int
    {
        return $this->pend;
    }

    public function setPend(int $pend): self
    {
        $this->pend = $pend;

        return $this;
    }

    public function getWniLk(): ?int
    {
        return $this->wniLk;
    }

    public function setWniLk(?int $wniLk): self
    {
        $this->wniLk = $wniLk;

        return $this;
    }

    public function getWniPr(): ?int
    {
        return $this->wniPr;
    }

    public function setWniPr(?int $wniPr): self
    {
        $this->wniPr = $wniPr;

        return $this;
    }

    public function getKk(): ?int
    {
        return $this->kk;
    }

    public function setKk(int $kk): self
    {
        $this->kk = $kk;

        return $this;
    }

    public function getTgl(): ?\DateTimeInterface
    {
        return $this->tgl;
    }

    public function setTgl(\DateTimeInterface $tgl): self
    {
        $this->tgl = $tgl;

        return $this;
    }

    public function getKkLk(): ?int
    {
        return $this->kkLk;
    }

    public function setKkLk(?int $kkLk): self
    {
        $this->kkLk = $kkLk;

        return $this;
    }

    public function getKkPr(): ?int
    {
        return $this->kkPr;
    }

    public function setKkPr(?int $kkPr): self
    {
        $this->kkPr = $kkPr;

        return $this;
    }

    public function getWnaLk(): ?int
    {
        return $this->wnaLk;
    }

    public function setWnaLk(?int $wnaLk): self
    {
        $this->wnaLk = $wnaLk;

        return $this;
    }

    public function getWnaPr(): ?int
    {
        return $this->wnaPr;
    }

    public function setWnaPr(?int $wnaPr): self
    {
        $this->wnaPr = $wnaPr;

        return $this;
    }

    public function getId(): ?int
    {
        return $this->id;
    }
}

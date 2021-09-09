<?php

/*
 * This file is part of the OpenSID project.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace OpenSID\Prototype\Model;

class Program
{
    private $nama;

    private $sasaran;

    private $ndesc;

    private $sdate;

    private $edate;

    private $userid;

    private $status;

    private $asaldana;

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

    public function getSasaran()
    {
        return $this->sasaran;
    }

    public function setSasaran($sasaran): self
    {
        $this->sasaran = $sasaran;

        return $this;
    }

    public function getNdesc(): ?string
    {
        return $this->ndesc;
    }

    public function setNdesc(?string $ndesc): self
    {
        $this->ndesc = $ndesc;

        return $this;
    }

    public function getSdate(): ?\DateTimeInterface
    {
        return $this->sdate;
    }

    public function setSdate(\DateTimeInterface $sdate): self
    {
        $this->sdate = $sdate;

        return $this;
    }

    public function getEdate(): ?\DateTimeInterface
    {
        return $this->edate;
    }

    public function setEdate(\DateTimeInterface $edate): self
    {
        $this->edate = $edate;

        return $this;
    }

    public function getUserid(): ?int
    {
        return $this->userid;
    }

    public function setUserid(int $userid): self
    {
        $this->userid = $userid;

        return $this;
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function setStatus($status): self
    {
        $this->status = $status;

        return $this;
    }

    public function getAsaldana(): ?string
    {
        return $this->asaldana;
    }

    public function setAsaldana(?string $asaldana): self
    {
        $this->asaldana = $asaldana;

        return $this;
    }

    public function getId(): ?int
    {
        return $this->id;
    }
}

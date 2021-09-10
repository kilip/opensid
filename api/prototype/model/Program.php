<?php

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

    public function getSasaran(): ?int
    {
        return $this->sasaran;
    }

    public function setSasaran(?int $sasaran): self
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

    public function getStatus(): ?bool
    {
        return $this->status;
    }

    public function setStatus(bool $status): self
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

    public function getId(): ?string
    {
        return $this->id;
    }
}

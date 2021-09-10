<?php

/*
 * This file is part of the OpenSID project.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace OpenSID\Prototype\Model;

class MutasiCdesa
{
    private $cdesaKeluar;

    private $jenisMutasi;

    private $tanggalMutasi;

    private $keterangan;

    private $idPersil;

    private $noBidangPersil;

    private $luas;

    private $noObjekPajak;

    private $path;

    private $id;

    private $idCdesaMasuk;

    public function getCdesaKeluar(): ?int
    {
        return $this->cdesaKeluar;
    }

    public function setCdesaKeluar(?int $cdesaKeluar): self
    {
        $this->cdesaKeluar = $cdesaKeluar;

        return $this;
    }

    public function getJenisMutasi(): ?int
    {
        return $this->jenisMutasi;
    }

    public function setJenisMutasi(?int $jenisMutasi): self
    {
        $this->jenisMutasi = $jenisMutasi;

        return $this;
    }

    public function getTanggalMutasi(): ?\DateTimeInterface
    {
        return $this->tanggalMutasi;
    }

    public function setTanggalMutasi(?\DateTimeInterface $tanggalMutasi): self
    {
        $this->tanggalMutasi = $tanggalMutasi;

        return $this;
    }

    public function getKeterangan(): ?string
    {
        return $this->keterangan;
    }

    public function setKeterangan(?string $keterangan): self
    {
        $this->keterangan = $keterangan;

        return $this;
    }

    public function getIdPersil(): ?string
    {
        return $this->idPersil;
    }

    public function setIdPersil(string $idPersil): self
    {
        $this->idPersil = $idPersil;

        return $this;
    }

    public function getNoBidangPersil(): ?int
    {
        return $this->noBidangPersil;
    }

    public function setNoBidangPersil(?int $noBidangPersil): self
    {
        $this->noBidangPersil = $noBidangPersil;

        return $this;
    }

    public function getLuas(): ?string
    {
        return $this->luas;
    }

    public function setLuas(?string $luas): self
    {
        $this->luas = $luas;

        return $this;
    }

    public function getNoObjekPajak(): ?string
    {
        return $this->noObjekPajak;
    }

    public function setNoObjekPajak(?string $noObjekPajak): self
    {
        $this->noObjekPajak = $noObjekPajak;

        return $this;
    }

    public function getPath(): ?string
    {
        return $this->path;
    }

    public function setPath(?string $path): self
    {
        $this->path = $path;

        return $this;
    }

    public function getId(): ?string
    {
        return $this->id;
    }

    public function getIdCdesaMasuk(): ?Cdesa
    {
        return $this->idCdesaMasuk;
    }

    public function setIdCdesaMasuk(?Cdesa $idCdesaMasuk): self
    {
        $this->idCdesaMasuk = $idCdesaMasuk;

        return $this;
    }
}

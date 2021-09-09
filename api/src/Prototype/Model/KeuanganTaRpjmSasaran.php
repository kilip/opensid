<?php

/*
 * This file is part of the OpenSID project.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace OpenSID\Prototype\Model;

class KeuanganTaRpjmSasaran
{
    private $idSasaran;

    private $kdDesa;

    private $idTujuan;

    private $noSasaran;

    private $uraianSasaran;

    private $id;

    private $idKeuanganMaster;

    public function getIdSasaran(): ?string
    {
        return $this->idSasaran;
    }

    public function setIdSasaran(string $idSasaran): self
    {
        $this->idSasaran = $idSasaran;

        return $this;
    }

    public function getKdDesa(): ?string
    {
        return $this->kdDesa;
    }

    public function setKdDesa(string $kdDesa): self
    {
        $this->kdDesa = $kdDesa;

        return $this;
    }

    public function getIdTujuan(): ?string
    {
        return $this->idTujuan;
    }

    public function setIdTujuan(string $idTujuan): self
    {
        $this->idTujuan = $idTujuan;

        return $this;
    }

    public function getNoSasaran(): ?string
    {
        return $this->noSasaran;
    }

    public function setNoSasaran(string $noSasaran): self
    {
        $this->noSasaran = $noSasaran;

        return $this;
    }

    public function getUraianSasaran(): ?string
    {
        return $this->uraianSasaran;
    }

    public function setUraianSasaran(?string $uraianSasaran): self
    {
        $this->uraianSasaran = $uraianSasaran;

        return $this;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdKeuanganMaster(): ?KeuanganMaster
    {
        return $this->idKeuanganMaster;
    }

    public function setIdKeuanganMaster(?KeuanganMaster $idKeuanganMaster): self
    {
        $this->idKeuanganMaster = $idKeuanganMaster;

        return $this;
    }
}

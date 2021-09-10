<?php

/*
 * This file is part of the OpenSID project.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace OpenSID\Prototype\Model;

class KeuanganTaDesa
{
    private $tahun;

    private $kdDesa;

    private $nmKades;

    private $jbtKades;

    private $nmSekdes;

    private $nipSekdes;

    private $jbtSekdes;

    private $nmKaurKeu;

    private $jbtKaurKeu;

    private $nmBendahara;

    private $jbtBendahara;

    private $noPerdes;

    private $tglPerdes;

    private $noPerdesPb;

    private $tglPerdesPb;

    private $noPerdesPj;

    private $tglPerdesPj;

    private $alamat;

    private $ibukota;

    private $status;

    private $npwp;

    private $id;

    private $idKeuanganMaster;

    public function getTahun(): ?string
    {
        return $this->tahun;
    }

    public function setTahun(string $tahun): self
    {
        $this->tahun = $tahun;

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

    public function getNmKades(): ?string
    {
        return $this->nmKades;
    }

    public function setNmKades(string $nmKades): self
    {
        $this->nmKades = $nmKades;

        return $this;
    }

    public function getJbtKades(): ?string
    {
        return $this->jbtKades;
    }

    public function setJbtKades(string $jbtKades): self
    {
        $this->jbtKades = $jbtKades;

        return $this;
    }

    public function getNmSekdes(): ?string
    {
        return $this->nmSekdes;
    }

    public function setNmSekdes(string $nmSekdes): self
    {
        $this->nmSekdes = $nmSekdes;

        return $this;
    }

    public function getNipSekdes(): ?string
    {
        return $this->nipSekdes;
    }

    public function setNipSekdes(string $nipSekdes): self
    {
        $this->nipSekdes = $nipSekdes;

        return $this;
    }

    public function getJbtSekdes(): ?string
    {
        return $this->jbtSekdes;
    }

    public function setJbtSekdes(string $jbtSekdes): self
    {
        $this->jbtSekdes = $jbtSekdes;

        return $this;
    }

    public function getNmKaurKeu(): ?string
    {
        return $this->nmKaurKeu;
    }

    public function setNmKaurKeu(string $nmKaurKeu): self
    {
        $this->nmKaurKeu = $nmKaurKeu;

        return $this;
    }

    public function getJbtKaurKeu(): ?string
    {
        return $this->jbtKaurKeu;
    }

    public function setJbtKaurKeu(string $jbtKaurKeu): self
    {
        $this->jbtKaurKeu = $jbtKaurKeu;

        return $this;
    }

    public function getNmBendahara(): ?string
    {
        return $this->nmBendahara;
    }

    public function setNmBendahara(string $nmBendahara): self
    {
        $this->nmBendahara = $nmBendahara;

        return $this;
    }

    public function getJbtBendahara(): ?string
    {
        return $this->jbtBendahara;
    }

    public function setJbtBendahara(string $jbtBendahara): self
    {
        $this->jbtBendahara = $jbtBendahara;

        return $this;
    }

    public function getNoPerdes(): ?string
    {
        return $this->noPerdes;
    }

    public function setNoPerdes(string $noPerdes): self
    {
        $this->noPerdes = $noPerdes;

        return $this;
    }

    public function getTglPerdes(): ?string
    {
        return $this->tglPerdes;
    }

    public function setTglPerdes(string $tglPerdes): self
    {
        $this->tglPerdes = $tglPerdes;

        return $this;
    }

    public function getNoPerdesPb(): ?string
    {
        return $this->noPerdesPb;
    }

    public function setNoPerdesPb(string $noPerdesPb): self
    {
        $this->noPerdesPb = $noPerdesPb;

        return $this;
    }

    public function getTglPerdesPb(): ?string
    {
        return $this->tglPerdesPb;
    }

    public function setTglPerdesPb(string $tglPerdesPb): self
    {
        $this->tglPerdesPb = $tglPerdesPb;

        return $this;
    }

    public function getNoPerdesPj(): ?string
    {
        return $this->noPerdesPj;
    }

    public function setNoPerdesPj(string $noPerdesPj): self
    {
        $this->noPerdesPj = $noPerdesPj;

        return $this;
    }

    public function getTglPerdesPj(): ?string
    {
        return $this->tglPerdesPj;
    }

    public function setTglPerdesPj(string $tglPerdesPj): self
    {
        $this->tglPerdesPj = $tglPerdesPj;

        return $this;
    }

    public function getAlamat(): ?string
    {
        return $this->alamat;
    }

    public function setAlamat(string $alamat): self
    {
        $this->alamat = $alamat;

        return $this;
    }

    public function getIbukota(): ?string
    {
        return $this->ibukota;
    }

    public function setIbukota(string $ibukota): self
    {
        $this->ibukota = $ibukota;

        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(string $status): self
    {
        $this->status = $status;

        return $this;
    }

    public function getNpwp(): ?string
    {
        return $this->npwp;
    }

    public function setNpwp(string $npwp): self
    {
        $this->npwp = $npwp;

        return $this;
    }

    public function getId(): ?string
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

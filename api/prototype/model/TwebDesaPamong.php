<?php

/*
 * This file is part of the OpenSID project.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace OpenSID\Prototype\Model;

class TwebDesaPamong
{
    private $pamongNama;

    private $pamongNip;

    private $pamongNik;

    private $jabatan;

    private $pamongStatus;

    private $pamongTglTerdaftar;

    private $pamongTtd;

    private $foto;

    private $idPend;

    private $pamongTempatlahir;

    private $pamongTanggallahir;

    private $pamongSex;

    private $pamongPendidikan;

    private $pamongAgama;

    private $pamongNosk;

    private $pamongTglsk;

    private $pamongMasajab;

    private $urut;

    private $pamongNiap;

    private $pamongPangkat;

    private $pamongNohenti;

    private $pamongTglhenti;

    private $pamongUb;

    private $atasan;

    private $baganTingkat;

    private $baganOffset;

    private $baganLayout;

    private $baganWarna;

    private $pamongId;

    public function getPamongNama(): ?string
    {
        return $this->pamongNama;
    }

    public function setPamongNama(?string $pamongNama): self
    {
        $this->pamongNama = $pamongNama;

        return $this;
    }

    public function getPamongNip(): ?string
    {
        return $this->pamongNip;
    }

    public function setPamongNip(?string $pamongNip): self
    {
        $this->pamongNip = $pamongNip;

        return $this;
    }

    public function getPamongNik(): ?string
    {
        return $this->pamongNik;
    }

    public function setPamongNik(?string $pamongNik): self
    {
        $this->pamongNik = $pamongNik;

        return $this;
    }

    public function getJabatan(): ?string
    {
        return $this->jabatan;
    }

    public function setJabatan(?string $jabatan): self
    {
        $this->jabatan = $jabatan;

        return $this;
    }

    public function getPamongStatus(): ?string
    {
        return $this->pamongStatus;
    }

    public function setPamongStatus(?string $pamongStatus): self
    {
        $this->pamongStatus = $pamongStatus;

        return $this;
    }

    public function getPamongTglTerdaftar(): ?\DateTimeInterface
    {
        return $this->pamongTglTerdaftar;
    }

    public function setPamongTglTerdaftar(?\DateTimeInterface $pamongTglTerdaftar): self
    {
        $this->pamongTglTerdaftar = $pamongTglTerdaftar;

        return $this;
    }

    public function getPamongTtd(): ?bool
    {
        return $this->pamongTtd;
    }

    public function setPamongTtd(?bool $pamongTtd): self
    {
        $this->pamongTtd = $pamongTtd;

        return $this;
    }

    public function getFoto(): ?string
    {
        return $this->foto;
    }

    public function setFoto(string $foto): self
    {
        $this->foto = $foto;

        return $this;
    }

    public function getIdPend(): ?string
    {
        return $this->idPend;
    }

    public function setIdPend(?string $idPend): self
    {
        $this->idPend = $idPend;

        return $this;
    }

    public function getPamongTempatlahir(): ?string
    {
        return $this->pamongTempatlahir;
    }

    public function setPamongTempatlahir(?string $pamongTempatlahir): self
    {
        $this->pamongTempatlahir = $pamongTempatlahir;

        return $this;
    }

    public function getPamongTanggallahir(): ?\DateTimeInterface
    {
        return $this->pamongTanggallahir;
    }

    public function setPamongTanggallahir(?\DateTimeInterface $pamongTanggallahir): self
    {
        $this->pamongTanggallahir = $pamongTanggallahir;

        return $this;
    }

    public function getPamongSex(): ?int
    {
        return $this->pamongSex;
    }

    public function setPamongSex(?int $pamongSex): self
    {
        $this->pamongSex = $pamongSex;

        return $this;
    }

    public function getPamongPendidikan(): ?string
    {
        return $this->pamongPendidikan;
    }

    public function setPamongPendidikan(?string $pamongPendidikan): self
    {
        $this->pamongPendidikan = $pamongPendidikan;

        return $this;
    }

    public function getPamongAgama(): ?string
    {
        return $this->pamongAgama;
    }

    public function setPamongAgama(?string $pamongAgama): self
    {
        $this->pamongAgama = $pamongAgama;

        return $this;
    }

    public function getPamongNosk(): ?string
    {
        return $this->pamongNosk;
    }

    public function setPamongNosk(?string $pamongNosk): self
    {
        $this->pamongNosk = $pamongNosk;

        return $this;
    }

    public function getPamongTglsk(): ?\DateTimeInterface
    {
        return $this->pamongTglsk;
    }

    public function setPamongTglsk(?\DateTimeInterface $pamongTglsk): self
    {
        $this->pamongTglsk = $pamongTglsk;

        return $this;
    }

    public function getPamongMasajab(): ?string
    {
        return $this->pamongMasajab;
    }

    public function setPamongMasajab(?string $pamongMasajab): self
    {
        $this->pamongMasajab = $pamongMasajab;

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

    public function getPamongNiap(): ?string
    {
        return $this->pamongNiap;
    }

    public function setPamongNiap(?string $pamongNiap): self
    {
        $this->pamongNiap = $pamongNiap;

        return $this;
    }

    public function getPamongPangkat(): ?string
    {
        return $this->pamongPangkat;
    }

    public function setPamongPangkat(?string $pamongPangkat): self
    {
        $this->pamongPangkat = $pamongPangkat;

        return $this;
    }

    public function getPamongNohenti(): ?string
    {
        return $this->pamongNohenti;
    }

    public function setPamongNohenti(?string $pamongNohenti): self
    {
        $this->pamongNohenti = $pamongNohenti;

        return $this;
    }

    public function getPamongTglhenti(): ?\DateTimeInterface
    {
        return $this->pamongTglhenti;
    }

    public function setPamongTglhenti(?\DateTimeInterface $pamongTglhenti): self
    {
        $this->pamongTglhenti = $pamongTglhenti;

        return $this;
    }

    public function getPamongUb(): ?bool
    {
        return $this->pamongUb;
    }

    public function setPamongUb(bool $pamongUb): self
    {
        $this->pamongUb = $pamongUb;

        return $this;
    }

    public function getAtasan(): ?string
    {
        return $this->atasan;
    }

    public function setAtasan(?string $atasan): self
    {
        $this->atasan = $atasan;

        return $this;
    }

    public function getBaganTingkat(): ?int
    {
        return $this->baganTingkat;
    }

    public function setBaganTingkat(?int $baganTingkat): self
    {
        $this->baganTingkat = $baganTingkat;

        return $this;
    }

    public function getBaganOffset(): ?int
    {
        return $this->baganOffset;
    }

    public function setBaganOffset(?int $baganOffset): self
    {
        $this->baganOffset = $baganOffset;

        return $this;
    }

    public function getBaganLayout(): ?string
    {
        return $this->baganLayout;
    }

    public function setBaganLayout(?string $baganLayout): self
    {
        $this->baganLayout = $baganLayout;

        return $this;
    }

    public function getBaganWarna(): ?string
    {
        return $this->baganWarna;
    }

    public function setBaganWarna(?string $baganWarna): self
    {
        $this->baganWarna = $baganWarna;

        return $this;
    }

    public function getPamongId(): ?int
    {
        return $this->pamongId;
    }
}

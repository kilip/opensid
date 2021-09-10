<?php

namespace OpenSID\Prototype\Model;

class Agenda
{
    private $tglAgenda;

    private $koordinatorKegiatan;

    private $lokasiKegiatan;

    private $id;

    private $idArtikel;

    public function getTglAgenda(): ?\DateTimeInterface
    {
        return $this->tglAgenda;
    }

    public function setTglAgenda(?\DateTimeInterface $tglAgenda): self
    {
        $this->tglAgenda = $tglAgenda;

        return $this;
    }

    public function getKoordinatorKegiatan(): ?string
    {
        return $this->koordinatorKegiatan;
    }

    public function setKoordinatorKegiatan(string $koordinatorKegiatan): self
    {
        $this->koordinatorKegiatan = $koordinatorKegiatan;

        return $this;
    }

    public function getLokasiKegiatan(): ?string
    {
        return $this->lokasiKegiatan;
    }

    public function setLokasiKegiatan(string $lokasiKegiatan): self
    {
        $this->lokasiKegiatan = $lokasiKegiatan;

        return $this;
    }

    public function getId(): ?string
    {
        return $this->id;
    }

    public function getIdArtikel(): ?Artikel
    {
        return $this->idArtikel;
    }

    public function setIdArtikel(?Artikel $idArtikel): self
    {
        $this->idArtikel = $idArtikel;

        return $this;
    }
}

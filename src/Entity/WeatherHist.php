<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\WeatherHistRepository")
 */
class WeatherHist
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=60)
     */
    private $localita;

    /**
     * @ORM\Column(type="date")
     */
    private $date;

    /**
     * @ORM\Column(type="integer")
     */
    private $tmedia;

    /**
     * @ORM\Column(type="integer")
     */
    private $tmin;

    /**
     * @ORM\Column(type="integer")
     */
    private $tmax;

    /**
     * @ORM\Column(type="integer")
     */
    private $puntorugiada;

    /**
     * @ORM\Column(type="integer")
     */
    private $perc_umidita;

    /**
     * @ORM\Column(type="integer")
     */
    private $visib_km;

    /**
     * @ORM\Column(type="integer")
     */
    private $ventomedia_kmh;

    /**
     * @ORM\Column(type="integer")
     */
    private $ventomax_kmh;

    /**
     * @ORM\Column(type="integer")
     */
    private $ventoraffica_kmh;

    /**
     * @ORM\Column(type="integer")
     */
    private $pressioneslm_mb;

    /**
     * @ORM\Column(type="integer")
     */
    private $pressionemedia_mb;

    /**
     * @ORM\Column(type="integer")
     */
    private $pioggia_mm;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $fenomeni;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLocalita(): ?string
    {
        return $this->localita;
    }

    public function setLocalita(string $localita): self
    {
        $this->localita = $localita;

        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getTmedia(): ?int
    {
        return $this->tmedia;
    }

    public function setTmedia(int $tmedia): self
    {
        $this->tmedia = $tmedia;

        return $this;
    }

    public function getTmin(): ?int
    {
        return $this->tmin;
    }

    public function setTmin(int $tmin): self
    {
        $this->tmin = $tmin;

        return $this;
    }

    public function getTmax(): ?int
    {
        return $this->tmax;
    }

    public function setTmax(int $tmax): self
    {
        $this->tmax = $tmax;

        return $this;
    }

    public function getPuntorugiada(): ?int
    {
        return $this->puntorugiada;
    }

    public function setPuntorugiada(int $puntorugiada): self
    {
        $this->puntorugiada = $puntorugiada;

        return $this;
    }

    public function getPercUmidita(): ?int
    {
        return $this->perc_umidita;
    }

    public function setPercUmidita(int $perc_umidita): self
    {
        $this->perc_umidita = $perc_umidita;

        return $this;
    }

    public function getVisibKm(): ?int
    {
        return $this->visib_km;
    }

    public function setVisibKm(int $visib_km): self
    {
        $this->visib_km = $visib_km;

        return $this;
    }

    public function getVentomediaKmh(): ?int
    {
        return $this->ventomedia_kmh;
    }

    public function setVentomediaKmh(int $ventomedia_kmh): self
    {
        $this->ventomedia_kmh = $ventomedia_kmh;

        return $this;
    }

    public function getVentomaxKmh(): ?int
    {
        return $this->ventomax_kmh;
    }

    public function setVentomaxKmh(int $ventomax_kmh): self
    {
        $this->ventomax_kmh = $ventomax_kmh;

        return $this;
    }

    public function getVentorafficaKmh(): ?int
    {
        return $this->ventoraffica_kmh;
    }

    public function setVentorafficaKmh(int $ventoraffica_kmh): self
    {
        $this->ventoraffica_kmh = $ventoraffica_kmh;

        return $this;
    }

    public function getPressioneslmMb(): ?int
    {
        return $this->pressioneslm_mb;
    }

    public function setPressioneslmMb(int $pressioneslm_mb): self
    {
        $this->pressioneslm_mb = $pressioneslm_mb;

        return $this;
    }

    public function getPressionemediaMb(): ?int
    {
        return $this->pressionemedia_mb;
    }

    public function setPressionemediaMb(int $pressionemedia_mb): self
    {
        $this->pressionemedia_mb = $pressionemedia_mb;

        return $this;
    }

    public function getPioggiaMm(): ?int
    {
        return $this->pioggia_mm;
    }

    public function setPioggiaMm(int $pioggia_mm): self
    {
        $this->pioggia_mm = $pioggia_mm;

        return $this;
    }

    public function getFenomeni(): ?string
    {
        return $this->fenomeni;
    }

    public function setFenomeni(string $fenomeni): self
    {
        $this->fenomeni = $fenomeni;

        return $this;
    }
}

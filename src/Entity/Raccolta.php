<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\RaccoltaRepository")
 */
class Raccolta
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $year;

    /**
     * @ORM\Column(type="float")
     */
    private $kg_olive;

    /**
     * @ORM\Column(type="float")
     */
    private $kg_olio;

    /**
     * @ORM\Column(type="float")
     */
    private $resa;

    /**
     * @ORM\Column(type="float")
     */
    private $litri;

    /**
     * @ORM\Column(type="date")
     */
    private $date;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getYear(): ?int
    {
        return $this->year;
    }

    public function setYear(int $year): self
    {
        $this->year = $year;

        return $this;
    }

    public function getKgOlive(): ?float
    {
        return $this->kg_olive;
    }

    public function setKgOlive(float $kg_olive): self
    {
        $this->kg_olive = $kg_olive;

        return $this;
    }

    public function getKgOlio(): ?float
    {
        return $this->kg_olio;
    }

    public function setKgOlio(float $kg_olio): self
    {
        $this->kg_olio = $kg_olio;

        return $this;
    }

    public function getResa(): ?float
    {
        return $this->resa;
    }

    public function setResa(float $resa): self
    {
        $this->resa = $resa;

        return $this;
    }

    public function getLitri(): ?float
    {
        return $this->litri;
    }

    public function setLitri(float $litri): self
    {
        $this->litri = $litri;

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
}

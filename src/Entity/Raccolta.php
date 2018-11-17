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
    public $id;

    /**
     * @ORM\Column(type="integer")
     */
    public $year;

    /**
     * @ORM\Column(type="float")
     */
    public $kg_olive;

    /**
     * @ORM\Column(type="float")
     */
    public $kg_olio;

    /**
     * @ORM\Column(type="date")
     */
    public $date;

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

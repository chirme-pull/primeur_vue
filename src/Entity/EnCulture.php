<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EnCulture
 *
 * @ORM\Table(name="en culture")
 * @ORM\Entity
 */
class EnCulture
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="planche", type="integer", nullable=false)
     */
    private $planche;

    /**
     * @var int
     *
     * @ORM\Column(name="vegetal", type="integer", nullable=false)
     */
    private $vegetal;

    /**
     * @var int
     *
     * @ORM\Column(name="stade", type="integer", nullable=false)
     */
    private $stade;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date fin", type="date", nullable=true)
     */
    private $dateFin;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date debut", type="date", nullable=true)
     */
    private $dateDebut;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPlanche(): ?int
    {
        return $this->planche;
    }

    public function setPlanche(int $planche): self
    {
        $this->planche = $planche;

        return $this;
    }

    public function getVegetal(): ?int
    {
        return $this->vegetal;
    }

    public function setVegetal(int $vegetal): self
    {
        $this->vegetal = $vegetal;

        return $this;
    }

    public function getStade(): ?int
    {
        return $this->stade;
    }

    public function setStade(int $stade): self
    {
        $this->stade = $stade;

        return $this;
    }

    public function getDateFin(): ?\DateTimeInterface
    {
        return $this->dateFin;
    }

    public function setDateFin(?\DateTimeInterface $dateFin): self
    {
        $this->dateFin = $dateFin;

        return $this;
    }

    public function getDateDebut(): ?\DateTimeInterface
    {
        return $this->dateDebut;
    }

    public function setDateDebut(?\DateTimeInterface $dateDebut): self
    {
        $this->dateDebut = $dateDebut;

        return $this;
    }


}

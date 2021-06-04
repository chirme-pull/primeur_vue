<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Conseils
 *
 * @ORM\Table(name="conseils")
 * @ORM\Entity
 */
class Conseils
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
     * @ORM\Column(name="vegetal", type="integer", nullable=false)
     */
    private $vegetal;

    /**
     * @var int
     *
     * @ORM\Column(name="germination", type="integer", nullable=false)
     */
    private $germination;

    /**
     * @var int
     *
     * @ORM\Column(name="plantation", type="integer", nullable=false)
     */
    private $plantation;

    /**
     * @var int
     *
     * @ORM\Column(name="entretien", type="integer", nullable=false)
     */
    private $entretien;

    /**
     * @var int
     *
     * @ORM\Column(name="recolte", type="integer", nullable=false)
     */
    private $recolte;

    /**
     * @var int
     *
     * @ORM\Column(name="maladie", type="integer", nullable=false)
     */
    private $maladie;

    /**
     * @var int
     *
     * @ORM\Column(name="predateur", type="integer", nullable=false)
     */
    private $predateur;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getGermination(): ?int
    {
        return $this->germination;
    }

    public function setGermination(int $germination): self
    {
        $this->germination = $germination;

        return $this;
    }

    public function getPlantation(): ?int
    {
        return $this->plantation;
    }

    public function setPlantation(int $plantation): self
    {
        $this->plantation = $plantation;

        return $this;
    }

    public function getEntretien(): ?int
    {
        return $this->entretien;
    }

    public function setEntretien(int $entretien): self
    {
        $this->entretien = $entretien;

        return $this;
    }

    public function getRecolte(): ?int
    {
        return $this->recolte;
    }

    public function setRecolte(int $recolte): self
    {
        $this->recolte = $recolte;

        return $this;
    }

    public function getMaladie(): ?int
    {
        return $this->maladie;
    }

    public function setMaladie(int $maladie): self
    {
        $this->maladie = $maladie;

        return $this;
    }

    public function getPredateur(): ?int
    {
        return $this->predateur;
    }

    public function setPredateur(int $predateur): self
    {
        $this->predateur = $predateur;

        return $this;
    }


}

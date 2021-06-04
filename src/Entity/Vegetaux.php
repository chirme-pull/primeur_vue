<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Vegetaux
 *
 * @ORM\Table(name="vegetaux")
 * @ORM\Entity
 */
class Vegetaux
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
     * @ORM\Column(name="categorie", type="integer", nullable=false)
     */
    private $categorie;

    /**
     * @var string
     *
     * @ORM\Column(name="nom commun", type="string", length=255, nullable=false)
     */
    private $nomCommun;

    /**
     * @var string|null
     *
     * @ORM\Column(name="distance plantation", type="text", length=65535, nullable=true)
     */
    private $distancePlantation;

    /**
     * @var string|null
     *
     * @ORM\Column(name="entretien", type="text", length=65535, nullable=true)
     */
    private $entretien;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCategorie(): ?int
    {
        return $this->categorie;
    }

    public function setCategorie(int $categorie): self
    {
        $this->categorie = $categorie;

        return $this;
    }

    public function getNomCommun(): ?string
    {
        return $this->nomCommun;
    }

    public function setNomCommun(string $nomCommun): self
    {
        $this->nomCommun = $nomCommun;

        return $this;
    }

    public function getDistancePlantation(): ?string
    {
        return $this->distancePlantation;
    }

    public function setDistancePlantation(?string $distancePlantation): self
    {
        $this->distancePlantation = $distancePlantation;

        return $this;
    }

    public function getEntretien(): ?string
    {
        return $this->entretien;
    }

    public function setEntretien(?string $entretien): self
    {
        $this->entretien = $entretien;

        return $this;
    }


}

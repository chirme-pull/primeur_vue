<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Planches
 *
 * @ORM\Table(name="planches")
 * @ORM\Entity
 */
class Planches
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
     * @ORM\Column(name="utilisateurs", type="integer", nullable=false)
     */
    private $utilisateurs;

    /**
     * @var int
     *
     * @ORM\Column(name="largeur", type="integer", nullable=false)
     */
    private $largeur;

    /**
     * @var int
     *
     * @ORM\Column(name="longeur", type="integer", nullable=false)
     */
    private $longeur;

    /**
     * @var int
     *
     * @ORM\Column(name="mc", type="integer", nullable=false)
     */
    private $mc;

    /**
     * @var int
     *
     * @ORM\Column(name="rotation statu", type="integer", nullable=false)
     */
    private $rotationStatu;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUtilisateurs(): ?int
    {
        return $this->utilisateurs;
    }

    public function setUtilisateurs(int $utilisateurs): self
    {
        $this->utilisateurs = $utilisateurs;

        return $this;
    }

    public function getLargeur(): ?int
    {
        return $this->largeur;
    }

    public function setLargeur(int $largeur): self
    {
        $this->largeur = $largeur;

        return $this;
    }

    public function getLongeur(): ?int
    {
        return $this->longeur;
    }

    public function setLongeur(int $longeur): self
    {
        $this->longeur = $longeur;

        return $this;
    }

    public function getMc(): ?int
    {
        return $this->mc;
    }

    public function setMc(int $mc): self
    {
        $this->mc = $mc;

        return $this;
    }

    public function getRotationStatu(): ?int
    {
        return $this->rotationStatu;
    }

    public function setRotationStatu(int $rotationStatu): self
    {
        $this->rotationStatu = $rotationStatu;

        return $this;
    }


}

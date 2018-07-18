<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\OuvrableRepository")
 */
class Ouvrable
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="boolean")
     */
    private $disponible;

    /**
     * @ORM\Column(type="time", nullable=true)
     */
    private $ouverture;

    /**
     * @ORM\Column(type="time", nullable=true)
     */
    private $fermeture;

    /**
     * @ORM\ManyToOne(targetEntity="Bien", inversedBy="ouvrables", cascade={"persist"})
     * @ORM\JoinColumn(name = "bien", referencedColumnName = "id", nullable=false)
     */
    private $bien;

    /**
     * @ORM\ManyToOne(targetEntity="Jour", inversedBy="ouvrables")
     * @ORM\JoinColumn(name = "jour", referencedColumnName = "id", nullable=false)
     */
    private $jour;

    public function getId()
    {
        return $this->id;
    }

    public function getDisponible(): ?bool
    {
        return $this->disponible;
    }

    public function setDisponible(bool $disponible): self
    {
        $this->disponible = $disponible;

        return $this;
    }

    public function getOuverture(): ?\DateTimeInterface
    {
        return $this->ouverture;
    }

    public function setOuverture(?\DateTimeInterface $ouverture): self
    {
        $this->ouverture = $ouverture;

        return $this;
    }

    public function getFermeture(): ?\DateTimeInterface
    {
        return $this->fermeture;
    }

    public function setFermeture(?\DateTimeInterface $fermeture): self
    {
        $this->fermeture = $fermeture;

        return $this;
    }

    public function getBien(): ?Bien
    {
        return $this->bien;
    }

    public function setBien(?Bien $bien): self
    {
        $this->bien = $bien;

        return $this;
    }

    public function getJour(): ?Jour
    {
        return $this->jour;
    }

    public function setJour(?Jour $jour): self
    {
        $this->jour = $jour;

        return $this;
    }
}

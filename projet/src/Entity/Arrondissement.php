<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ArrondissementRepository")
 */
class Arrondissement
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $nomArrond;

    /**
     * @ORM\ManyToOne(targetEntity="Commune", inversedBy="arrondissements")
     * @ORM\JoinColumn(name = "commune", referencedColumnName = "id", nullable=false)
     */
    private $commune;

    /**
     * @ORM\OneToMany(targetEntity="CArrondissement", mappedBy = "arrondissement")
     */
    private $cArrondissements;

    public function __construct()
    {
        $this->cArrondissements = new ArrayCollection();
    }

    public function getId()
    {
        return $this->id;
    }

    public function getNomArrond(): ?string
    {
        return $this->nomArrond;
    }

    public function setNomArrond(string $nomArrond): self
    {
        $this->nomArrond = $nomArrond;

        return $this;
    }

    public function getCommune(): ?Commune
    {
        return $this->commune;
    }

    public function setCommune(?Commune $commune): self
    {
        $this->commune = $commune;

        return $this;
    }

    /**
     * @return Collection|CArrondissement[]
     */
    public function getCArrondissements(): Collection
    {
        return $this->cArrondissements;
    }

    public function addCArrondissement(CArrondissement $cArrondissement): self
    {
        if (!$this->cArrondissements->contains($cArrondissement)) {
            $this->cArrondissements[] = $cArrondissement;
            $cArrondissement->setArrondissement($this);
        }

        return $this;
    }

    public function removeCArrondissement(CArrondissement $cArrondissement): self
    {
        if ($this->cArrondissements->contains($cArrondissement)) {
            $this->cArrondissements->removeElement($cArrondissement);
            // set the owning side to null (unless already changed)
            if ($cArrondissement->getArrondissement() === $this) {
                $cArrondissement->setArrondissement(null);
            }
        }

        return $this;
    }
}

<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\RegionRepository")
 */
class Region
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
    private $nomRegion;

    /**
     * @ORM\ManyToOne(targetEntity="Pays", inversedBy="regions")
     * @ORM\JoinColumn(name = "pays", referencedColumnName = "id", nullable=false)
     */
    private $pays;

    /**
     * @ORM\OneToMany(targetEntity="Departement", mappedBy = "region")
     */
    private $departements;

    public function __construct()
    {
        $this->departements = new ArrayCollection();
    }

    public function getId()
    {
        return $this->id;
    }

    public function getNomRegion(): ?string
    {
        return $this->nomRegion;
    }

    public function setNomRegion(string $nomRegion): self
    {
        $this->nomRegion = $nomRegion;

        return $this;
    }

    public function getPays(): ?Pays
    {
        return $this->pays;
    }

    public function setPays(?Pays $pays): self
    {
        $this->pays = $pays;

        return $this;
    }

    /**
     * @return Collection|Departement[]
     */
    public function getDepartements(): Collection
    {
        return $this->departements;
    }

    public function addDepartement(Departement $departement): self
    {
        if (!$this->departements->contains($departement)) {
            $this->departements[] = $departement;
            $departement->setRegion($this);
        }

        return $this;
    }

    public function removeDepartement(Departement $departement): self
    {
        if ($this->departements->contains($departement)) {
            $this->departements->removeElement($departement);
            // set the owning side to null (unless already changed)
            if ($departement->getRegion() === $this) {
                $departement->setRegion(null);
            }
        }

        return $this;
    }
}

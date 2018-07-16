<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\DepartementRepository")
 */
class Departement
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
    private $nomDep;

    /**
     * @ORM\ManyToOne(targetEntity="Region", inversedBy="departements")
     * @ORM\JoinColumn(name = "region", referencedColumnName = "id", nullable=false)
     */
    private $region;

    /**
     * @ORM\OneToMany(targetEntity="Commune", mappedBy = "departement")
     */
    private $communes;

    public function __construct()
    {
        $this->communes = new ArrayCollection();
    }

    public function getId()
    {
        return $this->id;
    }

    public function getNomDep(): ?string
    {
        return $this->nomDep;
    }

    public function setNomDep(string $nomDep): self
    {
        $this->nomDep = $nomDep;

        return $this;
    }

    public function getRegion(): ?Region
    {
        return $this->region;
    }

    public function setRegion(?Region $region): self
    {
        $this->region = $region;

        return $this;
    }

    /**
     * @return Collection|Commune[]
     */
    public function getCommunes(): Collection
    {
        return $this->communes;
    }

    public function addCommune(Commune $commune): self
    {
        if (!$this->communes->contains($commune)) {
            $this->communes[] = $commune;
            $commune->setDepartement($this);
        }

        return $this;
    }

    public function removeCommune(Commune $commune): self
    {
        if ($this->communes->contains($commune)) {
            $this->communes->removeElement($commune);
            // set the owning side to null (unless already changed)
            if ($commune->getDepartement() === $this) {
                $commune->setDepartement(null);
            }
        }

        return $this;
    }
}

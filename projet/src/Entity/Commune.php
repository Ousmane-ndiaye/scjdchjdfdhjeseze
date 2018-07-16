<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CommuneRepository")
 */
class Commune
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
    private $nomCom;

    /**
     * @ORM\ManyToOne(targetEntity="Departement", inversedBy="communes")
     * @ORM\JoinColumn(name = "departement", referencedColumnName = "id", nullable=false)
     */
    private $departement;

    /**
     * @ORM\OneToMany(targetEntity="Arrondissement", mappedBy = "commune")
     */
    private $arrondissements;

    public function __construct()
    {
        $this->arrondissements = new ArrayCollection();
    }

    public function getId()
    {
        return $this->id;
    }

    public function getNomCom(): ?string
    {
        return $this->nomCom;
    }

    public function setNomCom(string $nomCom): self
    {
        $this->nomCom = $nomCom;

        return $this;
    }

    public function getDepartement(): ?Departement
    {
        return $this->departement;
    }

    public function setDepartement(?Departement $departement): self
    {
        $this->departement = $departement;

        return $this;
    }

    /**
     * @return Collection|Arrondissement[]
     */
    public function getArrondissements(): Collection
    {
        return $this->arrondissements;
    }

    public function addArrondissement(Arrondissement $arrondissement): self
    {
        if (!$this->arrondissements->contains($arrondissement)) {
            $this->arrondissements[] = $arrondissement;
            $arrondissement->setCommune($this);
        }

        return $this;
    }

    public function removeArrondissement(Arrondissement $arrondissement): self
    {
        if ($this->arrondissements->contains($arrondissement)) {
            $this->arrondissements->removeElement($arrondissement);
            // set the owning side to null (unless already changed)
            if ($arrondissement->getCommune() === $this) {
                $arrondissement->setCommune(null);
            }
        }

        return $this;
    }
}

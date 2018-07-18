<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\JourRepository")
 */
class Jour
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $libelle;

    /**
     * @ORM\OneToMany(targetEntity="Ouvrable", mappedBy = "jour")
     */
    private $ouvrables;

    public function __construct()
    {
        $this->ouvrables = new ArrayCollection();
    }

    public function getId()
    {
        return $this->id;
    }

    public function getLibelle(): ?string
    {
        return $this->libelle;
    }

    public function setLibelle(string $libelle): self
    {
        $this->libelle = $libelle;

        return $this;
    }

    /**
     * @return Collection|Ouvrable[]
     */
    public function getOuvrables(): Collection
    {
        return $this->ouvrables;
    }

    public function addOuvrable(Ouvrable $ouvrable): self
    {
        if (!$this->ouvrables->contains($ouvrable)) {
            $this->ouvrables[] = $ouvrable;
            $ouvrable->setJour($this);
        }

        return $this;
    }

    public function removeOuvrable(Ouvrable $ouvrable): self
    {
        if ($this->ouvrables->contains($ouvrable)) {
            $this->ouvrables->removeElement($ouvrable);
            // set the owning side to null (unless already changed)
            if ($ouvrable->getJour() === $this) {
                $ouvrable->setJour(null);
            }
        }

        return $this;
    }
}

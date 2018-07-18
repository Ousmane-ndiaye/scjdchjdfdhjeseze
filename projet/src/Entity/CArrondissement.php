<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CArrondissementRepository")
 */
class CArrondissement
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
    private $nomCArrond;

    /**
     * @ORM\ManyToOne(targetEntity="Arrondissement", inversedBy="cArrondissements")
     * @ORM\JoinColumn(name = "arrondissement", referencedColumnName = "id", nullable=false)
     */
    private $arrondissement;

    /**
     * @ORM\OneToMany(targetEntity="Bien", mappedBy = "cArrondissement")
     */
    private $biens;

    public function __construct()
    {
        $this->biens = new ArrayCollection();
    }

    public function getId()
    {
        return $this->id;
    }

    public function getArrondissement(): ?Arrondissement
    {
        return $this->arrondissement;
    }

    public function setArrondissement(?Arrondissement $arrondissement): self
    {
        $this->arrondissement = $arrondissement;

        return $this;
    }

    /**
     * @return Collection|Bien[]
     */
    public function getBiens(): Collection
    {
        return $this->biens;
    }

    public function addBien(Bien $bien): self
    {
        if (!$this->biens->contains($bien)) {
            $this->biens[] = $bien;
            $bien->setCArrondissement($this);
        }

        return $this;
    }

    public function removeBien(Bien $bien): self
    {
        if ($this->biens->contains($bien)) {
            $this->biens->removeElement($bien);
            // set the owning side to null (unless already changed)
            if ($bien->getCArrondissement() === $this) {
                $bien->setCArrondissement(null);
            }
        }

        return $this;
    }

    public function getNomCArrond(): ?string
    {
        return $this->nomCArrond;
    }

    public function setNomCArrond(string $nomCArrond): self
    {
        $this->nomCArrond = $nomCArrond;

        return $this;
    }

    public function __toString()
    {
        return $this->nomCArrond;
    }
}

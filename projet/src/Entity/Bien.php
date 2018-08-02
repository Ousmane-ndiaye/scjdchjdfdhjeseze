<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\BienRepository")
 */
class Bien
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
    private $etat;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $nomComplet;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $quartier;

    /**
     * @ORM\Column(type="datetime")
     */
    private $datePub;

    /**
     * @ORM\Column(type="text")
     */
    private $description;

    /**
     * @ORM\Column(type="integer")
     */
    private $prixLocation;

    /**
     * @ORM\Column(type="integer")
     */
    private $nbreDeplaces;

    /**
     * @ORM\ManyToOne(targetEntity="CArrondissement", inversedBy="biens")
     * @ORM\JoinColumn(name = "cArrondissement", referencedColumnName = "id", nullable=false)
     */
    private $cArrondissement;

    /**
     * @ORM\ManyToOne(targetEntity="Typedebien", inversedBy="biens")
     * @ORM\JoinColumn(name = "typeDeBien", referencedColumnName = "id", nullable=false)
     */
    private $typeDeBien;

    /**
     * @ORM\ManyToOne(targetEntity="Proprietaire", inversedBy="biens")
     * @ORM\JoinColumn(name = "proprietaire", referencedColumnName = "id", nullable=false)
     */
    private $proprietaire;

    /**
     * @ORM\OneToMany(targetEntity="Ouvrable", mappedBy = "bien")
     */
    private $ouvrables;

    /**
     * @ORM\OneToMany(targetEntity="Image", mappedBy = "bien")
     */
    private $images;

    /**
     * @ORM\OneToMany(targetEntity="Video", mappedBy = "bien")
     */
    private $videos;

    /**
     * @ORM\OneToMany(targetEntity="Reservation", mappedBy = "bien")
     */
    private $reservations;


    /**
     * @ORM\OneToMany(targetEntity="Commentaire", mappedBy = "bien")
     * 
     */
    private $commentaires;



    public function __construct()
    {
        $this->images = new ArrayCollection();
        $this->videos = new ArrayCollection();
        $this->reservations = new ArrayCollection();
        $this->ouvrables = new ArrayCollection();
    }

    public function getId()
    {
        return $this->id;
    }

    public function getQuartier(): ?string
    {
        return $this->quartier;
    }

    public function setQuartier(string $quartier): self
    {
        $this->quartier = $quartier;

        return $this;
    }

    public function getDatePub(): ?\DateTimeInterface
    {
        return $this->datePub;
    }

    public function setDatePub(\DateTimeInterface $datePub): self
    {
        $this->datePub = $datePub;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getPrixLocation(): ?int
    {
        return $this->prixLocation;
    }

    public function setPrixLocation(int $prixLocation): self
    {
        $this->prixLocation = $prixLocation;

        return $this;
    }

    public function getNbreDeplaces(): ?int
    {
        return $this->nbreDeplaces;
    }

    public function setNbreDeplaces(int $nbreDeplaces): self
    {
        $this->nbreDeplaces = $nbreDeplaces;

        return $this;
    }

    public function getTypeDeBien(): ?Typedebien
    {
        return $this->typeDeBien;
    }

    public function setTypeDeBien(?Typedebien $typeDeBien): self
    {
        $this->typeDeBien = $typeDeBien;

        return $this;
    }

    public function getProprietaire(): ?Proprietaire
    {
        return $this->proprietaire;
    }

    public function setProprietaire(?Proprietaire $proprietaire): self
    {
        $this->proprietaire = $proprietaire;

        return $this;
    }

    /**
     * @return Collection|Image[]
     */
    public function getImages(): Collection
    {
        return $this->images;
    }

    public function addImage(Image $image): self
    {
        if (!$this->images->contains($image)) {
            $this->images[] = $image;
            $image->setBien($this);
            
        }

        return $this;
    }

    public function removeImage(Image $image): self
    {
        if ($this->images->contains($image)) {
            $this->images->removeElement($image);
            // set the owning side to null (unless already changed)
            if ($image->getBien() === $this) {
                $image->setBien(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Video[]
     */
    public function getVideos(): Collection
    {
        return $this->videos;
    }

    public function addVideo(Video $video): self
    {
        if (!$this->videos->contains($video)) {
            $this->videos[] = $video;
            $video->setBien($this);
        }

        return $this;
    }

    public function removeVideo(Video $video): self
    {
        if ($this->videos->contains($video)) {
            $this->videos->removeElement($video);
            // set the owning side to null (unless already changed)
            if ($video->getBien() === $this) {
                $video->setBien(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Reservation[]
     */
    public function getReservations(): Collection
    {
        return $this->reservations;
    }

    public function addReservation(Reservation $reservation): self
    {
        if (!$this->reservations->contains($reservation)) {
            $this->reservations[] = $reservation;
            $reservation->setBien($this);
        }

        return $this;
    }

    public function removeReservation(Reservation $reservation): self
    {
        if ($this->reservations->contains($reservation)) {
            $this->reservations->removeElement($reservation);
            // set the owning side to null (unless already changed)
            if ($reservation->getBien() === $this) {
                $reservation->setBien(null);
            }
        }

        return $this;
    }

    public function getCArrondissement(): ?CArrondissement
    {
        return $this->cArrondissement;
    }

    public function setCArrondissement(?CArrondissement $cArrondissement): self
    {
        $this->cArrondissement = $cArrondissement;

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
            $ouvrable->setBien($this);
        }

        return $this;
    }

    public function removeOuvrable(Ouvrable $ouvrable): self
    {
        if ($this->ouvrables->contains($ouvrable)) {
            $this->ouvrables->removeElement($ouvrable);
            // set the owning side to null (unless already changed)
            if ($ouvrable->getBien() === $this) {
                $ouvrable->setBien(null);
            }
        }

        return $this;
    }

    public function getEtat(): ?bool
    {
        return $this->etat;
    }

    public function setEtat(bool $etat): self
    {
        $this->etat = $etat;

        return $this;
    }

    public function getNomComplet(): ?string
    {
        return $this->nomComplet;
    }

    public function setNomComplet(string $nomComplet): self
    {
        $this->nomComplet = $nomComplet;

        return $this;
    }
}

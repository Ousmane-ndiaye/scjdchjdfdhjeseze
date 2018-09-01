<?php

namespace App\Entity;
use Symfony\Component\Validator\Constraints as Assert;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ReservationRepository")
 */
class Reservation
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="datetime")
     */
    private $dateReservation;

    /**
     * 
     * @ORM\Column(type="datetime")
     * @Assert\GreaterThanOrEqual("today")
     * * @Assert\NotBlank()
     */
    private $debut;

    /**
     * @ORM\Column(type="datetime")
     * @Assert\NotBlank()
     * @Assert\GreaterThanOrEqual(propertyPath="debut")
     * 
     */
    private $fin;

    /**
     * @ORM\Column(type="boolean")
     */
    private $etat;

    /**
     * @ORM\ManyToOne(targetEntity="Bien", inversedBy="reservations" )
     * @ORM\JoinColumn(name = "bien", referencedColumnName = "id", nullable=false)
     */
    private $bien;

    /**
     * @ORM\ManyToOne(targetEntity="Client", inversedBy="reservations" , cascade={"persist"})
     * @ORM\JoinColumn(name = "client", referencedColumnName = "id", nullable=false)
     *  @Assert\Valid
     * 
     */
    private $client;

   

    public function __construct()
    {
        $this->periodes = new ArrayCollection();
    }

    public function getId()
    {
        return $this->id;
    }

    public function getDateReservation(): ?\DateTimeInterface
    {
        return $this->dateReservation;
    }

    public function setDateReservation(\DateTimeInterface $dateReservation): self
    {
        $this->dateReservation = $dateReservation;

        return $this;
    }

    public function getDebut(): ?\DateTimeInterface
    {
        return $this->debut;
    }

    public function setDebut(\DateTimeInterface $debut): self
    {
        $this->debut = $debut;

        return $this;
    }

    public function getFin(): ?\DateTimeInterface
    {
        return $this->fin;
    }

    public function setFin(\DateTimeInterface $fin): self
    {
        $this->fin = $fin;

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

    public function getBien(): ?Bien
    {
        return $this->bien;
    }

    public function setBien(?Bien $bien): self
    {
        $this->bien = $bien;

        return $this;
    }

    public function getClient(): ?Client
    {
        return $this->client;
    }

    public function setClient(?Client $client): self
    {
        $this->client = $client;

        return $this;
    }

    /**
     * @return Collection|Periode[]
     */
    public function getPeriodes(): Collection
    {
        return $this->periodes;
    }

    public function addPeriode(Periode $periode): self
    {
        if (!$this->periodes->contains($periode)) {
            $this->periodes[] = $periode;
            $periode->setReservation($this);
        }

        return $this;
    }

    public function removePeriode(Periode $periode): self
    {
        if ($this->periodes->contains($periode)) {
            $this->periodes->removeElement($periode);
            // set the owning side to null (unless already changed)
            if ($periode->getReservation() === $this) {
                $periode->setReservation(null);
            }
        }

        return $this;
    }
}

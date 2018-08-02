<?php

namespace App\Entity;
use Symfony\Component\Validator\Constraints as Assert;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ClientRepository")
 */
class Client
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * 
     * @ORM\Column(type="string", length=100)
     * @Assert\NotBlank()
     * @Assert\Length(
     *      min = 2,
     *      max = 30,
     *      minMessage="{{value}} un nom à au moins 2 lettres",
     *      maxMessage=" {{value}} depasse 30 lettres",
     * )
     */
    private $nomComplet;

    /**
     * @ORM\Column(type="string", length=100)
     *  @Assert\NotBlank()
     *   @Assert\Length(
     *      min = 9,
     *      max = 14,
     *      minMessage="Le numéro doit avoir au moins 9 chiffres",
     *      maxMessage="Le numéro doit avoir au plus 14 chiffres",
     * )
     */
    private $telephone;

    /**
     * @ORM\Column(type="string", length=30)
     *  @Assert\NotBlank()
     * @Assert\Email(
     *     message = "l' email '{{ value }}' n'est pas valide.",
     *     checkMX = true
     * )
     */
    private $mail;

    /**
     * @ORM\OneToMany(targetEntity="Reservation", mappedBy = "client")
     */
    private $reservations;

    public function __construct()
    {
        $this->reservations = new ArrayCollection();
    }

    public function getId()
    {
        return $this->id;
    }

    public function getStructure(): ?string
    {
        return $this->structure;
    }

    public function setStructure(string $structure): self
    {
        $this->structure = $structure;

        return $this;
    }

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(string $adresse): self
    {
        $this->adresse = $adresse;

        return $this;
    }

    public function getTelephone(): ?string
    {
        return $this->telephone;
    }

    public function setTelephone(string $telephone): self
    {
        $this->telephone = $telephone;

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
            $reservation->setClient($this);
        }

        return $this;
    }

    public function removeReservation(Reservation $reservation): self
    {
        if ($this->reservations->contains($reservation)) {
            $this->reservations->removeElement($reservation);
            // set the owning side to null (unless already changed)
            if ($reservation->getClient() === $this) {
                $reservation->setClient(null);
            }
        }

        return $this;
    }

    /**
     * Get the value of nomComplet
     */ 
    public function getNomComplet()
    {
        return $this->nomComplet;
    }

    /**
     * Set the value of nomComplet
     *
     * @return  self
     */ 
    public function setNomComplet($nomComplet)
    {
        $this->nomComplet = $nomComplet;

        return $this;
    }

    /**
     * Get the value of mail
     */ 
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * Set the value of mail
     *
     * @return  self
     */ 
    public function setMail($mail)
    {
        $this->mail = $mail;

        return $this;
    }
}

<?php

namespace App\Entity;

use App\Repository\RentRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: RentRepository::class)]
class Rent
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

<<<<<<< HEAD
    #[ORM\Column(length: 200)]
=======
    #[ORM\Column(length: 100)]
>>>>>>> 96f78bed3dce7562d191841684854b26bad5d1d9
    private ?string $label = null;

    #[ORM\ManyToOne(inversedBy: 'rents')]
    #[ORM\JoinColumn(nullable: false)]
    private ?TypeRent $typeRent = null;

<<<<<<< HEAD
    #[ORM\OneToOne(mappedBy: 'rents', cascade: ['persist', 'remove'])]
    private ?Owner $owner = null;
=======
    #[ORM\Column]
    private ?bool $has_owner = null;
>>>>>>> 96f78bed3dce7562d191841684854b26bad5d1d9

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLabel(): ?string
    {
        return $this->label;
    }

    public function setLabel(string $label): static
    {
        $this->label = $label;

        return $this;
    }

<<<<<<< HEAD

=======
>>>>>>> 96f78bed3dce7562d191841684854b26bad5d1d9
    public function getTypeRent(): ?TypeRent
    {
        return $this->typeRent;
    }

    public function setTypeRent(?TypeRent $typeRent): static
    {
        $this->typeRent = $typeRent;

        return $this;
    }

<<<<<<< HEAD
    public function getOwner(): ?Owner
    {
        return $this->owner;
    }

    public function setOwner(?Owner $owner): static
    {
        // unset the owning side of the relation if necessary
        if ($owner === null && $this->owner !== null) {
            $this->owner->setRents(null);
        }

        // set the owning side of the relation if necessary
        if ($owner !== null && $owner->getRents() !== $this) {
            $owner->setRents($this);
        }

        $this->owner = $owner;
=======
    public function isHasOwner(): ?bool
    {
        return $this->has_owner;
    }

    public function setHasOwner(bool $has_owner): static
    {
        $this->has_owner = $has_owner;
>>>>>>> 96f78bed3dce7562d191841684854b26bad5d1d9

        return $this;
    }
}

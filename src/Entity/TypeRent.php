<?php

namespace App\Entity;

use App\Repository\TypeRentRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TypeRentRepository::class)]
class TypeRent
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

<<<<<<< HEAD
    #[ORM\Column(length: 255)]
    private ?string $label = null;

    #[ORM\OneToMany(mappedBy: 'typeRent', targetEntity: Rent::class)]
    private Collection $rents;

=======
    #[ORM\Column(length: 100)]
    private ?string $label = null;

>>>>>>> 96f78bed3dce7562d191841684854b26bad5d1d9
    #[ORM\Column(length: 255)]
    private ?string $imagePath = null;

    #[ORM\Column]
    private ?int $price = null;

<<<<<<< HEAD
=======
    #[ORM\OneToMany(mappedBy: 'typeRent', targetEntity: Rent::class)]
    private Collection $rents;

>>>>>>> 96f78bed3dce7562d191841684854b26bad5d1d9
    public function __construct()
    {
        $this->rents = new ArrayCollection();
    }

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
    public function getImagePath(): ?string
    {
        return $this->imagePath;
    }

    public function setImagePath(string $imagePath): static
    {
        $this->imagePath = $imagePath;

        return $this;
    }

    public function getPrice(): ?int
    {
        return $this->price;
    }

    public function setPrice(int $price): static
    {
        $this->price = $price;

        return $this;
    }

>>>>>>> 96f78bed3dce7562d191841684854b26bad5d1d9
    /**
     * @return Collection<int, Rent>
     */
    public function getRents(): Collection
    {
        return $this->rents;
    }

    public function addRent(Rent $rent): static
    {
        if (!$this->rents->contains($rent)) {
            $this->rents->add($rent);
            $rent->setTypeRent($this);
        }

        return $this;
    }

    public function removeRent(Rent $rent): static
    {
        if ($this->rents->removeElement($rent)) {
            // set the owning side to null (unless already changed)
            if ($rent->getTypeRent() === $this) {
                $rent->setTypeRent(null);
            }
        }

        return $this;
    }
<<<<<<< HEAD

    public function getImagePath(): ?string
    {
        return $this->imagePath;
    }

    public function setImagePath(string $imagePath): static
    {
        $this->imagePath = $imagePath;

        return $this;
    }

    public function getPrice(): ?int
    {
        return $this->price;
    }

    public function setPrice(int $price): static
    {
        $this->price = $price;

        return $this;
    }
=======
>>>>>>> 96f78bed3dce7562d191841684854b26bad5d1d9
}

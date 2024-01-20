<?php

namespace App\Entity;

use App\Repository\UserInfoRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: UserInfoRepository::class)]
class UserInfo
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 100)]
<<<<<<< HEAD
    private ?string $prenom = null;

    #[ORM\Column(length: 100)]
    private ?string $nom = null;
=======
    private ?string $firstname = null;

    #[ORM\Column(length: 100)]
    private ?string $lastname = null;
>>>>>>> 96f78bed3dce7562d191841684854b26bad5d1d9

    #[ORM\Column(length: 255)]
    private ?string $address = null;

<<<<<<< HEAD
    #[ORM\Column(length: 50)]
=======
    #[ORM\Column(length: 10)]
>>>>>>> 96f78bed3dce7562d191841684854b26bad5d1d9
    private ?string $zipCode = null;

    #[ORM\Column(length: 100)]
    private ?string $city = null;

<<<<<<< HEAD
    #[ORM\Column(length: 50)]
=======
    #[ORM\Column(length: 100)]
>>>>>>> 96f78bed3dce7562d191841684854b26bad5d1d9
    private ?string $country = null;

    #[ORM\Column(length: 50)]
    private ?string $phone = null;

<<<<<<< HEAD
=======
    #[ORM\OneToOne(mappedBy: 'userInfo', cascade: ['persist', 'remove'])]
    private ?User $user = null;

>>>>>>> 96f78bed3dce7562d191841684854b26bad5d1d9
    public function getId(): ?int
    {
        return $this->id;
    }

<<<<<<< HEAD
    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): static
    {
        $this->prenom = $prenom;
=======
    public function getFirstname(): ?string
    {
        return $this->firstname;
    }

    public function setFirstname(string $firstname): static
    {
        $this->firstname = $firstname;
>>>>>>> 96f78bed3dce7562d191841684854b26bad5d1d9

        return $this;
    }

<<<<<<< HEAD
    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): static
    {
        $this->nom = $nom;
=======
    public function getLastname(): ?string
    {
        return $this->lastname;
    }

    public function setLastname(string $lastname): static
    {
        $this->lastname = $lastname;
>>>>>>> 96f78bed3dce7562d191841684854b26bad5d1d9

        return $this;
    }

    public function getAddress(): ?string
    {
        return $this->address;
    }

    public function setAddress(string $address): static
    {
        $this->address = $address;

        return $this;
    }

    public function getZipCode(): ?string
    {
        return $this->zipCode;
    }

    public function setZipCode(string $zipCode): static
    {
        $this->zipCode = $zipCode;

        return $this;
    }

    public function getCity(): ?string
    {
        return $this->city;
    }

    public function setCity(string $city): static
    {
        $this->city = $city;

        return $this;
    }

    public function getCountry(): ?string
    {
        return $this->country;
    }

    public function setCountry(string $country): static
    {
        $this->country = $country;

        return $this;
    }

    public function getPhone(): ?string
    {
        return $this->phone;
    }

    public function setPhone(string $phone): static
    {
        $this->phone = $phone;

        return $this;
    }
<<<<<<< HEAD
=======

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(User $user): static
    {
        // set the owning side of the relation if necessary
        if ($user->getUserInfo() !== $this) {
            $user->setUserInfo($this);
        }

        $this->user = $user;

        return $this;
    }
>>>>>>> 96f78bed3dce7562d191841684854b26bad5d1d9
}

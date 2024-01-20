<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\UserInterface;

#[ORM\Entity(repositoryClass: UserRepository::class)]
<<<<<<< HEAD
#[ORM\Table(name: '`user`')]
=======
>>>>>>> 96f78bed3dce7562d191841684854b26bad5d1d9
class User implements UserInterface, PasswordAuthenticatedUserInterface
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 180, unique: true)]
    private ?string $email = null;

    #[ORM\Column]
    private array $roles = [];

    /**
     * @var string The hashed password
     */
    #[ORM\Column]
    private ?string $password = null;

<<<<<<< HEAD
    #[ORM\OneToOne(cascade: ['persist', 'remove'])]
    #[ORM\JoinColumn(nullable: false)]
    private ?UserInfo $userInfo = null;

    #[ORM\OneToOne(mappedBy: 'userInfo', targetEntity: self::class, cascade: ['persist', 'remove'])]
    private ?self $users = null;

    #[ORM\OneToOne(mappedBy: 'users', cascade: ['persist', 'remove'])]
    private ?Owner $owner = null;
=======
    #[ORM\OneToOne(inversedBy: 'user', cascade: ['persist', 'remove'])]
    #[ORM\JoinColumn(nullable: false)]
    private ?UserInfo $userInfo = null;

    #[ORM\OneToOne(mappedBy: 'users', cascade: ['persist', 'remove'])]
    private ?Bill $bill = null;
>>>>>>> 96f78bed3dce7562d191841684854b26bad5d1d9

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): static
    {
        $this->email = $email;

        return $this;
    }

    /**
     * A visual identifier that represents this user.
     *
     * @see UserInterface
     */
    public function getUserIdentifier(): string
    {
        return (string) $this->email;
    }

    /**
     * @see UserInterface
     */
    public function getRoles(): array
    {
        $roles = $this->roles;
        // guarantee every user at least has ROLE_USER
        $roles[] = 'ROLE_USER';

        return array_unique($roles);
    }

    public function setRoles(array $roles): static
    {
        $this->roles = $roles;

        return $this;
    }

    /**
     * @see PasswordAuthenticatedUserInterface
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password): static
    {
        $this->password = $password;

        return $this;
    }

    /**
     * @see UserInterface
     */
    public function eraseCredentials(): void
    {
        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
    }

    public function getUserInfo(): ?UserInfo
    {
        return $this->userInfo;
    }

<<<<<<< HEAD
    public function setUserInfo(?UserInfo $userInfo): static
=======
    public function setUserInfo(UserInfo $userInfo): static
>>>>>>> 96f78bed3dce7562d191841684854b26bad5d1d9
    {
        $this->userInfo = $userInfo;

        return $this;
    }

<<<<<<< HEAD
    public function getUsers(): ?self
    {
        return $this->users;
    }

    public function setUsers(?UserInfo $users): static
    {
        // set the owning side of the relation if necessary
        if ($users !== null && $users->getUserInfo() !== $this) {
            $users->setUserInfo($this);
        }

        $this->users = $users;

        return $this;
    }

    public function getOwner(): ?Owner
    {
        return $this->owner;
    }

    public function setOwner(?Owner $owner): static
    {
        // unset the owning side of the relation if necessary
        if ($owner === null && $this->owner !== null) {
            $this->owner->setUsers(null);
        }

        // set the owning side of the relation if necessary
        if ($owner !== null && $owner->getUsers() !== $this) {
            $owner->setUsers($this);
        }

        $this->owner = $owner;
=======
    public function getBill(): ?Bill
    {
        return $this->bill;
    }

    public function setBill(Bill $bill): static
    {
        // set the owning side of the relation if necessary
        if ($bill->getUsers() !== $this) {
            $bill->setUsers($this);
        }

        $this->bill = $bill;
>>>>>>> 96f78bed3dce7562d191841684854b26bad5d1d9

        return $this;
    }
}

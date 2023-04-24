<?php

namespace App\Entity;

use App\Repository\ClassesRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ClassesRepository::class)]
#[ORM\Table(name: '`classes`',schema: 'edmundoschema')]
class Classes
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 100)]
    private ?string $name = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $image = null;

    #[ORM\Column(length: 10)]
    private ?string $classCode = null;

    #[ORM\ManyToOne(inversedBy: 'Creator', cascade: ['persist'])]
    #[ORM\JoinColumn(nullable: false)]
    private ?User $creator = null;

    public function __construct(User $user, string $name){
        $this->creator = $user;
        $this->name = $name;
    }
    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(?string $image): self
    {
        $this->image = $image;

        return $this;
    }

    public function getClassCode(): ?string
    {
        return $this->classCode;
    }

    public function setClassCode(string $classCode): self
    {
        $this->classCode = $classCode;

        return $this;
    }

    public function getCreator(): ?User
    {
        return $this->creator;
    }

    public function setCreator(?User $creator): self
    {
        $this->creator = $creator;

        return $this;
    }
}

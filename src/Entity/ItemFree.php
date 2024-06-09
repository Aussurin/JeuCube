<?php

namespace App\Entity;

use App\Repository\ItemFreeRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ItemFreeRepository::class)]
class ItemFree
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 50)]
    private ?string $name = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $effect = null;

    #[ORM\Column(type: Types::SMALLINT)]
    private ?int $strengt = null;

    #[ORM\Column(type: Types::SMALLINT)]
    private ?int $po = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;

        return $this;
    }

    public function getEffect(): ?string
    {
        return $this->effect;
    }

    public function setEffect(string $effect): static
    {
        $this->effect = $effect;

        return $this;
    }

    public function getStrengt(): ?int
    {
        return $this->strengt;
    }

    public function setStrengt(int $strengt): static
    {
        $this->strengt = $strengt;

        return $this;
    }

    public function getPo(): ?int
    {
        return $this->po;
    }

    public function setPo(int $po): static
    {
        $this->po = $po;

        return $this;
    }
}

<?php

namespace App\Entity;

use App\Repository\BouquetRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: BouquetRepository::class)]
class Bouquet
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 20)]
    private ?string $synonyme = null;

    #[ORM\Column(length: 500)]
    private ?string $fakeReplica = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSynonyme(): ?string
    {
        return $this->synonyme;
    }

    public function setSynonyme(string $synonyme): static
    {
        $this->synonyme = $synonyme;

        return $this;
    }

    public function getFakeReplica(): ?string
    {
        return $this->fakeReplica;
    }

    public function setFakeReplica(string $fakeReplica): static
    {
        $this->fakeReplica = $fakeReplica;

        return $this;
    }
}

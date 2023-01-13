<?php

namespace App\Entity;

use App\Repository\LibraryRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: LibraryRepository::class)]
class Library
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToMany(targetEntity: Game::class, inversedBy: 'libraries')]
    private Collection $games;

    public function __construct()
    {
        $this->games = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return Collection<int, Game>
     */
    public function getGamesId(): Collection
    {
        return $this->games_id;
    }

    public function addGamesId(Game $gamesId): self
    {
        if (!$this->games_id->contains($gamesId)) {
            $this->games_id->add($gamesId);
        }

        return $this;
    }

    public function removeGamesId(Game $gamesId): self
    {
        $this->games_id->removeElement($gamesId);

        return $this;
    }
}

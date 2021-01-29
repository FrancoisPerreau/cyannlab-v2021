<?php

namespace App\Entity;

use App\Repository\CategorieRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CategorieRepository::class)
 */
class Categorie
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\OneToMany(targetEntity=Work::class, mappedBy="categorie")
     */
    private $work;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $slug;

    public function __construct()
    {
        $this->work = new ArrayCollection();
    }


    public function __toString()
    {
        return $this->getName();
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

    /**
     * @return Collection|Work[]
     */
    public function getWork(): Collection
    {
        return $this->work;
    }

    public function addWork(Work $work): self
    {
        if (!$this->work->contains($work)) {
            $this->work[] = $work;
            $work->setCategorie($this);
        }

        return $this;
    }

    public function removeWork(Work $work): self
    {
        if ($this->work->removeElement($work)) {
            // set the owning side to null (unless already changed)
            if ($work->getCategorie() === $this) {
                $work->setCategorie(null);
            }
        }

        return $this;
    }

    public function getSlug(): ?string
    {
        return $this->slug;
    }

    public function setSlug(string $slug): self
    {
        $this->slug = $slug;

        return $this;
    }
}

<?php

namespace App\Entity;

use App\Repository\WorkRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * @ORM\Entity(repositoryClass=WorkRepository::class)
 * * @UniqueEntity("slug")
 */
class Work
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
    private $title;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $subtitle;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $description;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $link;

    /**
     * @ORM\Column(type="datetime")
     */
    private $created_at;


    /**
     * @ORM\Column(type="string", length=255)
     */
    private $thumbnail;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $featuredImage;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $imageOne;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $imageTwo;

    /**
     * @ORM\ManyToOne(targetEntity=Categorie::class, inversedBy="work")
     * @ORM\JoinColumn(nullable=false)
     */
    private $categorie;

    /**
     * @ORM\Column(type="boolean")
     */
    private $isOnHome;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $technology;

    /**
     * @ORM\Column(name="slug", type="string", length=255, unique=true)
     */
    private $slug;

    /**
     * @var string
     */
    private $enteringSlug;



    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getSubtitle(): ?string
    {
        return $this->subtitle;
    }

    public function setSubtitle(?string $subtitle): self
    {
        $this->subtitle = $subtitle;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getLink(): ?string
    {
        return $this->link;
    }

    public function setLink(?string $link): self
    {
        $this->link = $link;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->created_at;
    }

    public function setCreatedAt(\DateTimeInterface $created_at): self
    {
        $this->created_at = $created_at;

        return $this;
    }



    public function getThumbnail(): ?string
    {
        return $this->thumbnail;
    }

    public function setThumbnail(string $thumbnail): self
    {
        $this->thumbnail = $thumbnail;

        return $this;
    }

    public function getFeaturedImage(): ?string
    {
        return $this->featuredImage;
    }

    public function setFeaturedImage(string $featuredImage): self
    {
        $this->featuredImage = $featuredImage;

        return $this;
    }

    public function getImageOne(): ?string
    {
        return $this->imageOne;
    }

    public function setImageOne(?string $imageOne): self
    {
        $this->imageOne = $imageOne;

        return $this;
    }

    public function getImageTwo(): ?string
    {
        return $this->imageTwo;
    }

    public function setImageTwo(?string $imageTwo): self
    {
        $this->imageTwo = $imageTwo;

        return $this;
    }

    public function getCategorie(): ?Categorie
    {
        return $this->categorie;
    }

    public function setCategorie(?Categorie $categorie): self
    {
        $this->categorie = $categorie;

        return $this;
    }

    public function getIsOnHome(): ?bool
    {
        return $this->isOnHome;
    }

    public function setIsOnHome(bool $isOnHome): self
    {
        $this->isOnHome = $isOnHome;

        return $this;
    }

    public function getTechnology(): ?string
    {
        return $this->technology;
    }

    public function setTechnology(?string $technology): self
    {
        $this->technology = $technology;

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


    public function getEnteringSlug(): ?string
    {
        return $this->enteringSlug;
    }


    public function setEnteringSlug(string $enteringSlug): self
    {
        $this->enteringSlug = $enteringSlug;

        return $this;
    }
}

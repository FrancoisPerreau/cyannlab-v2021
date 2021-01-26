<?php

namespace App\Entity;

use App\Repository\WorkRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=WorkRepository::class)
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
     * @ORM\Column(type="string", length=255, nullable=true)
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
     * @ORM\ManyToMany(targetEntity=Category::class, mappedBy="work")
     */
    private $categories;

    /**
     * @ORM\OneToOne(targetEntity=ThumbnailImage::class, mappedBy="work", cascade={"persist", "remove"})
     */
    private $thumbnailImage;

    /**
     * @ORM\OneToOne(targetEntity=FeaturedImage::class, mappedBy="work", cascade={"persist", "remove"})
     */
    private $featuredImage;

    /**
     * @ORM\OneToMany(targetEntity=DescriptionImage::class, mappedBy="work")
     */
    private $descriptionImages;

    public function __construct()
    {
        $this->categories = new ArrayCollection();
        $this->descriptionImages = new ArrayCollection();
    }

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

    /**
     * @return Collection|Category[]
     */
    public function getCategories(): Collection
    {
        return $this->categories;
    }

    public function addCategory(Category $category): self
    {
        if (!$this->categories->contains($category)) {
            $this->categories[] = $category;
            $category->addWork($this);
        }

        return $this;
    }

    public function removeCategory(Category $category): self
    {
        if ($this->categories->removeElement($category)) {
            $category->removeWork($this);
        }

        return $this;
    }

    public function getThumbnailImage(): ?ThumbnailImage
    {
        return $this->thumbnailImage;
    }

    public function setThumbnailImage(?ThumbnailImage $thumbnailImage): self
    {
        // unset the owning side of the relation if necessary
        if ($thumbnailImage === null && $this->thumbnailImage !== null) {
            $this->thumbnailImage->setWork(null);
        }

        // set the owning side of the relation if necessary
        if ($thumbnailImage !== null && $thumbnailImage->getWork() !== $this) {
            $thumbnailImage->setWork($this);
        }

        $this->thumbnailImage = $thumbnailImage;

        return $this;
    }

    public function getFeaturedImage(): ?FeaturedImage
    {
        return $this->featuredImage;
    }

    public function setFeaturedImage(?FeaturedImage $featuredImage): self
    {
        // unset the owning side of the relation if necessary
        if ($featuredImage === null && $this->featuredImage !== null) {
            $this->featuredImage->setWork(null);
        }

        // set the owning side of the relation if necessary
        if ($featuredImage !== null && $featuredImage->getWork() !== $this) {
            $featuredImage->setWork($this);
        }

        $this->featuredImage = $featuredImage;

        return $this;
    }

    /**
     * @return Collection|DescriptionImage[]
     */
    public function getDescriptionImages(): Collection
    {
        return $this->descriptionImages;
    }

    public function addDescriptionImage(DescriptionImage $descriptionImage): self
    {
        if (!$this->descriptionImages->contains($descriptionImage)) {
            $this->descriptionImages[] = $descriptionImage;
            $descriptionImage->setWork($this);
        }

        return $this;
    }

    public function removeDescriptionImage(DescriptionImage $descriptionImage): self
    {
        if ($this->descriptionImages->removeElement($descriptionImage)) {
            // set the owning side to null (unless already changed)
            if ($descriptionImage->getWork() === $this) {
                $descriptionImage->setWork(null);
            }
        }

        return $this;
    }
}

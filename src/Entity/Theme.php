<?php

namespace App\Entity;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;


/**
 * @ORM\Entity(repositoryClass="App\Repository\ThemeRepository")
 * @Vich\Uploadable
 * @UniqueEntity(fields="name", message="Nom de thème déjà existant. Veuillez en choisir un autre")
 */
class Theme
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;


    /**
     * @ORM\Column(type="string", length=255)
     * @var string
     */
    private $imageFond = 'titre2.png';

    /**
     * @Vich\UploadableField(mapping="theme_images", fileNameProperty="imageFond")
     * @var File
     */
    private $imageFile;


    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $url_img;

    /**
     * @ORM\Column(type="boolean")
     */
    private $isParametred;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Wishlist", mappedBy="theme")
     */
    private $wishlists;

    /**
     * @ORM\Column(type="datetime")
     * @var \DateTime
     */
    private $updated_at;

    public function __construct()
    {
        $this->wishlists = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setImageFond(?String $imageFond)
    {
        $this->imageFond = $imageFond;
        return $this;
    }

    public function getImageFond() : ?string
    {
        return $this->imageFond;
    }


    public function setImageFile(?File $imageFile): Theme
    {
        $this->imageFile = $imageFile;
        if ($imageFile) {
            $this->updated_at = new \DateTime('now');
        }
        return $this;
    }

    public function getImageFile() : ?File
    {
        return $this->imageFile;
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

    public function getUrlImg(): ?string
    {
        return $this->url_img;
    }

    public function setUrlImg(?string $url_img): self
    {
        $this->url_img = $url_img;

        return $this;
    }

    public function getIsParametred(): ?bool
    {
        return $this->isParametred;
    }

    public function setIsParametred(bool $isParametred): self
    {
        $this->isParametred = $isParametred;

        return $this;
    }

    /**
     * @return Collection|Wishlist[]
     */
    public function getWishlists(): Collection
    {
        return $this->wishlists;
    }

    public function addWishlist(Wishlist $wishlist): self
    {
        if (!$this->wishlists->contains($wishlist)) {
            $this->wishlists[] = $wishlist;
            $wishlist->setTheme($this);
        }

        return $this;
    }

    public function removeWishlist(Wishlist $wishlist): self
    {
        if ($this->wishlists->contains($wishlist)) {
            $this->wishlists->removeElement($wishlist);
            // set the owning side to null (unless already changed)
            if ($wishlist->getTheme() === $this) {
                $wishlist->setTheme(null);
            }
        }

        return $this;
    }
  public function __toString(){
      return $this->name;
 }

  public function getUpdatedAt(): ?\DateTimeInterface
  {
      return $this->updated_at;
  }

  public function setUpdatedAt(\DateTimeInterface $updated_at): self
  {
      $this->updated_at = $updated_at;

      return $this;
  }
}

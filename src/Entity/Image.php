<?php

namespace App\Entity;

use App\Repository\ImageRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ImageRepository::class)
 */
class Image
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToMany(targetEntity=Kamer::class, inversedBy="images")
     */
    private $kamerId;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $imagefile;

    public function __construct()
    {
        $this->kamerId = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return Collection|Kamer[]
     */
    public function getKamerId(): Collection
    {
        return $this->kamerId;
    }

    public function addKamerId(Kamer $kamerId): self
    {
        if (!$this->kamerId->contains($kamerId)) {
            $this->kamerId[] = $kamerId;
        }

        return $this;
    }

    public function removeKamerId(Kamer $kamerId): self
    {
        if ($this->kamerId->contains($kamerId)) {
            $this->kamerId->removeElement($kamerId);
        }

        return $this;
    }

    public function getImagefile(): ?string
    {
        return $this->imagefile;
    }

    public function setImagefile(string $imagefile): self
    {
        $this->imagefile = $imagefile;

        return $this;
    }
}

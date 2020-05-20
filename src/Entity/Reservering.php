<?php

namespace App\Entity;

use App\Repository\ReserveringRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ReserveringRepository::class)
 */
class Reservering
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=Kamer::class, inversedBy="reserverings")
     */
    private $kamerId;

    /**
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="reserverings")
     */
    private $userId;

    /**
     * @ORM\Column(type="date")
     */
    private $checkinDate;

    /**
     * @ORM\Column(type="date")
     */
    private $checkoutDate;

    /**
     * @ORM\OneToOne(targetEntity=Betaal::class, cascade={"persist", "remove"})
     */
    private $betaalId;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $betaalMethode;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getKamerId(): ?Kamer
    {
        return $this->kamerId;
    }

    public function setKamerId(?Kamer $kamerId): self
    {
        $this->kamerId = $kamerId;

        return $this;
    }

    public function getUserId(): ?User
    {
        return $this->userId;
    }

    public function setUserId(?User $userId): self
    {
        $this->userId = $userId;

        return $this;
    }

    public function getCheckinDate(): ?\DateTimeInterface
    {
        return $this->checkinDate;
    }

    public function setCheckinDate(\DateTimeInterface $checkinDate): self
    {
        $this->checkinDate = $checkinDate;

        return $this;
    }

    public function getCheckoutDate(): ?\DateTimeInterface
    {
        return $this->checkoutDate;
    }

    public function setCheckoutDate(\DateTimeInterface $checkoutDate): self
    {
        $this->checkoutDate = $checkoutDate;

        return $this;
    }

    public function getBetaalId(): ?Betaal
    {
        return $this->betaalId;
    }

    public function setBetaalId(?Betaal $betaalId): self
    {
        $this->betaalId = $betaalId;

        return $this;
    }

    public function getBetaalMethode(): ?string
    {
        return $this->betaalMethode;
    }

    public function setBetaalMethode(string $betaalMethode): self
    {
        $this->betaalMethode = $betaalMethode;

        return $this;
    }
}

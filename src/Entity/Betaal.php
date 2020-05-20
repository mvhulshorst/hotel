<?php

namespace App\Entity;

use App\Repository\BetaalRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=BetaalRepository::class)
 */
class Betaal
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $userId;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $soort;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $rekening_nr;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $creditcard_nr;

    /**
     * @ORM\Column(type="date")
     */
    private $betaaldate;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUserId(): ?int
    {
        return $this->userId;
    }

    public function setUserId(int $userId): self
    {
        $this->userId = $userId;

        return $this;
    }

    public function getSoort(): ?string
    {
        return $this->soort;
    }

    public function setSoort(string $soort): self
    {
        $this->soort = $soort;

        return $this;
    }

    public function getRekeningNr(): ?string
    {
        return $this->rekening_nr;
    }

    public function setRekeningNr(?string $rekening_nr): self
    {
        $this->rekening_nr = $rekening_nr;

        return $this;
    }

    public function getCreditcardNr(): ?string
    {
        return $this->creditcard_nr;
    }

    public function setCreditcardNr(?string $creditcard_nr): self
    {
        $this->creditcard_nr = $creditcard_nr;

        return $this;
    }

    public function getBetaaldate(): ?\DateTimeInterface
    {
        return $this->betaaldate;
    }

    public function setBetaaldate(\DateTimeInterface $betaaldate): self
    {
        $this->betaaldate = $betaaldate;

        return $this;
    }

    public function __toString(): string
    {
        return (string) $this->id;
    }
}

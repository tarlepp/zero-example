<?php

namespace App\Entity;

use App\Repository\InvitationRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=InvitationRepository::class)
 */
class Invitation
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="datetime")
     */
    private $sentAt;

    /**
     * @ORM\OneToMany(targetEntity=Signer::class, mappedBy="Invitations")
     */
    private $signers;

    public function __construct()
    {
        $this->signers = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSentAt(): ?\DateTimeInterface
    {
        return $this->sentAt;
    }

    public function setSentAt(\DateTimeInterface $sentAt): self
    {
        $this->sentAt = $sentAt;

        return $this;
    }

    /**
     * @return Collection|Signer[]
     */
    public function getSigners(): Collection
    {
        return $this->signers;
    }

    public function addSigner(Signer $signer): self
    {
        if (!$this->signers->contains($signer)) {
            $this->signers[] = $signer;
            $signer->setInvitations($this);
        }

        return $this;
    }

    public function removeSigner(Signer $signer): self
    {
        if ($this->signers->removeElement($signer)) {
            // set the owning side to null (unless already changed)
            if ($signer->getInvitations() === $this) {
                $signer->setInvitations(null);
            }
        }

        return $this;
    }
}

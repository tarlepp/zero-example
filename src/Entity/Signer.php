<?php

namespace App\Entity;

use App\Repository\SignerRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=SignerRepository::class)
 */
class Signer
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
     * @ORM\ManyToOne(targetEntity=Invitation::class, inversedBy="signers")
     */
    private $Invitations;

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

    public function getInvitations(): ?Invitation
    {
        return $this->Invitations;
    }

    public function setInvitations(?Invitation $Invitations): self
    {
        $this->Invitations = $Invitations;

        return $this;
    }
}

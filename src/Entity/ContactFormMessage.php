<?php

namespace App\Entity;

use App\Repository\ContactFormMessageRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ContactFormMessageRepository::class)
 */
class ContactFormMessage
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="text")
     */
    private $message;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $mailorphone;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMessage(): ?string
    {
        return $this->message;
    }

    public function setMessage(string $message): self
    {
        $this->message = $message;

        return $this;
    }

    public function getMailorphone(): ?string
    {
        return $this->mailorphone;
    }

    public function setMailorphone(string $mailorphone): self
    {
        $this->mailorphone = $mailorphone;

        return $this;
    }
}

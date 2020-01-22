<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\StaffRepository")
 */
class Staff
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Company", inversedBy="staff")
     * @ORM\JoinColumn(nullable=false)
     */
    private $company;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $firstname;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $lastname;

    /**
     * @ORM\Column(type="date")
     */
    private $birthdate;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Service", inversedBy="staff")
     * @ORM\JoinColumn(nullable=false)
     */
    private $service;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $post;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $email;

    /**
     * @ORM\Column(type="string", length=14)
     */
    private $directline;

    /**
     * @ORM\Column(type="string", length=14)
     */
    private $mobileline;

    /**
     * @ORM\Column(type="string", length=5)
     */
    private $internalline;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\ChoiceON", inversedBy="staff")
     */
    private $isvisible;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCompany(): ?Company
    {
        return $this->company;
    }

    public function setCompany(?Company $company): self
    {
        $this->company = $company;

        return $this;
    }

    public function getFirstname(): ?string
    {
        return $this->firstname;
    }

    public function setFirstname(string $firstname): self
    {
        $this->firstname = $firstname;

        return $this;
    }

    public function getLastname(): ?string
    {
        return $this->lastname;
    }

    public function setLastname(string $lastname): self
    {
        $this->lastname = $lastname;

        return $this;
    }

    public function getBirthdate(): ?\DateTimeInterface
    {
        return $this->birthdate;
    }

    public function setBirthdate(\DateTimeInterface $birthdate): self
    {
        $this->birthdate = $birthdate;

        return $this;
    }

    public function getService(): ?Service
    {
        return $this->service;
    }

    public function setService(?Service $service): self
    {
        $this->service = $service;

        return $this;
    }

    public function getPost(): ?string
    {
        return $this->post;
    }

    public function setPost(string $post): self
    {
        $this->post = $post;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getDirectline(): ?string
    {
        return $this->directline;
    }

    public function setDirectline(string $directline): self
    {
        $this->directline = $directline;

        return $this;
    }

    public function getMobileline(): ?string
    {
        return $this->mobileline;
    }

    public function setMobileline(string $mobileline): self
    {
        $this->mobileline = $mobileline;

        return $this;
    }

    public function getInternalline(): ?string
    {
        return $this->internalline;
    }

    public function setInternalline(string $internalline): self
    {
        $this->internalline = $internalline;

        return $this;
    }

    public function getIsvisible(): ?ChoiceON
    {
        return $this->isvisible;
    }

    public function setIsvisible(?ChoiceON $isvisible): self
    {
        $this->isvisible = $isvisible;

        return $this;
    }
}

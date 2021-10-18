<?php

namespace App\Entity;

use App\Repository\ContractorRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ContractorRepository::class)
 */
class Contractor
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
     * @ORM\Column(type="string", length=255)
     */
    private $country;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $zip_code;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $city;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $street;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $number;

    /**
     * @ORM\Column(type="string", length=10)
     */
    private $tax_id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $telephone;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $email;

    /**
     * @ORM\OneToOne(targetEntity=Vehicles::class, mappedBy="added_by", cascade={"persist", "remove"})
     */
    private $vehicles;

    /**
     * @ORM\OneToOne(targetEntity=Loads::class, mappedBy="added_by", cascade={"persist", "remove"})
     */
    private $loads;

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

    public function getCountry(): ?string
    {
        return $this->country;
    }

    public function setCountry(string $country): self
    {
        $this->country = $country;

        return $this;
    }

    public function getZipCode(): ?string
    {
        return $this->zip_code;
    }

    public function setZipCode(string $zip_code): self
    {
        $this->zip_code = $zip_code;

        return $this;
    }

    public function getCity(): ?string
    {
        return $this->city;
    }

    public function setCity(string $city): self
    {
        $this->city = $city;

        return $this;
    }

    public function getStreet(): ?string
    {
        return $this->street;
    }

    public function setStreet(string $street): self
    {
        $this->street = $street;

        return $this;
    }

    public function getNumber(): ?string
    {
        return $this->number;
    }

    public function setNumber(string $number): self
    {
        $this->number = $number;

        return $this;
    }

    public function getTaxId(): ?string
    {
        return $this->tax_id;
    }

    public function setTaxId(string $tax_id): self
    {
        $this->tax_id = $tax_id;

        return $this;
    }

    public function getTelephone(): ?string
    {
        return $this->telephone;
    }

    public function setTelephone(string $telephone): self
    {
        $this->telephone = $telephone;

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

    public function getVehicles(): ?Vehicles
    {
        return $this->vehicles;
    }

    public function setVehicles(Vehicles $vehicles): self
    {
        // set the owning side of the relation if necessary
        if ($vehicles->getAddedBy() !== $this) {
            $vehicles->setAddedBy($this);
        }

        $this->vehicles = $vehicles;

        return $this;
    }

    public function getLoads(): ?Loads
    {
        return $this->loads;
    }

    public function setLoads(Loads $loads): self
    {
        // set the owning side of the relation if necessary
        if ($loads->getAddedBy() !== $this) {
            $loads->setAddedBy($this);
        }

        $this->loads = $loads;

        return $this;
    }

    public function __toString()
    {
      return $this->getName().', '.$this->getCountry().', '.$this->getZipCode().', tel:'.$this->getTelephone();
    }
}

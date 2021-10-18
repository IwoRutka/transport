<?php

namespace App\Entity;

use App\Repository\AddressRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=AddressRepository::class)
 */
class Address
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
    private $country;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $short_country;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $zip_code;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $city;

    /**
     * @ORM\OneToOne(targetEntity=Vehicles::class, mappedBy="loading", cascade={"persist", "remove"})
     */
    private $vehicles;

    /**
     * @ORM\OneToOne(targetEntity=Loads::class, mappedBy="loading", cascade={"persist", "remove"})
     */
    private $loads;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getShortCountry(): ?string
    {
        return $this->short_country;
    }

    public function setShortCountry(string $short_country): self
    {
        $this->short_country = $short_country;

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

    public function getVehicles(): ?Vehicles
    {
        return $this->vehicles;
    }

    public function setVehicles(Vehicles $vehicles): self
    {
        // set the owning side of the relation if necessary
        if ($vehicles->getLoading() !== $this) {
            $vehicles->setLoading($this);
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
        if ($loads->getLoading() !== $this) {
            $loads->setLoading($this);
        }

        $this->loads = $loads;

        return $this;
    }

    public function __toString()
    {
      return $this->getShortCountry().', '.$this->getZipCode().', '.$this->getCity();
    }
}

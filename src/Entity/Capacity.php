<?php

namespace App\Entity;

use App\Repository\CapacityRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CapacityRepository::class)
 */
class Capacity
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
    private $tons;

    /**
     * @ORM\OneToOne(targetEntity=Vehicles::class, mappedBy="capacity", cascade={"persist", "remove"})
     */
    private $vehicles;

    /**
     * @ORM\OneToOne(targetEntity=Loads::class, mappedBy="capacity", cascade={"persist", "remove"})
     */
    private $loads;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTons(): ?string
    {
        return $this->tons;
    }

    public function setTons(string $tons): self
    {
        $this->tons = $tons;

        return $this;
    }

    public function getVehicles(): ?Vehicles
    {
        return $this->vehicles;
    }

    public function setVehicles(Vehicles $vehicles): self
    {
        // set the owning side of the relation if necessary
        if ($vehicles->getCapacity() !== $this) {
            $vehicles->setCapacity($this);
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
        if ($loads->getCapacity() !== $this) {
            $loads->setCapacity($this);
        }

        $this->loads = $loads;

        return $this;
    }

    public function __toString()
    {
      return $this->getTons().' t';
    }
}

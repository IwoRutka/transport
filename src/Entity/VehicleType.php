<?php

namespace App\Entity;

use App\Repository\VehicleTypeRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=VehicleTypeRepository::class)
 */
class VehicleType
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
    private $type;

    /**
     * @ORM\OneToOne(targetEntity=Vehicles::class, mappedBy="vehicle_type", cascade={"persist", "remove"})
     */
    private $vehicles;

    /**
     * @ORM\OneToOne(targetEntity=Loads::class, mappedBy="vehicle_type", cascade={"persist", "remove"})
     */
    private $loads;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getVehicles(): ?Vehicles
    {
        return $this->vehicles;
    }

    public function setVehicles(Vehicles $vehicles): self
    {
        // set the owning side of the relation if necessary
        if ($vehicles->getVehicleType() !== $this) {
            $vehicles->setVehicleType($this);
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
        if ($loads->getVehicleType() !== $this) {
            $loads->setVehicleType($this);
        }

        $this->loads = $loads;

        return $this;
    }

    public function __toString()
    {
      return $this->getType();
    }
}

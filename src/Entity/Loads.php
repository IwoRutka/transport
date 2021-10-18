<?php

namespace App\Entity;

use App\Repository\LoadsRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=LoadsRepository::class)
 */
class Loads
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\OneToOne(targetEntity=Address::class, inversedBy="loads", cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $loading;

    /**
     * @ORM\OneToOne(targetEntity=Address::class, inversedBy="loads", cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $unloading;

    /**
     * @ORM\OneToOne(targetEntity=Capacity::class, inversedBy="loads", cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $capacity;

    /**
     * @ORM\OneToOne(targetEntity=VehicleType::class, inversedBy="loads", cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $vehicle_type;

    /**
     * @ORM\Column(type="datetime")
     */
    private $create_date;

    /**
     * @ORM\OneToOne(targetEntity=Contractor::class, inversedBy="loads", cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $added_by;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLoading(): ?Address
    {
        return $this->loading;
    }

    public function setLoading(Address $loading): self
    {
        $this->loading = $loading;

        return $this;
    }

    public function getUnloading(): ?Address
    {
        return $this->unloading;
    }

    public function setUnloading(Address $unloading): self
    {
        $this->unloading = $unloading;

        return $this;
    }

    public function getCapacity(): ?Capacity
    {
        return $this->capacity;
    }

    public function setCapacity(Capacity $capacity): self
    {
        $this->capacity = $capacity;

        return $this;
    }

    public function getVehicleType(): ?VehicleType
    {
        return $this->vehicle_type;
    }

    public function setVehicleType(VehicleType $vehicle_type): self
    {
        $this->vehicle_type = $vehicle_type;

        return $this;
    }

    public function getCreateDate(): ?\DateTimeInterface
    {
        return $this->create_date;
    }

    public function setCreateDate(\DateTimeInterface $create_date): self
    {
        $this->create_date = $create_date;

        return $this;
    }

    public function getAddedBy(): ?Contractor
    {
        return $this->added_by;
    }

    public function setAddedBy(Contractor $added_by): self
    {
        $this->added_by = $added_by;

        return $this;
    }
}

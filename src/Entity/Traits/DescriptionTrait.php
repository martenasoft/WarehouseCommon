<?php

namespace MartenaSoft\WarehouseCommon\Entity\Traits;

trait DescriptionTrait
{
    /**
     * @ORM\Column(type="text")
     */
    private string $description;

    public function getDescription(): string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;
        return $this;
    }
}
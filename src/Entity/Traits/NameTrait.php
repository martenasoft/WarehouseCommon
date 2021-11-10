<?php

namespace MartenaSoft\WarehouseCommon\Entity\Traits;

trait NameTrait
{
    /**
     * @ORM\Column()
     */
    private string $name;

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;
        return $this;
    }
}
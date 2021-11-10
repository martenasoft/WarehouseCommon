<?php

namespace MartenaSoft\WarehouseCommon\Entity\Traits;

trait SavedStatusTrait
{

    /**
     * @ORM\Column(type="smallint", options={"default"=0})
     */
    private int $savedStatus;

    public function getSavedStatus(): int
    {
        return $this->savedStatus;
    }

    public function setSavedStatus(int $savedStatus): self
    {
        $this->savedStatus = $savedStatus;
        return $this;
    }
}
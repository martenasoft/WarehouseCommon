<?php

namespace MartenaSoft\WarehouseCommon\Entity\Interfaces;

interface SavedStatusInterface
{
    public const STATUS_IN_PROCESS = 0;
    public const STATUS_SUCCESS = 1;

    public function getSavedStatus(): int;
    public function setSavedStatus(int $savedStatus): self;
}
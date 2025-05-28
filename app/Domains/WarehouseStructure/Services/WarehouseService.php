<?php

namespace App\Domains\WarehouseStructure\Services;

use App\Domains\WarehouseStructure\Actions\CreateWarehouseAction;

class WarehouseService
{
    protected $createWarehouseAction;

    public function __construct(CreateWarehouseAction $createWarehouseAction)
    {
        $this->createWarehouseAction = $createWarehouseAction;
    }

    public function createWarehouse(array $data)
    {
        return $this->createWarehouseAction->execute($data);
    }
}

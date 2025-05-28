<?php

namespace App\Domains\WarehouseStructure\Actions;

use App\Domains\WarehouseStructure\Models\Warehouse;

class CreateWarehouseAction
{
    public function execute(array $data): Warehouse
    {
        // Logic สร้างคลังใหม่
        return Warehouse::create($data);
    }
}

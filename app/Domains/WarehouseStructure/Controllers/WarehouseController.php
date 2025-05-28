<?php

namespace App\Domains\WarehouseStructure\Controllers;

use App\Http\Controllers\Controller;
use App\Domains\WarehouseStructure\Requests\StoreWarehouseRequest;
use App\Domains\WarehouseStructure\Services\WarehouseService;

class WarehouseController extends Controller
{
    protected $warehouseService;

    public function __construct(WarehouseService $warehouseService)
    {
        $this->warehouseService = $warehouseService;
    }

    public function store(StoreWarehouseRequest $request)
    {
        $warehouse = $this->warehouseService->createWarehouse($request->validated());

        return response()->json([
            'message' => 'Warehouse created successfully',
            'data' => $warehouse,
        ], 201);
    }
}

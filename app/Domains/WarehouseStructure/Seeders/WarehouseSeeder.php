<?php

namespace App\Domains\WarehouseStructure\Seeders;

use Illuminate\Database\Seeder;
use App\Domains\WarehouseStructure\Models\Warehouse;

class WarehouseSeeder extends Seeder
{
    public function run()
    {
        Warehouse::create([
            'code' => 'WH001',
            'name' => 'Main Warehouse',
            'address' => '123 Warehouse St.',
            'type' => 'main',
        ]);

        Warehouse::create([
            'code' => 'WH002',
            'name' => 'Sub Warehouse 1',
            'address' => '456 Storage Ave.',
            'type' => 'sub',
        ]);
    }
}

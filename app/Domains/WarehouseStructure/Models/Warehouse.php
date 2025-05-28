<?php

namespace App\Domains\WarehouseStructure\Models;

use Illuminate\Database\Eloquent\Model;

class Warehouse extends Model
{
    protected $table = 'warehouses';

    protected $fillable = [
        'code',
        'name',
        'address',
        'type', // เช่น 'main', 'sub'
    ];

    // ความสัมพันธ์ เช่น โซนในคลัง
    public function zones()
    {
        return $this->hasMany(Zone::class);
    }
}

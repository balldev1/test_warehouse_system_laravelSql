<?php

namespace App\Domains\WarehouseStructure\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreWarehouseRequest extends FormRequest
{
    public function authorize()
    {
        return true; // ปรับสิทธิ์ตามระบบจริง
    }

    public function rules()
    {
        return [
            'code' => 'required|string|max:20|unique:warehouses,code',
            'name' => 'required|string|max:100',
            'address' => 'nullable|string|max:255',
            'type' => 'required|in:main,sub',
        ];
    }
}


// validate_data
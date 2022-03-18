<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreStockRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return auth('admin')->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|string|unique:stocks,name',
            'description' => 'string',
            'products' => 'string|required', // (qty|price, qty|price)
            'variation' => 'string|required',
            'stock_option_id' => 'required|numeric|exists:stock_options,id',
            'inventory_id' => 'required|numeric|exists:inventories,id'
        ];
    }
}

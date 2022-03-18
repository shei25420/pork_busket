<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateMenuItemRequest extends FormRequest
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
            'name' => 'required|string|unique:menu_items,name',
            'menu_category_id' => 'required|numeric|exists:menu_categories,id',
            'meta' => 'required|string',
            'image' => 'image|mimes:png,jpg,jpeg,gif,svg'
        ];
    }
}

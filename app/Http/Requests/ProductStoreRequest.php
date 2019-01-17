<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class ProductStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Auth::check() && Auth::user()->isAdmin();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|max:255',
            'brand_name' => 'required|max:255',
            'vendor_code'  => 'required|integer|max:999999999',
            'price' => 'required|integer|max:99999999',
            'image' => 'image|mimes:jpeg,jpg|max:2048',
        ];
    }
}

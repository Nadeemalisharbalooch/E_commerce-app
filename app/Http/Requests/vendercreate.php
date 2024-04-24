<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class vendercreate extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'title'=>'required|string|max:15',
            'price' => 'required|interger',
            'number' => 'required|interger|max:10',
            'Description' => 'required|string|max:100',
            'category' => 'required|string|',
            'brand'=>'required|string|',  
        ];
    }
}

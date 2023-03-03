<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateDishRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|max:255|string',
            'cover_image' => 'required|file',
            'ingredients' => 'required|text',
            'description' =>  'required|max: 300',
            'price' => 'required|decimal',
            'hide' => 'required|boolean',
        ];
    }
}

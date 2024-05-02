<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreclientRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'role_id' => 'sometimes|required|exists:roles,id',
            'name' => 'sometimes|required|string|max:255',
            'punti' => 'sometimes|required|integer',
            'img_url' => 'nullable|url',
            // ... other client fields
        ];
    }
}

<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NewsStoreRequest extends FormRequest
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
            'title' => ['required', 'string', 'min:3'],
        ];
    }
    public function messages() {
        return [
            'required' => 'поле обязательно для заполнения',
            'min' => [
                'string' => 'Поле должно быть минимум :min символов'
            ]
        ];
    }
    public function attributes() {
        return [];
    }
}

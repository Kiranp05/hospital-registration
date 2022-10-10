<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Updateform extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', ], //'unique:users'
            //'password' => ['required', 'string', 'min:8', 'confirmed'],
            'hospital_id' => ['required', 'string', 'max:255'],
            'address' => ['required', 'string', 'max:255'],
            'city' => ['required', 'string', 'max:255'],
            'stage' => ['required', 'string', 'max:255'],
            'zipcode' => ['required', 'string', 'max:255'],
            'speciality' => ['required', 'string', 'max:255'],
        ];
    }
}

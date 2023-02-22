<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactProfileRequest extends FormRequest
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
            'telp' => ['required', 'string', 'max:15'],
            'website' => ['string', 'max:255'],
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array<string, string>
     */

    public function messages()
    {
        return [
            'telp.required' => 'Nomor telepon harus diisi',
            'telp.max' => 'Nomor telepon maksimal berukuran 15 karakter',
            'website.max' => 'Website maksimal berukuran 255 karakter',
        ];
    }
}

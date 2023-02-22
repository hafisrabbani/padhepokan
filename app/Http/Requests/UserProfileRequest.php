<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserProfileRequest extends FormRequest
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
            'username' => ['required', 'string', 'max:255', 'unique:users,username,' . $this->user()->id],
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['max:255'],
            'avatar' => ['image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
            'banner' => ['image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
            'jenis_kelamin' => ['required', 'string', 'max:1', 'in:L,P'],
            'institusi' => ['required', 'string', 'max:255'],
            'tagline' => ['string', 'max:255'],
            'biografi' => ['string', 'max:255'],
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
            'username.required' => 'Username harus diisi',
            'username.unique' => 'Username sudah digunakan',
            'first_name.required' => 'Nama depan harus diisi',
            'jenis_kelamin.required' => 'Jenis kelamin harus diisi',
            'jenis_kelamin.in' => 'Jenis kelamin tidak valid',
            'institusi.required' => 'Institusi harus diisi',
            'avatar.image' => 'Avatar harus berupa gambar',
            'avatar.mimes' => 'Avatar harus berupa gambar dengan ekstensi jpeg, png, jpg, gif, svg',
            'avatar.max' => 'Avatar maksimal berukuran 2MB',
            'banner.image' => 'Banner harus berupa gambar',
            'banner.mimes' => 'Banner harus berupa gambar dengan ekstensi jpeg, png, jpg, gif, svg',
            'banner.max' => 'Banner maksimal berukuran 2MB',
            'tagline.max' => 'Tagline maksimal berukuran 255 karakter',
            'bio.max' => 'Bio maksimal berukuran 255 karakter',
            'last_name.max' => 'Nama belakang maksimal berukuran 255 karakter',
            'username.max' => 'Username maksimal berukuran 255 karakter',
            'first_name.max' => 'Nama depan maksimal berukuran 255 karakter',
            'institusi.max' => 'Institusi maksimal berukuran 255 karakter',
        ];
    }
}

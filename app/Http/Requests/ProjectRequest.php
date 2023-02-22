<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProjectRequest extends FormRequest
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
            'deskripsi' => ['required'],
            'expired' => ['required', 'date'],
            'thumbnail' => ['required', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
            'jenis' => ['required', 'in:kontrak,non-kontrak'],
            'biaya' => ['required', 'numeric', 'min:1'],
            'gmaps' => ['required', 'max:255'],
            'galeri.*' => ['image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
            'duration' => ['required', 'numeric', 'min:1'],

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
            'name.required' => 'Nama proyek harus diisi',
            'deskripsi.required' => 'Deskripsi proyek harus diisi',
            'expired.required' => 'Tanggal berakhir proyek harus diisi',
            'expired.date' => 'Tanggal berakhir proyek tidak valid',
            'thumbnail.required' => 'Thumbnail proyek harus diisi',
            'thumbnail.image' => 'Thumbnail proyek harus berupa gambar',
            'thumbnail.mimes' => 'Thumbnail proyek harus berupa gambar dengan ekstensi jpeg, png, jpg, gif, svg',
            'thumbnail.max' => 'Thumbnail proyek maksimal berukuran 2MB',
            'jenis.required' => 'Jenis proyek harus diisi',
            'jenis.in' => 'Jenis proyek tidak valid',
            'biaya.required' => 'Biaya proyek harus diisi',
            'biaya.numeric' => 'Biaya proyek harus berupa angka',
            'biaya.min' => 'Biaya proyek minimal 1',
            'gmaps.required' => 'Lokasi proyek harus diisi',
            'galeri.required' => 'Galeri proyek harus diisi',
            'galeri.*.image' => 'Galeri proyek harus berupa gambar',
            'galeri.*.mimes' => 'Galeri proyek harus berupa gambar dengan ekstensi jpeg, png, jpg, gif, svg',
            'galeri.*.max' => 'Galeri proyek maksimal berukuran 2MB',
            'duration.required' => 'Durasi proyek harus diisi',
            'duration.numeric' => 'Durasi proyek harus berupa angka',
            'duration.min' => 'Durasi proyek minimal 1 bulan',
        ];
    }
}

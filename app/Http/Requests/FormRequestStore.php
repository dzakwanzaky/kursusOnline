<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormRequestStore extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'nama_lengkap' => 'required|min:5',
            'no_telp' => 'required|min:11',
            'asal_sekolah' => 'required|min:7',
            'email' => 'required|min:11|email',

            'name' => 'required|min:3|string',
            'phone' => 'required|min:11|numeric',
            'password' => 'required|min:7',
            'password_confirmation' =>'same:password|required'
        ];
    }
    public function messages()
    {
        return [
            'nama_lengkap.required' => 'Nama lengkap tidak boleh kosong',
            'nama_lengkap.min' => 'Nama lengkap tidak boleh kurang dari 5 karakter',
            'nama_lengkap.string' => 'Nama lengkap harus berupa huruf',
            'no_telp.required' => 'No telp tidak boleh kosong',
            'no_telp.min' => 'No telp tidak boleh kurang dari 11 angka',
            'no_telp.numeric' => 'No telp harus berisi angka',
            'asal_sekolah.min' => 'Asal sekolah tidak boleh kurang dari 7 karakter',
            'asal_sekolah.required' => 'Asal sekolah tidak boleh kosong',
            'email.required' => 'Email tidak boleh kosong',
            'email.min' => 'Email tidak boleh kurang dari 11 karakter',
            'email.email' => 'Email tidak valid',

            'name.required' => 'Nama lengkap tidak boleh kosong',
            'name.min' => 'Nama lengkap tidak boleh kurang dari 3 karakter',
            'name.string' => 'Nama lengkap harus berupa huruf',
            'phone.min' => 'No telp tidak boleh kurang dari 11 angka',
            'phone.required' =>  'No telp tidak boleh kosong',
            'phone.numeric' => 'No telp harus berisi angka',
            'password.min' => 'Password tidak boleh kurang dari 7 masukan',
            'password.required' => 'Password tidak boleh kosong',
            'password_confirmation.same' => 'Konfirmasi password tidak sama',
            'password_confirmation.required' => 'Konfirmasi password tidak boleh kosong',

        ];
    }
}

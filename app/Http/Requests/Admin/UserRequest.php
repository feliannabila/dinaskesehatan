<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'name' => 'required',
            'username' => 'required|unique:users,username',
            'email' => 'required|unique:users,email',
            'phone_number' => 'required|numeric|digits_between:9,13',
            'password' => 'required|min:8',
            'address' => 'required'
        ];
    }

    public function massages()
    {
        return [
            'name.required' => 'Nama Puskesmas wajib diisi',
            'username.required' => 'Username wajib diisi',
            'email.required' => 'Email wajib diisi',
            'phone_number.required' => 'Nomer Telepon wajib diisi',
            'password.required' => 'Password wajib diisi',
            'address.required' => 'Alamat wajib diisi',
            'username.unique.users' => 'Username sudah ada'
        ];
    }
}

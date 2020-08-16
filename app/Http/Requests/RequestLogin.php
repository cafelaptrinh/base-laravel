<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RequestLogin extends FormRequest
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
            'username'=>'required|string',
            'password'=>'required|string'
        ];
    }
    public function messages()
    {
        return [
            'username.required'=>'Hãy nhập tài khoản hoặc email !',
            'password.required'=>'Hãy nhập mật khẩu !',
            'username.string'=>'Tài khoản chứa ký tự không cho phép !',
            'password.string'=>'Mật khẩu chứa ký tự không cho phép !',
        ];
    }
}

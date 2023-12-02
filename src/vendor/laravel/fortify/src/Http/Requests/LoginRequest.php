<?php

namespace Laravel\Fortify\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Laravel\Fortify\Fortify;

class LoginRequest extends FormRequest
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
            Fortify::username() => 'required|string',
            'email' => ['required','email','max:191'],
            'password' => 'required|string',
        ];
    }

    public function messages(){
        return [
            'email.required'=>'メールアドレスを入力してください',
            'email.email'=>'メールアドレスはメール形式で入力してください',
            'email.max'=>'メールアドレスは191文字以下で入力してください',
            'password.required'=>'パスワードを入力してください',
            'password.min'=>'パスワードは8文字以上で入力してください',
            'password.max'=>'パスワードは191文字以下で入力してください'
        ];
    }
}

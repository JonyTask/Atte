<?php

namespace Laravel\Fortify\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Laravel\Fortify\Fortify;

class RegisterRequest extends FormRequest
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
            'name'=>['required','string','max:191'],
            'email'=>['required','unique','email','max:191'],
            'password'=>['required','min:8','max:191']
        ];
    }

    public function messages(){
        return [
            'name.required'=>'名前を入力してください',
            'name.string'=>'名前は文字列で入力してください',
            'name.max'=>'名前は191文字以下で入力してください',
            'email.required'=>'メールアドレスを入力してください',
            'email.email'=>'メールアドレスはメール形式で入力してください',
            'email.unique'=>'こちらのメールアドレスはすでに登録されております',
            'email.max'=>'メールアドレスは191文字以下で入力してください',
            'password.required'=>'パスワードを入力してください',
            'password.min'=>'パスワードは8文字以上で入力してください',
            'password.max'=>'パスワードは191文字以下で入力してください'
        ];
    }
}

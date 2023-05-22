<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return ($this->path() === 'register');  // ->bool
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules() {
        return [
            'name' => 'required',
            'mail' => 'email',
            'age' => 'numeric|hello',   // 自作validator'hello'を代入
        ];;
    }

    // メッセージのカスタマイズ
    public function messages() {
        return [
            'name.required' => '名前欄が空欄です。',
            'mail.email' => 'メールアドレスを所定の形式で入力してください。',
            'age.numeric' => '年齢は整数で入力してください。',
            'age.hello' => 'hello',
        ];
    }
}

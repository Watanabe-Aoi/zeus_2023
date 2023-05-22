<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GreetRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return $this->path() === 'greet';
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'lang' => 'lang',
        ];
    }

    public function messages(){
        return [
            'lang' => '不明な言語です。',
        ];
    }
}

<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'name'=> ['required', 'min:1'],
            'email'=> ['required', 'email:rfc'],
            'phone'=> ['required', 'max:20'],
            'text'=> ['required', 'min:1'],
        ];
    }

//    public function messages()
//    {
//        return [
//            'name.required'=> 'Поле имя является обязательным',
//            'email.required'=> 'Поле e-mail является обязательным',
//            'phone.required'=> 'Поле телефон является обязательным',
//            'text.required'=> 'Поле сообщение является обязательным'
//        ];
//    }
}

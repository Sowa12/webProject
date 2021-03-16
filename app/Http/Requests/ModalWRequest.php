<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ModalWRequest extends FormRequest
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
            'firstName' => 'required|min:3|max:50',
            'secoundName' => 'required|min:3|max:50',
            'email' => 'required|email'
        ];
    }

    public function attributes() {
        return [
          'firstName' => 'имя'
        ];
    }

    public function messages() {
        return [
            'firstName.required' => 'Поле имя является обязательным',
            'secoundName.required' => 'Поле фамилия является обязательным',
            'email.required' => 'Поле email является обязательным',
        ];
    }

}

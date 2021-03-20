<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Notifications\Notifiable;

class ContactRequest extends FormRequest
{
    /**
     * Route notifications for the Telegram channel.
     *
     * @return int
     */
    public function routeNotificationFor()
    {
        return 708121661;
    }
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
            'name' => 'required|min:3|max:50',
            'phone' => 'required|min:3|max:50',
            'email' => 'required|email',
            'message' =>'required|min:3'
        ];
    }


}

<?php

namespace App\Modules\Admin\User\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class UserRequest extends FormRequest
{

    public function authorize()
    {
        return Auth::user()->canDo(['SUPER_ADMINISTRATOR','USER_ACCESS']);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'firstname'=>'max:255',
            'patronymic'=>'max:255',
            'lastname'=>'max:255',
        ];
    }

}

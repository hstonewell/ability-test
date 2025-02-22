<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

use Laravel\Fortify\Http\Requests\LoginRequest as FortifyLoginRequest;
use Laravel\Fortify\Fortify;

class AdminRequest extends FormRequest
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
            'email' => [
                'required',
                'string',
                'email:strict,dns,spoof',
                'max:191',
            ],
            'password' => [
                'required',
                'string',
                'max:191',
            ],
        ];
    }
}

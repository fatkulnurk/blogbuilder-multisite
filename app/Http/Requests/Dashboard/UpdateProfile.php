<?php

namespace App\Http\Requests\Dashboard;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProfile extends FormRequest
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
            'first_name'    => 'required|string|max:190',
            'middle_name'   => 'nullable|string|max:190',
            'last_name'     => 'nullable|string|max:190',
            'birthday'      => 'nullable|date|date_format:Y-m-d|before:2019-01-01',
            'address'       => 'nullable|string|max:190',
            'phone_number'  => 'nullable|string|max:16',
            'bio'           => 'nullable|string|max:190'
        ];
    }
}

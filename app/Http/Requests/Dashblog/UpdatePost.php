<?php

namespace App\Http\Requests\Dashblog;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePost extends FormRequest
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
            'title'         => 'required|string|max:190',
            'body'          => 'required|string|max:65000',
            'image'         => 'nullable|max:2000',
            'label'         => 'required|string|max:190',
            'status'        => 'required|integer',
            'category'      => 'required|integer'
        ];
    }
}

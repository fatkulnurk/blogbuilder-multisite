<?php

namespace App\Http\Requests\Dashblog;

use Illuminate\Foundation\Http\FormRequest;

class InformationBlogUpdate extends FormRequest
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
            'title'             => 'required|string|max:50',
            'short_desc'        => 'required|string|max:190',
            'description'       => 'required|regex:/(^[A-Za-z09 ,.-]+$)+/|max:190',
            'category_blog_id'  => 'required|int',
            'logo'             => 'nullable|max:2000',
        ];
    }
}

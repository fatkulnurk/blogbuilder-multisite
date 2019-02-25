<?php

namespace App\Http\Requests\Dashboard;

use Illuminate\Foundation\Http\FormRequest;

class StoreBlog extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'subdomain'         => 'required|unique:blog,domain_id',
            'title'             => 'required|max:50',
            'short_desc'        => 'required|max:190',
            'description'       => 'required',
            'category_blog_id'  => 'required',
        ];
    }
}

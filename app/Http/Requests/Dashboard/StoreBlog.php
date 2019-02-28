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
            'subdomain'         => 'required|unique:blog,subdomain,domain_id',
            'title'             => 'required|max:50',
            'short_desc'        => 'required|max:190',
            'description'       => 'required|max:190',
            'category_blog_id'  => 'required',
            'domain'            => 'required',
            'logo'              => 'nullable',
            'meta_header'       => 'nullable',
            'meta_footer'       => 'nullable',
        ];
    }
}

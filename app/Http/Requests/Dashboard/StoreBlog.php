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
            'subdomain'         => 'required|regex:/(^[A-Za-z0-9-]+$)+/|unique:blog,subdomain,domain_id',
            'title'             => 'required|string|max:50',
            'short_desc'        => 'required|string|max:190',
            'description'       => 'required|regex:/(^[A-Za-z09 ,.-]+$)+/|max:190',
            'category_blog_id'  => 'required|int',
            'domain'            => 'required|int',
            'logo'              => 'nullable',
            'meta_header'       => 'nullable|string',
            'meta_footer'       => 'nullable|string',
        ];
    }

    public function messages()
    {
        return [
            'subdomain.regex' => 'subdomain hanya terdiri dari tanda hubung (-), huruf dan angka.',
            'description.regex' => 'deskripsi hanya terdiri dari tanda koma (,), titik (.), hubung (-), huruf dan angka.'
        ];
    }
}

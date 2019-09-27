<?php
/**
 * Created by PhpStorm.
 * User: Rudi
 * Date: 3/20/2019
 * Time: 11:49 AM
 * Email: fatkulnurk@gmail.com
 */

namespace App\Services\BlogShow;


class TemplateCode
{
    protected $template;
    public function __construct($template)
    {
        $this->template = $template;
    }

    public function index()
    {
        $code = $this->template->code_header.
            $this->template->code_index.
            $this->template->code_footer;

        return $code;
    }

    public function post()
    {
        $code = $this->template->code_header.
            $this->template->code_post.
            $this->template->code_footer;

        return $code;
    }

    public function page()
    {
        $code = $this->template->code_header.
            $this->template->code_page.
            $this->template->code_footer;

        return $code;
    }

    public function category()
    {
        $code = $this->template->code_header.
            $this->template->code_category.
            $this->template->code_footer;

        return $code;
    }

    public function search(){
        $code = $this->template->code_header.
            $this->template->code_search.
            $this->template->code_footer;

        return $code;
    }
}
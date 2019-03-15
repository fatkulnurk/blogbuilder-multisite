<?php
/**
 * Created by PhpStorm.
 * User: Rudi
 * Date: 3/5/2019
 * Time: 7:46 PM
 */

namespace App\Fnk\TemplateEngine;


class FnkTemplate{

    // Tags array
    private $tags = [];

    // Template file
    private $template;

    public function __construct($templateFile)
    {
        $this->template = $templateFile;
    }

    // Render the build template
    public function render()
    {
        $this->replaceTags();

        echo $this->template;
    }

    // Set the {tag} with value
    public function set($tag, $value)
    {
        $this->tags[$tag] = $value;
    }

    // Replaces all {tags} with corresponding values from $tags array
    private function replaceTags()
    {
        foreach ($this->tags as $tag => $value) {
            $this->template = str_replace($tag, $value, $this->template);
//            $this->template = str_replace('<fnk='.$tag.'></fnk>', $value, $this->template);
        }

        return true;
    }
}
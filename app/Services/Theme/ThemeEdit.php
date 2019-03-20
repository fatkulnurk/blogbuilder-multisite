<?php
/**
 * Created by PhpStorm.
 * User: Rudi
 * Date: 3/20/2019
 * Time: 4:09 PM
 * Email: fatkulnurk@gmail.com
 */

namespace App\Services\Theme;

use App\Enum\TemplateComponentEnum;
use App\Model\Template;

class ThemeEdit
{

    public static function typeAvailable($type)
    {
        switch ($type){
            case TemplateComponentEnum::CODE_HEADER:
            case TemplateComponentEnum::CODE_INDEX:
            case TemplateComponentEnum::CODE_POST:
            case TemplateComponentEnum::CODE_CATEGORY:
            case TemplateComponentEnum::CODE_PAGE:
            case TemplateComponentEnum::CODE_SEARCH:
            case TemplateComponentEnum::CODE_FOOTER:
            case TemplateComponentEnum::STYLESHEET:
            case TemplateComponentEnum::JAVASCRIPT:
                return true;
                break;
            default:
                return false;
        }
    }

    public static function getCode($type, Template $template)
    {
        switch ($type){
            case TemplateComponentEnum::CODE_HEADER:
                $code = $template->code_header;
                break;
            case TemplateComponentEnum::CODE_INDEX:
                $code = $template->code_index;
                break;
            case TemplateComponentEnum::CODE_POST:
                $code = $template->code_post;
                break;
            case TemplateComponentEnum::CODE_CATEGORY:
                $code = $template->code_category;
                break;
            case TemplateComponentEnum::CODE_PAGE:
                $code = $template->code_page;
                break;
            case TemplateComponentEnum::CODE_SEARCH:
                $code = $template->code_search;
                break;
            case TemplateComponentEnum::CODE_FOOTER:
                $code = $template->code_footer;
                break;
            case TemplateComponentEnum::STYLESHEET:
                $code = $template->stylesheet;
                break;
            case TemplateComponentEnum::JAVASCRIPT:
                $code = $template->javascript;
                break;
            default:
                $code = "MOHON LAPOR KE ADMIN, INI ADALAH KESALAHAN";
        }

        return $code;
    }

}
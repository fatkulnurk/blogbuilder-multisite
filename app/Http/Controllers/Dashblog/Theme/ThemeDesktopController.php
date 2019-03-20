<?php

namespace App\Http\Controllers\DashBlog\Theme;

use App\Enum\TemplateComponentEnum;
use App\Http\Requests\Dashblog\ThemeDekstopUpdate;
use App\Model\Blog;
use App\Model\Template;
use App\Services\Theme\ThemeEdit;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ThemeDesktopController extends Controller
{
    public function index(Request $request, $blogid)
    {
        $templateComponent = TemplateComponentEnum::getAll();

        return view('dashblog.theme.desktop.index', [
            'blogid' => $blogid,
            'templateComponent' => $templateComponent,
        ]);
    }

    public function edit(Request $request, $blogid)
    {
        $type = $request->get('type');

        if (ThemeEdit::typeAvailable($type)) {
            $template = Template::whereHas('blogDekstops', function ($blog) use ($blogid){
                $blog->where('id', $blogid);
            })->first();

        } else {
            abort('404');
        }

        $code = ThemeEdit::getCode($type, $template);

        return view('dashblog.theme.desktop.code', [
            'blogid'    => $blogid,
            'type'      => $type,
            'code'      => $code,
        ]);

    }

    public function update(ThemeDekstopUpdate $request, $blogid)
    {
        $type = $request->get('type');

        $template = Template::whereHas('blogDekstops', function ($blog) use ($blogid){
            $blog->where('id', $blogid);
        })->first();

        $template[TemplateComponentEnum::getDesciptionTable($type)] = $request->code;
        $template->save();

        return redirect()->route('dashblog.theme.desktop.index', [
            'blogid' => $blogid
        ])->with('success', __('dashblog-theme.update'));
    }


}

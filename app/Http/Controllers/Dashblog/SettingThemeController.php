<?php

namespace App\Http\Controllers\Dashblog;

use App\Enum\StatusTemplateEnum;
use App\Model\Blog;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SettingThemeController extends Controller
{

    public function edit($blogid)
    {
        $blog = Blog::with('domain')->findOrFail($blogid);
        $statusTemplate = StatusTemplateEnum::getAll();

        return view('dashblog.setting.theme', compact('blog', 'blogid', 'statusTemplate'));
    }

    public function update(Request $request, $blogid)
    {
        $blog = Blog::findOrFail($blogid);

        if ($request->status == StatusTemplateEnum::ON) {
            $blog->template_mobile_status = StatusTemplateEnum::ON;
        } else {
            $blog->template_mobile_status = StatusTemplateEnum::OFF;
        }
        $blog->save();

        return redirect()
            ->route('dashblog.setting.theme.edit', $blogid)
            ->with('success', __('dashblog-setting.setting-theme-update-success'));
    }
}

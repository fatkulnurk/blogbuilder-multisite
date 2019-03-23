<?php

namespace App\Http\Controllers\Dashblog;

use App\Http\Requests\Dashblog\InformationBlogUpdate;
use App\Model\Blog;
use App\Model\CategoryBlog;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class InformationBlogController extends Controller
{
    public function edit($blogid)
    {
        $blog = Blog::with('domain')->findOrFail($blogid);
        $categorys = CategoryBlog::all();
        return view('dashblog.setting.information', compact('blog', 'blogid', 'categorys'));
    }

    public function update(InformationBlogUpdate $request, $blogid)
    {
        $blog = Blog::findOrFail($blogid);

        $blog->title = $request->title;
        $blog->short_desc = $request->short_desc;
        $blog->description = $request->description;
        $blog->categoryBlog()->associate(CategoryBlog::findOrFail($request->category_blog_id));
        if ($request->file('logo')) {
            $blog->logo = $request->file('logo')->store('logo/'.$blogid);
        }
        $blog->save();

        return redirect()
            ->route('dashblog.setting.information.edit', $blogid)
            ->with('success', __('dashblog-setting.information-update-success'));
    }
}

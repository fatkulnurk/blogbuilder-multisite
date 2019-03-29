<?php

namespace App\Http\Controllers\Dashblog;

use App\Enum\StatusPageEnum;
use App\Repository\PageRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PagePublishController extends Controller
{
    private $pageRepo;

    public function __construct(Request $request)
    {
        $this->pageRepo = PageRepository::getInstance($request->segment('2'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, $blogid)
    {
        $pages = $this->pageRepo->index(StatusPageEnum::PUBLISH, $request);
        $search = $request->title;
        return view('dashblog.page.publish.index', compact('blogid', 'pages', 'search'));
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($blogid, $id)
    {
        if ($this->pageRepo->toTrash($id)){
            return redirect()->route('dashblog.page-publish.index', ['blogid' => $blogid])
                ->with('success', __('dashblog-page.destroy'));
        }
    }
}

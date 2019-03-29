<?php

namespace App\Http\Controllers\Dashblog;

use App\Enum\StatusPageEnum;
use App\Repository\PageRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PageTrashController extends Controller
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
        $pages = $this->pageRepo->indexTrash($request);
        $search = $request->title;
        return view('dashblog.page.trash.index', compact('blogid', 'pages', 'search'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($blogid, $id)
    {
        if ($this->pageRepo->toDelete($id)){
            return redirect()->route('dashblog.page-trash.index', ['blogid' => $blogid])
                ->with('success', __('dashblog-page.destroy-trash'));
        }

        return redirect()->route('dashblog.page-trash.index', ['blogid' => $blogid])
            ->with('error', __('dashblog-page.destroy-trash-failed'));
    }
}

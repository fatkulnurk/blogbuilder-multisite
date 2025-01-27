<?php

namespace App\Http\Controllers\Dashblog;

use App\Enum\StatusPageEnum;
use App\Http\Requests\Dashblog\StorePage;
use App\Http\Requests\Dashblog\UpdatePage;
use App\Model\Blog;
use App\Model\Page;
use App\Repository\PageRepository;
use App\Scopes\PageStatusScope;
use App\Services\PageService;
use App\Services\Random;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class PageController extends Controller
{

    protected $pageService;
    protected $pageRepo;
    public function __construct(Request $request)
    {
//        $this->pageService = new PageService(\request()->route()->parameter('blogid'));
        $this->pageService = new PageService(\request('blogid'));
        $this->pageRepo = PageRepository::getInstance($request->segment(2));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, $blogid)
    {
        $pages = $this->pageRepo->indexAll($request);

        $search = $request->title;

        return view('dashblog.page.index', compact('blogid', 'pages', 'search'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($blogid)
    {
        return view('dashblog.page.create', compact('blogid'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePage $request, $blogid)
    {
        $page = new Page();
        $page->title    = $request->title;
        $page->body     = $request->body;

        if (Page::where('slug', Str::slug($request->title))->exists()) {
            $page->slug     = Str::slug($request->title.'-'.Random::string());
        } else {
            $page->slug     = Str::slug($request->title);
        }

        $page->status   = $request->status;
        $page->user()->associate(User::findOrFail(Auth::id()));
        $page->blog()->associate(Blog::findOrFail($blogid));
        $page->save();

        return redirect()->route('dashblog.page.index', ['blogid'=> $blogid])
            ->with('success', __('dashblog-page.store'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($blogid, $pageid)
    {
        return __('error.empty');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($blogid, $pageid)
    {
//        $page = Page::findOrFail($pageid);
        $page = $this->pageRepo->findOrFailAll($pageid);
        return view('dashblog.page.edit', compact('blogid', 'page'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePage $request, $blogid, $pageid)
    {
        $this->pageRepo->update($request, $blogid, $pageid);

        return redirect()->route('dashblog.page.index', ['blogid' => $blogid])
            ->with('success', __('dashblog-page.update'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($blogid, $id)
    {
        $this->pageRepo->toTrash($id);
//        $page = Page::findOrFail($id);
//        $page->status = StatusPageEnum::TRASH;
//        $page->save();
//
//        $page->delete();

        return redirect()->route('dashblog.page.index', ['blogid' => $blogid])
            ->with('success', __('dashblog-page.destroy'));
    }
}

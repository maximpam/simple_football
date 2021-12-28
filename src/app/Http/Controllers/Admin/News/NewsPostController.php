<?php

namespace App\Http\Controllers\Admin\News;

use App\Http\Controllers\Admin\News\BaseController;
use App\Models\NewsPost;
use Illuminate\Http\Request;
use App\Repositories\NewsPostsRepository;


class NewsPostController extends BaseController
{

    private $newsPostsRepository;

    public function __construct()
    {
        parent::__construct();
        $this->newsPostsRepository = app(NewsPostsRepository::class);
    }



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $paginator = $this->newsPostsRepository->getAllwithPaginate(5);


        return view('admin.news.index', compact('paginator'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $item = new NewsPost();

        return view ('admin.news.edit', compact('item'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->input();
        $item = new NewsPost($data);


        $item->save();

        if ($item){
            return redirect()
                ->route('news.posts.edit', $item->id)
                ->with(['success' => 'Success']);
        } else {
            return back()
                ->withErrors(['msg'=>"Error saving"])
                ->withInput();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id, NewsPostsRepository $newsPostsRepository)
    {
        $item = $newsPostsRepository->getEdit($id);

        if(empty($item)){
            abort(404);
        }

        return view('admin.news.edit', compact('item'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $item = $this->newsPostsRepository->getEdit($id);

        if (empty($item)){
            return back()
                ->withErrors(['msg'=>"Sign id = [{$id}] wasn`t found"])
                ->withInput();
        }
        $data = $request->all();
        $result = $item
            ->fill($data)
            ->save();
        if ($result){
            return redirect()
                ->route('news.posts.edit', $item->id)
                ->with(['success' => 'Success']);
        } else {
            return back()
                ->withErrors(['msg'=>"Error saving"])
                ->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = NewsPost::find($id);
    if ($post) {
      $post->delete();
    }
    return redirect()->route('news.posts.index');
    }
}

<?php

namespace App\Http\Controllers\Common;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\NewsPostsRepository;

class NewsController extends Controller
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
        $paginator = $this->newsPostsRepository->getAllwithPaginateforPublic(6);

        return view('public.news.index', compact('paginator'));

        //return view('public.news.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        dd($id);

    }


}

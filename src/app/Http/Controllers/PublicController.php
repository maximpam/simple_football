<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\BlogPostsRepository;
use App\Repositories\NewsPostsRepository;



class PublicController extends Controller
{

    private $blogPostsRepository;
    private $newsPostRepository;

    public function __construct()
    {
        parent::__construct();
        $this->blogPostsRepository = app(BlogPostsRepository::class);
        $this->newsPostRepository = app(NewsPostsRepository::class);
    }

    public function index(){

        $newsPosts = $this->newsPostRepository->getPostsForMainPage();
        $blogPosts = $this->blogPostsRepository->getPostsForMainPage();
        return view('public.main.main_page', compact('newsPosts', 'blogPosts'));

        //return view('public.main_page', compact('newsPosts'));


        //dd($newsPosts, $blogPosts);
        //dd();

    }
}

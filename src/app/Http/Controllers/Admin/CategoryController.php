<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\CategoryCreateRequest;
use App\Http\Requests\CategoryUpdateRequest;
use App\Models\Category;
use App\Repositories\CategoryRepository;
use Illuminate\Http\Request;
use function React\Promise\all;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{

    private $categoryRepository;

    public function __construct()
    {
        parent::__construct();
        $this->categoryRepository = app(CategoryRepository::class);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index()
    {
        $paginator = $this->categoryRepository->getAllwithPaginate(5);

        return view('admin.category.index', compact('paginator'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $item = new Category();
        $categoryList = Category::all();

        return view('admin.category.edit', compact('item', 'categoryList'));    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryCreateRequest $request)
    {
        $data = $request->input();
        $item = new Category($data);

        $item->save();

        if ($item){
            return redirect()
                ->route('categories.edit', $item->id)
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
    public function edit($id,CategoryRepository $categoryRepository)
    {
        $item = $categoryRepository->getEdit($id);

        if(empty($item)){
            abort(404);
        }

        return view('admin.category.edit', compact('item'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CategoryUpdateRequest $request, $id)
    {
        $item = $this->categoryRepository->getEdit($id);

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
                ->route('categories.edit', $item->id)
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
        //
    }
}

<?php

use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [PublicController::class, 'index']);

Route::get('/test', function () {
    return view('test');
});

Route::namespace('Common')->prefix('news')->group(function(){
    Route::get('/', 'NewsController@index');
    Route::get('/{id}', 'NewsController@show');
});

Route::get('/posts', [App\Http\Controllers\Livewire\PostListing::class])
        ->name('posts.listing');

        // Route::namespace('Livewire')->prefix('posts')->group(function(){
        //     Route::get('/', 'PostListing@render');
        // });

//Route::group(['namespace' > 'blog', 'prefix' > 'blog'], function (){
//    Route::resource('posts', 'PostController') ->names('blog.posts');
//});



// Route::namespace('Blog')->prefix('blog')->group(function (){
// Route::resource('posts', 'PostController')->names('blog.posts');
// });

Route::namespace('Admin')->prefix('admin')->group(function(){
    Route::namespace('Blog')->prefix('blog')->group(function (){
    Route::resource('posts', 'PostController')->names('blog.posts');
    });
    Route::namespace('News')->prefix('news')->group(function (){
        Route::resource('posts', 'NewsPostController')->names('news.posts');
        });

    Route::resource('categories', 'CategoryController')->names('categories');

    Route::get('/', function () {
        return view('admin.main.index');
    });

});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');




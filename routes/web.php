<?php

use App\Models\Post;
use App\Http\Controllers\PostController;
use App\Models\Category;
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
    return view('v-home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('v-about', [
        "title" => "About",
        "name" => "Dodi Sopandi",
        "email" => "dodisopandi@gmil.com",
        "image" => "dado.jpg"
    ]);
});



Route::get('/blogs', [PostController::class, 'index']);
Route::get('blogs/{post:slug}', [PostController::class, 'show']);


Route::get('/categories', function(){
    return view('v-categories',[
        'title' => 'Post Categories',
        'categories' => Category::all(),
    ]);
});
Route::get('/categories/{category:slug}', function (Category $category) {
    return view('v-category', [
        'title' => $category->name,
        'posts' => $category->posts,
        'category' => $category->name
    ]);
});

Route::get('/template', function(){
    return view('v-template');
});

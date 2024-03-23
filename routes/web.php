<?php

use App\Models\Post;
use App\Http\Controllers\PostController;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Models\User;



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
        "title" => "Home",
        "active" => "home"
    ]);
});

Route::get('/about', function () {
    return view('v-about', [
        "title" => "About",
        "name" => "Dodi Sopandi",
        "email" => "dodisopandi@gmil.com",
        "image" => "dado.jpg",
        "active" => "about"
    ]);
});



Route::get('/blogs', [PostController::class, 'index']);
Route::get('blogs/{post:slug}', [PostController::class, 'show']);


Route::get('/categories', function(){
    return view('v-categories',[
        'title' => 'Post Categories',
        'categories' => Category::all(),
        "active" => "categories"
    ]);
});
Route::get('/categories/{category:slug}', function (Category $category) {
    return view('v-blog', [
        'title' => "Post By Category: $category->name",
        'posts' => $category->posts->load('category', 'author'),
        "active" => "categories"

    ]);
});

Route::get('/template', function(){
    return view('v-template',[
        'title' => 'Admin'
    ]);
});

Route::get('/authors/{author:username}', function(User $author){
    return view('v-blog',[
    'title' => "Post By Author : $author->name" ,
    'posts' => $author->posts->load('category', 'author'),
    ]);

});

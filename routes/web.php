<?php

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

// this will create a N+1 problem
//Route::get('/', function () {
//    return view('posts', [
//        'posts' => Post::all()
//    ]);
//});

// to solve the N+1 problem
Route::get('/', function(){
   return view('posts', [
       'posts' => Post::with('category')->get()
    ]);
});

// method 1
Route::get('/posts/{post}', function($id){

    return view('post', [
        'post' => Post::findOrFail($id)
    ]);
});

// method 2
Route::get('/posts/{post}', function(Post $post){
    return view('post',[
        'post' => $post
    ]);
});

// route for category
Route::get('/categories/{category:slug}', function(Category $category){
    return view('posts', [
        'posts' => $category->posts
    ]);
});

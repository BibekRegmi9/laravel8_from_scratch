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

Route::get('/', function () {
    return view('posts', [
        'posts' => Post::all()
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

Route::get('/movies', function(){
    return 'List of movies';
});

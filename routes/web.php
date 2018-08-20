<?php

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

Route::get('/test', function () {
    $like = new \App\Like();
    //dd($like->user()->toSql());
    $post = new \App\Post();
    $post2 = new \App\Post();
    $post2 = $post2->find(2);

    dd($post2->likes->pluck('user'));
    //dd($post->likes()->toSql());

});



<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Post;

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
    $post = new Post;

    $post->title = '123123';
    $post->slug = '123123';
    $post->content = '123123';
    $post->date = date('Y-m-d');
    $post->user_id = 1;
    $post->save();

    //return view('welcome', ['posts' => $posts]);
});
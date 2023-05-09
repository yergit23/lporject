<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
//use App\Http\Requests;
use App\Post;
use App\User;
use Database\Factories\UserFactory;
use Illuminate\Database\Eloquent\Factories\Factory;

use Illuminate\Support\Facades\Event as LaravelEvent;

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
    $data = [
        "title" => "title123",
        "slug" => "asdasddas",
        "content" => "asdasd asdasd asdasd"
    ];
    $post = Post::find(6);
    $post->Fill($data);
    $post->save();


    //return view('welcome', ['posts' => $posts]);
});
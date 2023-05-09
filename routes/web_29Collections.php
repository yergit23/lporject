<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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

    $users = collect([
        [
            "id" => 1,
            "name" => "John",
            "status" => "ban"
        ],
        [
            "id" => 2,
            "name" => "Mac",
            "status" => "ban"
        ],
        [
            "id" => 3,
            "name" => "Bret",
            "status" => "ban"
        ],
        [
            "id" => 4,
            "name" => "Tom",
            "status" => "active"
        ]
    ]);

    $names = $users->filter(function($user) {
        return $user['status'] == 'ban';
    })->filter(function($user) {
        return $user['id'] > 1;
    });

    dd($names);

    $bannedUsers = [];
    foreach ($users as $user) {
        if($user['status'] == 'ban') {
            $bannedUsers[] = $user;
        }
    }

    $bannedUsersIDs = [];
    foreach ($bannedUsers as $user) {
        if($user['id'] > 1) {
            $bannedUsersIDs[] = $user;
        }
    }

    dd($bannedUsersIDs);

    //return view('welcome');
});
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

//Route::get('/', function () {
//    return view('welcome');
//});
//
//Route::get('/about', function () {
//    return "Hello from the about page!";
//});
//
//Route::get('/contact', function () {
//    return "Hi! I'm the contact page";
//});
//
//Route::get('/post/{id}/{name}', function ($id, $name) {
//    return "This is post number". $id . " " . $name;
//});
//
//Route::get('admin/posts/example', array('as' =>' admin.home', function () {
//    $url = route('admin.home');
//    return "This URL is ". $url;
//}));

Route::get('/post', '\app\Http\Controllers\PostsController@index');
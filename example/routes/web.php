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
    return view('welcome');
});
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

//Route::get('/post/{id}', '\App\Http\Controllers\PostsController@index');

//Route::resource('posts', 'App\Http\Controllers\PostsController');

//Route::get('/contact', 'App\Http\Controllers\PostsController@contact');

//Route::get('/post/{id}/{name}/{password}', 'App\Http\Controllers\PostsController@show_post');

// ------------------------
// Database Raw SQL Queries
// ------------------------

Route::get('/insert', function(){
    DB::insert('insert into posts(title, content) values(?, ?)', ['PHP with Laravel', 'Laravel is the best thing that has happened to PHP']);
});

Route::get('/read', function (){
    $results = DB::select('select * from posts where id = ?', [1]);
    
    return var_dump($results);

    //return $results;

    //foreach($results as $post){
    //    return $post->title;
    //}
});

Route::get('/update', function (){
    $updated = DB::update('update posts set title = "Updated title" where id = ?', [1]);

    return $updated;
});
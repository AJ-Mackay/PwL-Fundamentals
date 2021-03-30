<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;

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

//Route::get('/post/{id}', '\App\Http\Controllers\PostsController@index');

//Route::resource('posts', 'App\Http\Controllers\PostsController');

//Route::get('/contact', 'App\Http\Controllers\PostsController@contact');

//Route::get('/post/{id}/{name}/{password}', 'App\Http\Controllers\PostsController@show_post');

// ------------------------
// Database Raw SQL Queries
// ------------------------

//Route::get('/insert', function(){
//    DB::insert('insert into posts(title, content) values(?, ?)', ['PHP with Laravel', 'Laravel is the best thing that has happened to PHP']);
//});

//Route::get('/read', function (){
//    $results = DB::select('select * from posts where id = ?', [1]);
//    
//    return var_dump($results);
//
//    // return $results;
//
//    // foreach($results as $post){
//    //     return $post->title;
//    // }
//});

//Route::get('/update', function (){
//    $updated = DB::update('update posts set title = "Updated title" where id = ?', [1]);
//
//    return $updated;
//});

//Route::get('/delete', function (){
//    $deleted = DB::delete('delete from posts where id = ?', [1]);
//
//    return $deleted;
//});

// ------------------------
//      Eloquent / ORM
// ------------------------

Route::get('/read', function (){
    $posts = Post::all();

    foreach($posts as $post) {
        return $post->title;
    }
});

Route::get('/find', function (){
    $post = Post::find(4);

    return $post->title;
});

Route::get('/findwhere', function (){
    $posts = Post::where('id', 3)->orderBy('id', 'desc')->take(1)->get();

    return $posts;
});

Route::get('/findmore', function (){
    //$posts = Post::findOrFail(1);
    //
    //return $posts;

    $posts = Post::where('users_count', '<', 50)->firstOrFail();

    return $posts;
});

Route::get('/basicinsert', function (){
    $post = new Post;

    $post->title = 'new ORM title';
    $post->content = 'Wow Eloquent is really cool, look at this content';

    $post->save();
});

Route::get('/basicupdate', function (){
    $post = Post::find(4);

    $post->title = 'new ORM title 2';

    $post->save();
});
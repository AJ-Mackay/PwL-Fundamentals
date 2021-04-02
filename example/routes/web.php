<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Models\User;
use App\Models\Country;
use App\Models\Photo;
use App\Models\Tag;

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

//Route::get('/read', function (){
//    $posts = Post::all();
//
//    foreach($posts as $post) {
//        return $post->title;
//    }
//});

//Route::get('/find', function (){
//    $post = Post::find(4);
//
//    return $post->title;
//});

//Route::get('/findwhere', function (){
//    $posts = Post::where('id', 3)->orderBy('id', 'desc')->take(1)->get();
//
//    return $posts;
//});

//Route::get('/findmore', function (){
//    //$posts = Post::findOrFail(1);
//    //
//    //return $posts;
//
//    $posts = Post::where('users_count', '<', 50)->firstOrFail();
//
//    return $posts;
//});

//Route::get('/basicinsert', function (){
//    $post = new Post;
//
//    $post->title = 'new ORM title';
//    $post->content = 'Wow Eloquent is really cool, look at this content';
//
//    $post->save();
//});

//Route::get('/basicupdate', function (){
//    $post = Post::find(4);
//
//    $post->title = 'new ORM title 2';
//
//    $post->save();
//});

//Route::get('/create', function (){
//    Post::create(['title'=>'the create method', 'content'=>'Wow I am learning a lot with Edwin Diaz']);
//});

//Route::get('/update', function (){
//    Post::where('id', 6)->where('is_admin', 0)->update(['title'=>'NEW PHP TITLE', 'content'=>'I love my instructor Edwin']);
//});

//Route::get('/delete', function (){
//    $post = Post::find(4);
//    
//    $post->delete();
//});

//Route::get('/destroy', function (){
//    Post::destroy(3);
//});

//Route::get('/destroymany', function (){
//    Post::destroy([6,8]);
//});

//Route::get('/softdelete', function (){
//    Post::find(11)->delete();
//});

//Route::get('/readsoftdelete', function (){
//    $post = Post::withTrashed()->where('id', 9)->get();
//
//    return $post;
//});

//Route::get('/readall', function (){
//    $posts = Post::withTrashed()->where('is_admin', 0)->get();
//
//    return $posts;
//});

//Route::get('/readallsoftdelete', function (){
//    $post = Post::onlyTrashed()->where('is_admin', 0)->get();
//
//    return $post;
//});

//Route::get('/restore', function (){
//    Post::withTrashed()->where('id', 9)->restore();
//});

//Route::get('/forcedelete', function (){
//    Post::onlyTrashed()->where('is_admin', 0)->forceDelete();
//    // Post::withTrashed()->where('id', 11)->forceDelete();
//});

// ------------------------
//  Eloquent Relationships
// ------------------------

// One to One relationship
//Route::get('/user/{id}/post', function ($id){
//    return User::find($id)->post;
//});

// Inverse relationship
//Route::get('/post/{id}/user', function ($id){
//    return Post::find($id)->user->name;
//});

// One to Many relationship
//Route::get('/posts', function (){
//    
//    $user = User::find(1);
//
//    foreach($user->posts as $post) {
//
//       echo $post->title . "<br>";
//    
//    }
//});

// Many to Many relationship
//Route::get('user/{id}/role', function($id){
//    $user = User::find($id)->roles()->orderBy('id', 'desc')->get();
//
//    return $user;
//
//    //foreach($user->roles as $role){
//    //    return $role->name;
//    //}
//});

// Accessing the intermediate/pivot/lookup table
//Route::get('/user/pivot', function(){
//    $user = User::find(1);
//
//    foreach($user->roles as $role){
//        return $role->pivot->created_at;
//    }
//});

// Has many through relation
//Route::get('/user/country', function() {
//    $country = Country::find(8);
//
//    foreach($country->posts as $post){
//        return $post->title;
//    }
//});

// Polymorphic relation
//Route::get('/user/photos', function(){
//    $user = User::find(2);
//
//    foreach($user->photos as $photo){
//        return $photo->path;
//    }
//});

//Route::get('/post/{id}/photos', function($id) {
//    $post = Post::find($id);
//
//    foreach($post->photos as $photo){
//        echo $photo->path . "<br>";
//    }
//});

// Polymorphic relation - inverse
//Route::get('/photo/{id}/post', function($id) {
//    $photo = Photo::findOrFail($id);
//
//    return $photo->imageable;
//});

// Polymorphic relation - many to many
Route::get('/post/tag', function() {
    $post = Post::find(1);

    foreach($post->tags as $tag){
        echo $tag->name;
    }
});

Route::get('/tag/post', function() {
    $tag = Tag::find(2);

    foreach($tag->posts as $post){
        echo $post->title;
    }
});
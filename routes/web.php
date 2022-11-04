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
    return view('home',[
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "nama" => "Theodore",
        "email" => "th@mail.com"
    ]);
});

Route::get('/blog', function () {
    $blog_posts = [
        [
            "title" => "Title",
            "slug" => "linked-title",
            "author" => "Author",
            "body" => "Post"
        ]
    ];
    return view('posts', [
        "title" => "Posts",
        "posts" => $blog_posts
    ]);
});

$new_post = [];
foreach($blog_posts as $post) {
    if($post["slug"] === $slug) {
        $new_post = $post;
    }
}

// single post
Route::get('/posts/{slug}', function ($slug) {
    return view('post',[
        "title" => "Single Post",
        // "post" => $new_post
    ]);
});

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
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Ibnu Rusdianto",
        "email" => "ibnu.rusdianto55@gmail.com",
        "image" => "gambar.jpg"
    ]);
});



Route::get('/blog', function () {
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Ibnu Rusdianto",
            "body" => "Lorem ipsum dolor sit amet consectetur, 
            adipisicing elit. Qui a perspiciatis non hic odit quod odio 
            quibusdam fuga nobis vero deserunt, reiciendis eius earum aliquam inventore illum quasi id iure!"
        ],
    
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Heru Rusdianto",
            "body" => "Lorem ipsum dolor sit amet consectetur, 
            adipisicing elit. Qui a perspiciatis non hic odit quod odio 
            quibusdam fuga nobis vero deserunt, reiciendis eius earum aliquam inventore illum quasi id iure!"
        ]
    ];
    return view('posts', [
        "title" => "Posts",
        "posts" => $blog_posts
    ]);
});

// Route::get('/', function () {
//     return 'Halaman Home';
// });

// Route::get('/about', function () {
//     return 'Halaman About';
// });

// Route::get('/blog', function () {
//     return 'Halaman Blog';
// });

// halaman single post
Route::get('posts/{slug}', function ($slug) {
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Ibnu Rusdianto",
            "body" => "Lorem ipsum dolor sit amet consectetur, 
            adipisicing elit. Qui a perspiciatis non hic odit quod odio 
            quibusdam fuga nobis vero deserunt, reiciendis eius earum aliquam inventore illum quasi id iure!"
        ],
    
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Heru Rusdianto",
            "body" => "Lorem ipsum dolor sit amet consectetur, 
            adipisicing elit. Qui a perspiciatis non hic odit quod odio 
            quibusdam fuga nobis vero deserunt, reiciendis eius earum aliquam inventore illum quasi id iure!"
        ]
    ];

    $new_post = [];
    foreach($blog_posts as $post){
        if($post["slug"] === $slug){
            $new_post = $post;
        }
    }

    return view('post', [
        "title" => "Single Post",
        "post" => $new_post
    ]);
});

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
        "name" => "Catur Saputro",
        "email" => "catur.ccd@gmail.com",
        "image" => "LegoProfil.jpg"
    ]);
});

Route::get('/blog', function () {
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Catur Saputro",
            "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Corporis, enim. Facere modi totam dolorem iusto. Explicabo fugit nobis distinctio modi, voluptatibus nesciunt molestiae, dolor in asperiores quia repellendus necessitatibus cum."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Bushido",
            "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ratione illo ea quam qui esse adipisci quibusdam odio possimus tempora molestias. Dicta aspernatur tempore quod animi laudantium praesentium ut incidunt corporis veniam accusantium officia officiis delectus, ratione nulla maxime placeat quia. Sit, nobis ea reprehenderit illum blanditiis commodi sint et ut odio cum modi quas nihil dolorem repudiandae. Laborum porro tempora, nemo debitis culpa suscipit eius excepturi libero ad explicabo esse. Velit quos rerum distinctio tempore architecto eos maiores beatae, odio consequatur, assumenda voluptates dolore facere laboriosam sed. Voluptates, neque vitae!"
        ]
    ];

    return view('posts', [
        "title" => "Posts",
        "posts" => $blog_posts
    ]);
});

// Halaman single post
Route::get('posts/{slug}', function ($slug) {
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Catur Saputro",
            "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Corporis, enim. Facere modi totam dolorem iusto. Explicabo fugit nobis distinctio modi, voluptatibus nesciunt molestiae, dolor in asperiores quia repellendus necessitatibus cum."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Bushido",
            "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ratione illo ea quam qui esse adipisci quibusdam odio possimus tempora molestias. Dicta aspernatur tempore quod animi laudantium praesentium ut incidunt corporis veniam accusantium officia officiis delectus, ratione nulla maxime placeat quia. Sit, nobis ea reprehenderit illum blanditiis commodi sint et ut odio cum modi quas nihil dolorem repudiandae. Laborum porro tempora, nemo debitis culpa suscipit eius excepturi libero ad explicabo esse. Velit quos rerum distinctio tempore architecto eos maiores beatae, odio consequatur, assumenda voluptates dolore facere laboriosam sed. Voluptates, neque vitae!"
        ]
    ];

    foreach($blog_posts as $post) {
        if($post["slug"] === $slug) {
            $new_post = $post;
        }
    }

    return view('post', [
        "title" => "Single Post",
        "post" => $new_post
    ]);    
});
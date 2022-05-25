<?php

namespace App\Models;

class Post 
{
    private static $blog_posts = [
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

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}

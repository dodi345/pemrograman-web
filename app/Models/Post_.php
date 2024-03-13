<?php

namespace App\Models;


class Post
{
    private static $blog_post = [
        [
            "title" => "Judul Blog Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Dodi Sopandi",
            "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Labore similique omnis facilis eligendi, voluptates ducimus rerum eveniet"
        ],
        [
            "title" => "Judul Blog Kedua",
            "slug" => "judul-post-kedua",
            "author" => " Sopandi",
            "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Labore similique omnis facilis eligendi, voluptates ducimus rerum eveniet, pariatur voluptas saepe tenetur voluptatibus ipsam cumque aut fuga deleniti quisquam quis sed aspernatur numquam provident corrupti maiores"
        ],
    ];

    public static function all()
    {
        return collect(self::$blog_post);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}

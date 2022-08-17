<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
        [
            "title" => "Post Pertama",
            "slug" => "post-pertama",
            "author" => "Ahmad ZS",
            "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consequatur aliquam doloremque sequi, quaerat, a possimus enim nihil iste beatae impedit at delectus maiores ipsam officiis fugiat libero accusantium expedita dolores."
        ],
        [
            "title" => "Post Kedua",
            "slug" => "post-kedua",
            "author" => "Adisti Madella",
            "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consequatur aliquam doloremque sequi, quaerat, a possimus enim nihil iste beatae impedit at delectus maiores ipsam officiis fugiat libero accusantium expedita dolores."
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

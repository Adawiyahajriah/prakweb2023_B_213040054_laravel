<?php

namespace App\Models;


class Post
{
    private static $blog_post = [
        [
            "title" => "Judul post pertama",
            "slug" => "judul-post-pertama",
            "author" => "Adawiyahajr",
            "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Reiciendis hic, accusantium quaerat blanditiis delectus possimus ipsum voluptates eligendi, ad fugiat mollitia omnis rerum labore perspiciatis culpa distinctio molestiae voluptatum illum facilis. Vitae blanditiis a deleniti iusto earum obcaecati laudantium impedit. Corrupti qui ad rem delectus velit deserunt blanditiis id libero ex ab error, laborum soluta vitae earum labore corporis hic molestias neque veritatis unde aliquam. Nostrum, veritatis? Ea nulla ipsum similique laudantium, sit, modi repellat aperiam quisquam, earum facilis illum!"
        ],
        [
            "title" => "Judul post kedua",
            "slug" => "judul-post-kedua",
            "author" => "putri legiani",
            "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Reiciendis hic, accusantium quaerat blanditiis delectus possimus ipsum voluptates eligendi, ad fugiat mollitia omnis rerum labore perspiciatis culpa distinctio molestiae voluptatum illum facilis. Vitae blanditiis a deleniti iusto earum obcaecati laudantium impedit. Corrupti qui ad rem delectus velit deserunt blanditiis id libero ex ab error, laborum soluta vitae earum labore corporis hic molestias neque veritatis unde aliquam. Nostrum, veritatis? Ea nulla ipsum similique laudantium, sit, modi repellat aperiam quisquam, earum facilis illum!"
        ]
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
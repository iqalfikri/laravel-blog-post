<?php

namespace App\Models;


class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Muhammad Fikri Haikal",
            "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolore quos cupiditate dignissimos labore incidunt iure quaerat quod nobis animi at molestias ipsam nesciunt maxime harum obcaecati ipsum veritatis vero sit soluta tenetur voluptas, mollitia pariatur. Nobis voluptate accusantium quasi tempore dignissimos libero aliquam minima ratione nam quae ex, nihil veritatis officiis fugit suscipit a, soluta repellat qui ipsam deleniti, perspiciatis est alias? Cum nemo illo quas distinctio adipisci tempora dignissimos quo eveniet nesciunt aliquam. Commodi debitis eum eveniet provident reiciendis?"
        ],
        [
            "title" => "Judul Post Kedua",
           "slug" => "judul-post-kedua",
            "author" => "Intan Nurridha Br Ginting",
            "body" => "orem, ipsum dolor sit amet consectetur adipisicing elit. Dignissimos dolorem placeat iste saepe ipsam necessitatibus molestiae beatae nesciunt nihil maxime laborum, officia magni perspiciatis in ea ullam assumenda fugiat voluptatibus laboriosam labore quis officiis totam illum! Nulla in non blanditiis repudiandae id illum rem neque cupiditate distinctio, quisquam voluptatem dolorum architecto corporis consequuntur quibusdam quidem aut voluptatibus voluptate sit! Modi, culpa minima quasi dolorum expedita alias quas officia tenetur temporibus nesciunt animi nobis iste quidem dolorem accusantium quibusdam molestiae iusto at sint voluptas veniam autem similique dicta ipsam! Deleniti alias atque corrupti nostrum unde minima magni velit sed obcaecati impedit."
        ]
    ];

    public static function all(){
        return collect( self::$blog_posts);
    }

    public static function find($slug){
        $posts = static::all();

        // $post = [];
        // foreach ($posts as $p) {
        //     if ($p["slug"] === $slug) {
        //         $post = $p;
        //     }
        // }

        return $posts->firstwhere('slug',$slug);
    }
}

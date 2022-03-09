<?php

namespace App\Models;


class post
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "post-pertama",
            "author" => "Surya",
            "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quasi, vero! Amet aspernatur architecto nostrum, totam quia aliquam fuga alias molestias, eaque sed hic consectetur illo, a quis doloremque odit aperiam!" 
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "post-kedua",
            "author" => "Maris",
            "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eos, nobis quo error iure officia nisi aliquid sequi rerum quam fugiat delectus omnis aliquam voluptates explicabo id esse exercitationem non vero ipsam perspiciatis corrupti soluta sint consequuntur? Ipsa officiis ratione facilis."
        ]
        ];

        public static function all(){
            return collect(self::$blog_posts);
        }

        public static function find($slug){
            $posts = static::all();
            return $posts->firstWhere('slug', $slug);
        }
           
}

<?php

namespace App\classes;

class Blog
{
protected $blogs;
public function getAllBlog(){
    return[
        0=>[
         'title' =>'A new Blog',
         'description' => 'Blog Description',
         'author' => 'Hasib',
         'image' =>'s9.jpg',
        ],
        1=>[
            'title' =>'Another Blog',
            'description' => 'Blog Description',
            'author' => 'Fahim',
            'image' =>'s10.jpg',
        ],
        2=>[
            'title' =>'About Me',
            'description' => 'Blog Description',
            'author' => 'Fahim',
            'image' =>'s11.jpg',
        ],
    ];
}
}
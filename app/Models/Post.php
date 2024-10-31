<?php 

namespace App\Models;

use Illuminate\Support\Arr;

class Post
{
    public static function all()
    {
        return [
            [
                'id' => 1,
                'slug'=> 'lorem-artikel-1',
                'title' => 'Lorem Artikel 1',
                'author' => 'Zahra Nisaa',
                'body' => 'Lorem ipsum dolor sit amet consectetur, 
                adipisicing elit. Id porro odio laudantium. 
                Sed maxime, ipsum nisi delectus repudiandae ullam eum fuga. 
                Error molestias ut voluptate sit praesentium beatae officiis animi.'
            ],
            [
                'id' => 2,
                'slug'=> 'lorem-artikel-2',
                'title' => 'Lorem Artikel 2',
                'author' => 'Zahra Nisaa',
                'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Enim, soluta nemo modi magni amet sunt, est libero optio voluptatibus ex aliquam. 
                Illo nostrum libero sequi cupiditate quaerat, laboriosam impedit necessitatibus?'
            ]
            ];
    }

    public static function find($slug) : array
    {
        // return Arr::first(static::all(), function ($post) use($slug) {
        //     return $post['slug'] == $slug;
        // });

        // return Arr::first(static::all(), fn($post)=>$post['slug']==$slug);

        $post=Arr::first(static::all(), fn($post)=>$post['slug']==$slug);

        if(! $post){
            abort(404);
        }

        return $post;
    }
}

?>
<?php
namespace App\Models;

use Illuminate\Support\Arr;

class Post
{
    public static function all()
    {
        return collect([
            [
                'id' => 1,
                'title' => 'Judul Artikel 1',
                'author' => 'Sandhika Galih',
                'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad autem laudantium dolorem atque iste iure ab adipisci dicta veniam! Commodi excepturi suscipit odio quibusdam sint fugit facilis in nemo dolores!',
                'date' => '1 Januari 2024'
            ],
            [
                'id' => 2,
                'title' => 'Judul Artikel 2',
                'author' => 'Sandhika Galih',
                'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad autem laudantium dolorem atque iste iure ab adipisci dicta veniam! Commodi excepturi suscipit odio quibusdam sint fugit facilis in nemo dolores!',
                'date' => '2 Frebreri 2024'
            ],
        ])->map(function ($post) {
            return (object) $post;
        });
    }

    public static function find($id)
    {
        $post = static::all()->firstWhere('id', $id);
        if (!$post) {
            abort(404);
        }
        return $post;
    }
}
<?php

namespace App\Models;

class Genre
{
    private static $genre =
    [
        ['genre' => 'Comedy (Comedian)' ],
        ['genre' => 'Sci-Fi (Fiksi Ilmiah)'],
        ['genre' => 'Horror (Horor)'],
        ['genre' => 'Action (Aksi)'],
        ['genre' => 'Drama (Drama)'],
        ['genre' => 'Romance (Romance)'],
    ];

    public static function all()
    {
        return self::$genre;
    }
}

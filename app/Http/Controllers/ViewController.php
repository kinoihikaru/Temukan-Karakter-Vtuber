<?php

namespace App\Http\Controllers;

use App\Models\Bigfive;
use App\Models\Genre;


class ViewController extends Controller
{

    public function home(){
        return view('home');
    }

    public function test(){

        $bigfive = Bigfive::all();

        $genre_p = Genre::all();

        return view('test', compact("bigfive", "genre_p"));
    }

}

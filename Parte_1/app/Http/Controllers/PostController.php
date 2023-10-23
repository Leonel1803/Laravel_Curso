<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Postm;

class PostController extends Controller{
    public function __invoke(){
        $post = [
            ['title' => 'First post (blog3)'],
            ['title' => 'Second post (blog3)'],
            ['title' => 'Third post (blog3)'],
            ['title' => 'Fourth post (blog3)'],
        ];

        return view('blog3', ['posts' => $post]);
    }

    public function index(){
        $post = [
            ['title' => 'First post (blog4)'],
            ['title' => 'Second post (blog4)'],
            ['title' => 'Third post (blog4)'],
            ['title' => 'Fourth post (blog4)'],
        ];

        return view('blog4', ['posts' => $post]);
    }

    public function index2(){
        $post = DB::table('posts')->get();

        return view('blog5', ['posts' => $post]);
    }

    public function index3(){
        $post = DB::table('postm')->get();

        return view('blog6', ['posts' => $post]);
    }

    public function index4(){
        $post = Postm::get();

        //$post->save(); esta linea nos permite guardar los cambios hechos en memoria dentro ya de la tabla referenciada en la base de datos

        return view('blog7', ['posts' => $post]);
    }
}

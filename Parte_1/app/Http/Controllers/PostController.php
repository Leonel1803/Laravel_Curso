<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Post;
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
        //$post = DB::table('posts')->get(); Forma sin eloquent
        $post = Post::get();


        return view('blog5', ['posts' => $post]);
    }

    public function index3(){
        $post = DB::table('postm')->get();

        return view('blog6', ['posts' => $post]);
    }

    public function index4(){
        $mofifyPost = Postm::find(1); //Buscamos una fila por su ID
        $mofifyPost->title = "He modifiado este titulo";
        //Modificamos los datos de una fila ya existente

        //$modifyPost->delete(); esta linea es para eliminar la fila seleccionada
        $mofifyPost->save(); //esta linea nos permite guardar los cambios hechos en memoria dentro ya de la tabla referenciada en la base de datos

        //$createPost = new Postm;
       // $createPost->title = "He creado un nuevo título";
        //$createPost->body = "Este es un nuevo cuerpo";
        //Creamos una nueva fila junto con otros datos

        //$createPost->save();//esta linea nos permite guardar los cambios hechos en memoria dentro ya de la tabla referenciada en la base de datos

        $post = Postm::get();

        return view('blog7', ['posts' => $post]);
    }

    public function show(Postm $post){ //Poninedo Postm como clase del parámetro, automáticamente se ahará el find
        //return Postm::findOrFail($post);

        //return $post;
        return view('postms.show', ['post' => $post]);
    }

    public function create(){
        return view('postms.create');
    }

    public function store(Request $request){
        //return $request->input('title');
        $request->validate([
            'title' => ['required'], //Aquí está indicando que no se puede pasar la variable 'title' sin ningún contenido
            'body' => ['required']
        ], [
            'title.required' => 'El campo de título es obligatorio', //Aquí estamos personalizando los mensajes de error dependiendo del error que salga, en este caso el de required
            'body.required' => 'El campo de body es obligatorio'
        ]);

        $post = new Postm;
        $post->title =  $request->input('title');
        $post->body =  $request->input('body');
        $post->save();

        session()->flash('status', 'Post creado'); //Guarda info en la variable de sesión llamada "status"

        return redirect()->route('blog7');
    }

    public function edit(Postm $post){

        return view('postms.edit', ['post' => $post]);
    }
}

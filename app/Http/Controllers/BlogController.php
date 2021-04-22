<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Symfony\Contracts\Service\Attribute\Required;

class BlogController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('blog', compact(['posts']));
    }

    public function show($id)
    {
        $post = Post::find($id);
        return view('post', compact('post'));
    }

    public function tecnologiaIndex()
    {
        $postT = Post::where('genero', 'tecnologia')->get();
        return view('tecnologia', compact(['postT']));   
    }

    public function esportsIndex()
    {
        $postE = Post::where('genero', 'esports')->get();
        return view('esports', compact(['postE']));  
    }

    public function criptoIndex()
    {   
        $postC = Post::where('genero', 'tecnologia')->get();
        return view('cripto', compact(['postC']));  
    }
}

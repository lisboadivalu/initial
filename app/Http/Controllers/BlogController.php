<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Symfony\Contracts\Service\Attribute\Required;

class BlogController extends Controller
{
    public function index()
    {
        $posts = Post::all()->sortByDesc('created_at');
        return view('blog', compact(['posts']));
    }

    public function show($id)
    {
        $posts = Post::find($id);
        return view('post', compact('posts'));
    }

    public function tecnologia()
    {
        $postT = Post::all()->where('genero', 'tecnologia')->sortByDesc('created_at');
        return view('tecnologia', compact(['postT']));   
    }

    public function esports()
    {
        $postE = Post::all()->where('genero', 'esports')->sortByDesc('created_at');
        return view('esports', compact(['postE']));  
    }

    public function cripto()
    {   
        $postC = Post::all()->where('genero', 'tecnologia')->sortByDesc('created_at');
        return view('cripto', compact(['postC']));  
    }
}

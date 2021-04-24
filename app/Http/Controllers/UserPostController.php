<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Auth\Events\Validated;
use Illuminate\Queue\RedisQueue;

class UserPostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all()->where('user_id', auth()->user()->id);
        return view('pessoal', compact(['posts']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // nao sera usado
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());

        $name = $request->file('img')->getClientOriginalName(); 
        $request->file('img')->storeAs('images/', $name);

        $post = new Post();
        $post->titulo = $request->input('titulo');
        $post->texto = $request->input('materia');
        $post->img = $name;
        $post->genero = $request->input('genero');
        $post->user_id = $request->user()->id;
        $post->save();
        
        return redirect()->route('pessoal.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $posts = Post::find($id);
        return view('post', compact('posts'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $posts = Post::find($id);
        return view('post', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $name = $request->file('img')->getClientOriginalName();
        $request->file('img')->storeAs('images/', $name);

        $posts = Post::find($id);
        if(isset($posts)){        
            $posts->titulo = $request->input('titulo');
            $posts->texto = $request->input('materia');
            $posts->img = $name;
            $posts->titulo = $request->input('genero');
            $posts->save();
        }

        return redirect()->route('pessoal.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $del = Post::find($id);
        $del->delete();
        return redirect()->route('pessoal.index');
    }
}

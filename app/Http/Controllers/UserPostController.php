<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Auth\Events\Validated;

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
        $posts = Post::all();
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

        $request->validate([
            'titulo' => 'required',
            'texto' => 'required',
            'img' => 'required',
            'img_size' => 'required',
            'genero' => 'required'
        ]);

        $size = $request->file('img')->getSize();
        $name = $request->file('img')->getClientOriginalName();
        $request->file('img')->storeAs('public/images', $name);

        $post = new Post;
        $post->titulo = $request->input('titulo');
        $post->texto = $request->input('materia');
        $post->img = $name;
        $post->img_size = $size;
        $post->genero = $request->input('genero');
        $post->user_id = $request->user->id;
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
        $post = Post::find($id);
        return view('post', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);
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
        $size = $request->file('foto')->getSize();
        $name = $request->file('foto')->getClientOriginalName();
        $request->file('foto')->storeAs('public/images', $name);

        $post = Post::find($id);
        if(isset($post)){        
            $post->titulo = $request->input('titulo');
            $post->texto = $request->input('materia');
            $post->foto = $name;
            $post->foto = $size;
            $post->titulo = $request->input('genero');
            $post->save();
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
        return response('Ok', 200);
    }
}

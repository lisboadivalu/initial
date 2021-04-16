<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Contracts\Service\Attribute\Required;

class BlogController extends Controller
{
    public function index()
    {
        return view('blog');
    }

    public function tecnologiaIndex()
    {
        return view('tecnologia');   
    }

    public function esportsIndex()
    {
        return view('esports');  
    }

    public function criptoIndex()
    {
        return view('cripto');  
    }
}

@extends('layouts.app')
@section('content')
<div class="flex grid-cols-2 gap-72 ">
    <div class="flex items-center justify-center ">
        <div class="m-w-sm max-h-sm ml-5 mt-5 shadow-xl bg-gray-50 rounded-xl grid-cols-1 "> 
            <img class="mt-8 mx-15 object-cover object-center shadow-sm rounded-full" src="{{ asset('/img/profile2.jpeg')}}" alt="A Man">  
            <div class="text-center font-bold text-gray-900 h-50 w-50 mt-2 px-10 py-15"> 
                <p class="">Fábio Lisboa da Silva</p>
                <p class="mb-8">Desenvolvedor Web</p>
                <div class="relative">
                    <a href="{{asset('/docs/fabio_cv.pdf')}}" download class="shadow-sm bg-black hover:bg-gray-700 hover:text-white py-3 px-5 text-gray-100 text-sm font-bold rounded-3xl">Curriculum Vitae</a>
                </div>
            </div>
        </div>
    </div>

    <div class="max-w-xl max-h-xl rounded-xl bg-gray-50 shadow-xl my-5 mr-5 pb-5">
        <p class="text-4xl text-left font-bold text-gray-700 mt-8 ml-4">
        Olá,
        </p>
        <p class="text-lg text-left font-bold text-gray-700 mt-2 mx-4">
        meu nome é Fábio Lisboa, sou Desenvolvedor Web back-end. Nasci no Rio de Janeiro e moro no município de Rio das Ostras, Região dos Lagos. 
        Amante de Esportes, Tecnologia e Games. Se quiser saber mais detalhes, dá uma olhada no meu <a class=" hover:underline hover:text-blue-500" href="https://www.linkedin.com/in/f%C3%A1bio-lisboa-b86027120/">Linkedin</a>  
        </p>
        <p class="text-lg text-center font-bold text-gray-700 mt-10 just">
            Tecnologias 
        </p>
        <div class="grid grid-cols-4 gap-0 justify-items-center ">
            <img src="{{ asset('/img/laravel-ar21.svg') }}" alt="Laravel">
            <img src="{{ asset('/img/tailwindcss-ar21.svg') }}" alt="Tailwind">
            <img src="{{ asset('/img/github-ar21.svg') }}" alt="Gitkraken">
            <img src="{{ asset('/img/javascript-icon.svg') }}" alt="Javascrip">
        </div>  
    </div>    
</div>
@endsection

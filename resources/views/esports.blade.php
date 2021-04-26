@extends('layouts.app')

@section('content')
    
<div class="h-96" >
	<img src="{{asset('img/esports.png')}}" alt="" class="w-full h-full object-cover object-center">
</div>

<div class="pl-3/12 ">
	<div class="mt-24 max-w-2xl py-10 bg-gray-100 rounded-xl shadow-md text-center text-3xl font-bold">
			<a href="{{route('tecnologia')}}" class="hover:text-blue-800 px-16 my-15">Tecnologia</a>
			<a href="{{route('cripto')}}" class="hover:text-blue-800 px-16 my-15">Criptomoedas</a>	
	</div>
</div>

<div class="grid grid-cols-1 gap-20  justify-items-center mt-20 pb-16">
    @foreach ($postE as $p)
    <div class="max-h-2xl max-w-2xl rounded-xl shadow-md mt-10 text-center">
        <img src="{{asset('storage/images/' . $p->img)}}" alt="" class="w-96 h-80 object-cover object-center rounded-t-lg">
        <div class="my-6">
			<a href="{{route('blog.show', $p->id)}}" class="font-bold capitalize">{{$p->titulo}}</a> - <span class="font-bold">{{$p->created_at->format('d/m/Y')}}</span>
			<br>
			<div class="mt-4">
				<p class="font-bold capitalize">{{$p->user->name}}</p>
			</div>	
		</div>
	</div>
	@endforeach
<div>


@endsection
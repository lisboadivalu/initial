
@extends('layouts.app')

@section('content')

<div class="carousel relative shadow-2xl  bg-white">
	<div class="carousel-inner relative overflow-hidden w-full" data-slick='{"slideToShow": 3, "slideToScroll": 1, "autoplaySpeed": 2000}'>
	  <!--Slide 1 Tecnologia-->
		<input class="carousel-open" type="radio" id="carousel-1" name="carousel" aria-hidden="true" hidden="" checked="checked">
		<div class="carousel-item absolute opacity-0 h-96">
			<img src="{{asset('img/programming_topics.jpg')}}" alt="" class="w-full h-full object-cover object-center">
		</div>
		<label for="carousel-3" class="prev control-1 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 left-0 my-auto">‹</label>
		<label for="carousel-2" class="next control-1 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 right-0 my-auto">›</label>
		
		<!--Slide 2 eSports-->
		<input class="carousel-open" type="radio" id="carousel-2" name="carousel" aria-hidden="true" hidden="">
		<div class="carousel-item absolute opacity-0 h-96">
			<img src="{{asset('img/esports.png')}}" alt="" class="w-full h-full object-cover object-center">
		</div>
		<label for="carousel-1" class="prev control-2 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 left-0 my-auto">‹</label>
		<label for="carousel-3" class="next control-2 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 right-0 my-auto">›</label> 
		
		<!--Slide 3 Criptomoedas-->
		<input class="carousel-open" type="radio" id="carousel-3" name="carousel" aria-hidden="true" hidden="">
		<div class="carousel-item absolute opacity-0 h-96">
			<img src="{{asset('img/cripto.jpg')}}" alt="" class="w-full h-full object-cover object-center">
		</div>
		<label for="carousel-2" class="prev control-3 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 left-0 my-auto">‹</label>
		<label for="carousel-1" class="next control-3 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 right-0 my-auto">›</label>

		<!-- indicador do slider-->
		<ol class="carousel-indicators">
			<li class="inline-block mr-3">
				<label for="carousel-1" class="carousel-bullet cursor-pointer block text-4xl text-white hover:text-blue-700">•</label>
			</li>
			<li class="inline-block mr-3">
				<label for="carousel-2" class="carousel-bullet cursor-pointer block text-4xl text-white hover:text-blue-700">•</label>
			</li>
			<li class="inline-block mr-3">
				<label for="carousel-3" class="carousel-bullet cursor-pointer block text-4xl text-white hover:text-blue-700">•</label>
			</li>
		</ol>
		
	</div>
</div>

	<div class="px-10">
		<div class="mt-24 max-w-7xl py-10 bg-gray-100 rounded-xl shadow-md text-center text-3xl font-bold">
				<a href="{{route('tecnologia')}}" class="hover:text-blue-800 px-16 my-15">Tecnologia</a>
				<a href="{{route('esports')}}" class="hover:text-blue-800 px-16 my-15">Esports</a>
				<a href="{{route('cripto')}}" class="hover:text-blue-800 px-16 my-15">Criptomoedas</a>	
		</div>
	</div>

	<!-- Secao dos posts mais recentes -->
	@foreach ($posts as $p)
	<div class="grid grid-cols-1 gap-2 justify-items-center mt-16 pb-16">
    	<div class="max-h-xs w-96  rounded-xl shadow-md mt-10 text-center">
    	    <img src="{{asset('storage/images/' . $p->img)}}" alt="" class="w-96 h-80 object-cover object-center rounded-t-lg">
    	    <div class="my-6">
				<a href="{{ route('blog.show', $p['id']) }}" class="font-bold capitalize">{{$p->titulo}}</a> - <span class="font-bold">{{$p->created_at->format('d/m/Y')}}</span>
				<br>
				<div class="mt-4">
					<span class="capitalize hover:font-bold">{{$p->user->name}}</span>
				</div>	
			</div>
		</div>
	@endforeach
	</div>

@endsection
@extends('layouts.app')

@section('content')
    
<div class="grid grid-cols-1 gap-20  justify-items-center mt-20 pb-16">
    <!-- Secao dos posts mais recentes -->
    <div class="max-h-2xl max-w-2xl rounded-xl shadow-md mt-10 text-center">
        <img src="{{asset('img/programming_topics.jpg')}}" alt="" class="max-w-full max-h-full object-cover object-center rounded-t-lg">
        <div class="my-6">
			<!-- colocar rota da materia -->
			<a href="#" class="font-bold">Titulo do Post</a> - <span class="font-bold">Data</span>
			<br>
			<div class="mt-4">
				<a href="#" class="hover:font-bold">Usuario</a>
			</div>	
		</div>
	</div>
<div>



@endsection
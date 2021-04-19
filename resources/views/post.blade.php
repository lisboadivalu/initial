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
            <p>
            <!-- -->
            Texto da Materia
            </p>
			<div class="mt-4">
				<a href="#" class="hover:font-bold">Usuario</a>
			</div>
            <button class="py-2 px-4 bg-black font-bold rounded-md text-white mt-4" id="atualizar-btn">Atualizar</button>
		</div>
	</div>
<div>

    <div class="bg-black bg-opacity-50 h-full absolute inset-0 hidden justify-center items-center" id="modal-form">
        <div class="bg-gray-200 rounded-lg py-2 px-4">
            <form action="" method="POST" class="w-1/3  h-5/6 bg-gray-200 space-y-3 mx-10 font-bold" enctype="multipart/form-data">
                <div class="">
                    <h1 class="text-center text-2xl ">Editar Post</h1>
                </div>
                <div>
                    <label for="titulo">Titulo</label>
                    <input type="text" name="titulo" class="form-input border-2 border-black border-opacity-100 mt-2">
                </div>
                <div class="mt-2">
                    <label for="foto">Foto</label>
                    <input type="file" name="img" class="mt-2">
                </div>
                <div class="mt-2">
                    <label for="materia">Materia</label>
                    <textarea 
                        class="mt-2 border-black boder-opacity-100 border-2 form-textarea resize-none h-36 w-80 " 
                        name="materia" id="" cols="30" rows="10">
                    </textarea>
                </div>
                <div class="mt-2 mb-6">
                    <label for="genero">Genero da Materia</label>
                    <select name="generto" id="" class="form-select mt-2">
                        <option value="">Escolha...</option>
                        <option value="">Tecnologia</option>
                        <option value="">Esports</option>
                        <option value="">Criptomoedas</option>
                    </select>
                </div>
                <div class=" flex justify-end items-end ">
                <button type="submit" id="postar-btn" class="px-4 py-2 bg-black hover:bg-gray-700 text-white font-bold rounded-md ">
                    Atualizar
                </button>
                <button id="cancelar-btn" class="px-4 py-2 ml-4 bg-red-700 hover:bg-red-900 text-white font-bold rounded-md ">
                    Cancelar
                </button>

                </div>
            </form>
        </div>
    </div>

    <script>
        window.addEventListener('DOMContentLoaded', () => {
            const cancelar = document.querySelector('#cancelar-btn')
            const novo = document.querySelector('#atualizar-btn')
            const form = document.querySelector('#modal-form')

            const toggleModal = () => {
                form.classList.toggle('hidden')
                form.classList.toggle('flex')
            }

            novo.addEventListener('click', toggleModal)
        })

        var closemodal = document.querySelector('#cancelar-btn')
        for (var i = 0; i < closemodal.length; i++) {
          closemodal[i].addEventListener('click', toggleModal)
        }
    </script>        

@endsection
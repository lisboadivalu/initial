@extends('layouts.app')

@section('content')
    
    <div class="flex justify-center py-10">
    <!-- menu (talvez dropdown) -->
        <button id="novo-btn" class="px-4 py-2 rounded-md bg-black shadow-md text-xl text-white font-bold">
            Novo Post
        </button>
    </div>

    <div class="bg-black bg-opacity-50 h-full absolute inset-0 hidden justify-center items-center" id="modal-form">
        <div class="bg-gray-200 rounded-lg py-2 px-4">
            <form action="" class="w-1/3  h-5/6 bg-gray-200 space-y-3 mx-10 font-bold" enctype="multipart/form-data">
                <div class="">
                    <h1 class="text-center text-2xl ">Novo Post</h1>
                </div>
                <div>
                    <label for="titulo">Titulo</label>
                    <input type="text" name="titulo" class="form-input border-2 border-black border-opacity-100 mt-2">
                </div>
                <div class="mt-2">
                    <label for="foto">Foto</label>
                    <input type="file" name="foto" class="mt-2">
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
                    Postar
                </button>
                <button type="submit" id="cancelar-btn" class="px-4 py-2 ml-4 bg-red-700 hover:bg-red-900 text-white font-bold rounded-md ">
                    Cancelar
                </button>

                </div>
            </form>
        </div>
    </div>

    <div class="grid grid-cols-3 gap-20 justify-items-center mx-14 pb-16">
        <!-- Secao dos posts mais recentes -->
        <div class="max-h-sm max-w-sm rounded-xl shadow-md mt-10 text-center">
            <img src="{{asset('img/programming_topics.jpg')}}" alt="" class="max-w-full max-h-full object-cover object-center rounded-t-lg">
            <div class="my-6">
                <!-- colocar rota da materia -->
                <a href="#" class="font-bold">Titulo do Post</a> - <span>Data</span>
                <br>
                <!-- Tecnologia, Esports ou Criptomoedas -->
                <div class="mt-4">
                    <span>Genero</span>
                </div>    
                <form action="#" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="mt-6 py-4 px-4 shadow-md bg-red-600 hover:bg-red-900 font-bold text-white rounded-md">
                        Deletar
                    </button>
                </form>
            </div>
        </div>



        <div class="max-h-sm max-w-sm rounded-xl shadow-md mt-10 text-center">
            <img src="{{asset('img/programming_topics.jpg')}}" alt="" class="max-w-full max-h-full object-cover object-center rounded-t-lg">
            <div class="my-6">
                <!-- colocar rota da materia -->
                <a href="#" class="font-bold">Titulo do Post</a> - <span>Data</span>
                <br>
                <!-- Tecnologia, Esports ou Criptomoedas -->
                <div class="mt-4">
                    <span>Genero</span>
                </div>    
                <form action="#" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="mt-6 py-4 px-4 bg-red-600 hover:bg-red-900 font-bold text-white rounded-md">
                        Deletar
                    </button>
                </form>
            </div>
        </div>
        <div class="max-h-sm max-w-sm rounded-xl shadow-md mt-10 text-center">
            <img src="{{asset('img/programming_topics.jpg')}}" alt="" class="max-w-full max-h-full object-cover object-center rounded-t-lg">
            <div class="my-6">
                <!-- colocar rota da materia -->
                <a href="#" class="font-bold">Titulo do Post</a> - <span>Data</span>
                <br>
                <!-- Tecnologia, Esports ou Criptomoedas -->
                <div class="mt-4">
                    <span>Genero</span>
                </div>    
                <form action="#" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="mt-6 py-4 px-4 bg-red-600 hover:bg-red-900 font-bold text-white rounded-md">
                        Deletar
                    </button>
                </form>
            </div>
        </div>
    <div>

    <script>
        window.addEventListener('DOMContentLoaded', () => {
            const cancelar = document.querySelector('#cancelar-btn')
            const novo = document.querySelector('#novo-btn')
            const form = document.querySelector('#modal-form')

            const toggleModal = () => {
                form.classList.toggle('hidden')
                form.classList.toggle('flex')
            }

            novo.addEventListener('click', toggleModal)
        })
    </script>        
      
@endsection
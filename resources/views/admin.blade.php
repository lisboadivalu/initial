@extends('layouts.app')
@section('body')
    
<div class="flex justify-center py-10">
    <button id="novo-btn" class="px-4 py-2 rounded-md bg-black shadow-md text-xl text-white font-bold">
        Novo Post
    </button>
</div>

<div class="bg-black bg-opacity-50 h-screen absolute inset-0 hidden justify-center items-center" id="modal-form">
    <div class="bg-gray-200 rounded-lg py-2 px-10">
        <form action="{{ route('pessoal.store') }}" method="POST" class="w-full h-5/6 m-0 bg-gray-200 space-y-3 font-bold" enctype="multipart/form-data">
            @csrf
            <div class="">
                <h1 class="text-center text-2xl">Novo Post</h1>
            </div>
            <div>
                <label for="titulo">Titulo</label>
                <br>
                <input type="text" name="titulo" class="form-input border-2 border-black border-opacity-100 mt-2">
            </div>
            <div class="mt-2">
                <label for="foto">Foto</label>
                <br>
                <input type="file" name="img" class="mt-2">
            </div>
            <div class="mt-2">
                <label for="materia">Materia</label>
                <br>
                <textarea 
                    class="mt-2 border-black boder-opacity-100 border-2 form-textarea resize-none h-36 w-80 " 
                    name="materia" cols="30" rows="10">
                </textarea>
            </div>
            <div class="mt-2 mb-6">
                <label for="genero">Genero da Materia</label>
                <br>
                <select name="genero" id="" class="form-select mt-2">
                    <option selected>Escolha...</option>
                    <option class="capitalize" value="tecnologia">tecnologia</option>
                    <option class="capitalize" value="esports">esports</option>
                    <option class="capitalize" value="cripto">criptomoedas</option>
                </select>
            </div>
        
            <div class=" flex justify-center items-center">
                <button type="submit" id="postar-btn" class="px-4 py-2 bg-black hover:bg-gray-700 text-white font-bold rounded-md ">
                    Postar
                </button>
                <button type="button" id="cancelar-btn" class="px-4 py-2 ml-4 bg-red-700 hover:bg-red-900 text-white font-bold rounded-md ">
                    Cancelar
                </button>
            </div>
        </form>
    </div>
</div>



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
        cancelar.addEventListener('click', toggleModal)
    })
</script>        
@endsection

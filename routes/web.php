<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\UserPostController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
})->name('index');


Auth::routes();

Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/blog', [BlogController::class, 'index'])->name('blog');

Route::get('/tecnologia', [BlogController::class, 'tecnologiaIndex'])->name('tecnologia');

Route::get('/esports', [BlogController::class, 'esportsIndex'])->name('esports');

Route::get('/criptomoedas', [BlogController::class, 'criptoIndex'])->name('cripto');

/* Route::get('/pessoal', function(){
    return view('pessoal');
}); */

Route::resource('/pessoal', UserPostController::class);

Route::get('/post', function(){
    return view('post');
});

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


Route::get('/blog', [BlogController::class, 'index'])->name('blog');
Route::get('/blog/{blog}', [BlogController::class, 'show'])->name('blog.show');

Route::get('/tecnologia', [BlogController::class, 'tecnologiaIndex'])->name('tecnologia');

Route::get('/esports', [BlogController::class, 'esportsIndex'])->name('esports');

Route::get('/criptomoedas', [BlogController::class, 'criptoIndex'])->name('cripto');

Route::resource('/pessoal', UserPostController::class);

Route::get('/post', [BlogController::class, 'show'])->name('post.show');

Route::post('/post', function(){
    return view('post');
});

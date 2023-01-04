<?php

use App\Http\Controllers\TareaControler;
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
    return view('welcome');
});

Route::get('tarea/{tarea}/ver',[TareaControler::class,'show'])->name('tarea.show');
Route::get('tarea/registrar',[TareaControler::class,'create'])->name('tarea.create');
Route::post('tarea/guardar', [TareaControler::class,'store'])->name('tarea.store');
Route::get('tarea/listar', [TareaControler::class,'index'])->name('tarea.index');
Route::get('tarea/{tarea}/edit/', [TareaControler::class,'edit'])->name('tarea.edit');
Route::put('tarea/{tarea}/actualizar',[TareaControler::class,'update'])->name('tarea.update');
Route::delete('tarea/{tarea}/eliminar',[TareaControler::class,'destroy'])->name('tarea.destroy');

//Route::resource('tarea',TareaControler::class); con este resource no tnego que poner las routas de arriba

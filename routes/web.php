<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});
//Route::get('crear_usuario',[UserController::class,'prueba']);


Route::get('users',[UserController::class,'index'])->name('users.index');
Route::get('users/create',[UserController::class,'create'])->name('users.create');
Route::post('users',[UserController::class,'store'])->name('users.store');
Route::get('users/{id}',[UserController::class,'show'])->name('users.show');
Route::get('users/{id}/edit',[UserController::class,'edit'])->name('users.edit');
Route::put('users/{id}',[UserController::class,'update'])->name('users.update');
//Para la clase delete utilice un formulario en index, donde se pasa el id de la persona que se quiere eliminar
//La ruta para borrar es /user, no logre pasar los parametros de manera dinamica desde el formulario :(
//Por lo demas espero este bien
//Ahhh... Tambien tendo mi funcion prueba porque me olvide como crear usuarios en la db xD
Route::delete('/users', [UserController::class, 'destroy'])->name('users.delete');

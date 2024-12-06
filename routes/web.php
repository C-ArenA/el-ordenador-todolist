<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});
//Route::get('crear_usuario',[UserController::class,'prueba']);


Route::get('user',[UserController::class,'index']);
Route::get('user/create',[UserController::class,'create']);
Route::post('user',[UserController::class,'store'])->name('user.create');
Route::get('user/{id}',[UserController::class,'show']);
Route::get('user/{id}/edit',[UserController::class,'edit']);
Route::put('user/{id}',[UserController::class,'update'])->name('user.update');
//Para la clase delete utilice un formulario en index, donde se pasa el id de la persona que se quiere eliminar
//La ruta para borrar es /user, no logre pasar los parametros de manera dinamica desde el formulario :(
//Por lo demas espero este bien 
//Ahhh... Tambien tendo mi funcion prueba porque me olvide como crear usuarios en la db xD
Route::delete('/user', [UserController::class, 'destroy'])->name('user.delete');
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function prueba(){
        $user = new User;
        $user->name = 'Juan Perez';
        $user->email = "juan@gmail.com";
        $user->password = bcrypt('1234');
        $user->save();
    }

    public function index(){
        $usuarios = User::all();
        return $usuarios;
    }

    public function create(){
        return view('create');
    }
    
    public function store(Request $request){
        $user = new User();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = bcrypt($request->input('password'));
        $user->save();
        return $user;
    }

    public function show($id){
        $user = User::find($id);
        return $user;
    }

    public function edit($id){
        $user = User::find($id);
        return view('edit')->with('user',$user);
    } 

    public function update(Request $request,$id){
        $user = User::find($id);
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = bcrypt($request->input('password'));
        $user->save();
        return 'Modificacion exitosa';
    }

    public function destroy(Request $request){
        $user = User::find($request->input('id'));
        $user->delete();
        return 'Usuario eliminado con exito';
    }

}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Users;

class UserController extends Controller
{
    /**
     * Muestra una lista con todos los usuarios.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Users::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Agrega a un nuevo usuario.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $usuario = new Users;
		$usuario->nombre = $request->nombre;
		$usuario->apellido = $request->apellido;
		$usuario->email = $request->email;
		$usuario->usuario = $request->usuario;
		$usuario->save();
    }

    /**
     * Muestra los datos de un usuario.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Users::where('id', $id)->get();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Actualiza los datos de un usuario.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $usuario = Users::find($id);
        
        if(isset($request->nombre)) {
			$usuario->nombre = $request->nombre;
		}
		
		if(isset($request->apellido)) {
			$usuario->apellido = $request->apellido;
		}
		
		if(isset($request->email)) {
			$usuario->email = $request->email;
		}
		
		if(isset($request->usuario)) {
			$usuario->usuario = $request->usuario;
		}
			
		$usuario->save();
    }

    /**
     * Elimina un usuario.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $usuario = Users::find($id);
		$usuario->delete();
    }
}

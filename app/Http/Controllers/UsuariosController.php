<?php

namespace App\Http\Controllers;

use App\Models\usuarios;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UsuariosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $usuarios=usuarios::all();
        return view('Usuarios', compact('usuarios'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $datos=[
            'nombre' => ['required'],
            'apellido_paterno' => ['required'],
            'apellido_materno'=> ['required'],
            'nombre_usuario'=> ['required'],
            'password'=> ['required','min:8'],
            'rol'=> ['required'],
        ];
        
        $mensaje =[
            'required'=>':attribute es requerido',
            'unique'=>':attribute ya existe',
        ];
     $validate = $this->validate($request, $datos, $mensaje);
     $validate['password']=Hash::make($validate['password']);
     usuarios::create($validate);

   
        // equiposprestados::create($validate);

        return redirect ('Usuarios');
    }

    /**
     * Display the specified resource.
     */
    public function show(usuarios $usuarios)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(usuarios $usuarios)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
        $datos=[
            'nombre' => ['required'],
            'apellido_paterno' => ['required'],
            'apellido_materno'=> ['required'],
            'nombre_usuario'=> ['required'],
            'password'=> ['required','min:8'],
            'rol'=> ['required'],
        ];
        
        $mensaje =[
            'required'=>':attribute es requerido',
            'unique'=>':attribute ya existe',
        ];
     $validate = $this->validate($request, $datos, $mensaje);
     $validate['password']=Hash::make($validate['password']);
     usuarios::where('id','=',$id)->update($validate);
     $usuarios=usuarios::findOrFail($id);
   
        // equiposprestados::create($validate);

        return redirect ('Usuarios');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        //
        usuarios::destroy($id);
        return redirect ('Usuarios');
    }
}

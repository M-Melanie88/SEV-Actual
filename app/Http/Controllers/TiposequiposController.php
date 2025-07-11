<?php

namespace App\Http\Controllers;

use App\Models\tiposequipos;
use Illuminate\Http\Request;

class TiposequiposController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $catalogoequipos= tiposequipos::all();
        return view('CatalogoEquipos' , compact('catalogoequipos'));
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
            'marca' => ['required'],
            'serie'=> ['required'],
            'inventario'=> ['required'],
            'modelo'=> ['required'],
        ];
        
        $mensaje =[
            'required'=>':attribute es requerido',
            'unique'=>':attribute ya existe',
        ];
     $validate = $this->validate($request, $datos, $mensaje);
     tiposequipos::create($validate);

   
        // equiposprestados::create($validate);

        return redirect ('CatalogoEquipos');

    }

    /**
     * Display the specified resource.
     */
    public function show(tiposequipos $tiposequipos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(tiposequipos $tiposequipos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //´
        $datos = [
            'nombre' => ['required'],
            'marca' => ['required'],
            'serie'=> ['required'],
            'inventario'=> ['required'],
            'modelo'=> ['required'],
        ];
    
        $mensaje = [
            'required' => ':attribute es requerido',
            'unique' => ':attribute ya existe',
        ];
    
        $validate = $this->validate($request, $datos, $mensaje);
        tiposequipos::where('id','=',$id)->update($validate);
        $equipo = tiposequipos::findOrFail($id);
    
            return redirect ('CatalogoEquipos');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        tiposequipos::destroy($id);
        return redirect('CatalogoEquipos');
    }
}

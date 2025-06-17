<?php

namespace App\Http\Controllers;

use App\Models\catalogonombres;
use Illuminate\Http\Request;

class CatalogonombresController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $catalogonombres= catalogonombres::all();
        return view('CatalogoNombres', compact('catalogonombres'));
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
            'departamento'=> ['required'],
        ];
        
        $mensaje =[
            'required'=>':attribute es requerido',
            'unique'=>':attribute ya existe',
        ];
     $validate = $this->validate($request, $datos, $mensaje);
     catalogonombres::create($validate);

   
        // equiposprestados::create($validate);

        return redirect ('CatalogoNombres');
    }

    /**
     * Display the specified resource.
     */
    public function show(catalogonombres $catalogonombres)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(catalogonombres $catalogonombres)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $id)
    {
        //

          // Validación
    $datos = [
        'nombre' => ['required'],
        'apellido_paterno' => ['required'],
        'apellido_materno'=> ['required'],
        'departamento'=> ['required'],
    ];

    $mensaje = [
        'required' => ':attribute es requerido',
        'unique' => ':attribute ya existe',
    ];

    $validate = $this->validate($request, $datos, $mensaje);
    catalogonombres::where('id','=',$id)->update($validate);
    $equipo = catalogonombres::findOrFail($id);

        return redirect ('CatalogoNombres');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        //
        catalogonombres::destroy($id);
        return redirect('CatalogoNombres');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\catalogofirmantes;
use Illuminate\Http\Request;

class CatalogofirmantesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $catalogofirmantes =catalogofirmantes::all();        
        return view('CatalogoFirmantes',compact('catalogofirmantes'));
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
    
        ];
        
        $mensaje =[
            'required'=>':attribute es requerido',
            'unique'=>':attribute ya existe',
        ];
     $validate = $this->validate($request, $datos, $mensaje);
     catalogofirmantes::create($validate);

   
        // equiposprestados::create($validate);

        return redirect ('CatalogoFirmantes');
    }

    /**
     * Display the specified resource.
     */
    public function show(catalogofirmantes $catalogofirmantes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(catalogofirmantes $catalogofirmantes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $id)
    {
        //
        $datos = [
            'nombre' => ['required'],
            'apellido_paterno' => ['required'],
            'apellido_materno'=> ['required'],
       
        ];
    
        $mensaje = [
            'required' => ':attribute es requerido',
            'unique' => ':attribute ya existe',
        ];
    
        $validate = $this->validate($request, $datos, $mensaje);
        catalogofirmantes::where('id','=',$id)->update($validate);
        $equipo = catalogofirmantes::findOrFail($id);
    
            return redirect ('CatalogoFirmantes');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        //

        catalogofirmantes::destroy($id);
        return redirect('CatalogoFirmantes');
    }
}

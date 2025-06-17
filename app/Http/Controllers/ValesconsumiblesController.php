<?php

namespace App\Http\Controllers;

use App\Models\catalogofirmantes;
use App\Models\catalogonombres;
use App\Models\tiposconsumibles;
use App\Models\valesconsumibles;
use Illuminate\Http\Request;

class ValesconsumiblesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $catalogofirmantes=catalogofirmantes::all();
        $tiposconsumibles=tiposconsumibles::all();
        $catalogonombres=catalogonombres::all();
        $valesconsumibles=valesconsumibles::all();
        return view('ValesConsumibles',compact('valesconsumibles','catalogonombres','catalogofirmantes','tiposconsumibles'));
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
            'id_cat_nombre' => ['required'],
            'id_tipo_consumible' => ['required'],
            'fecha_emision'=> ['required'],
            'observaciones'=> ['required'],
            'cantidad'=> ['required'],
 
        ];
        
        $mensaje =[
            'required'=>':attribute es requerido',
            'unique'=>':attribute ya existe',
        ];
     $validate = $this->validate($request, $datos, $mensaje);
     valesconsumibles::create($validate);

   
        // equiposprestados::create($validate);

        return redirect ('ValesConsumibles');
    }

    /**
     * Display the specified resource.
     */
    public function show(valesconsumibles $valesconsumibles)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(valesconsumibles $valesconsumibles)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $id)
    {
        //
        $datos=[
            'id_cat_nombre' => ['required'],
            'id_tipo_consumible' => ['required'],
            'fecha_emision'=> ['required'],
            'observaciones'=> ['required'],
            'cantidad'=> ['required'],
 
        ];
        
        $mensaje =[
            'required'=>':attribute es requerido',
            'unique'=>':attribute ya existe',
        ];

        $validate = $this->validate($request, $datos, $mensaje);
      
       
    
         
     $validate = $this->validate($request, $datos, $mensaje);
     valesconsumibles::where('id','=',$id)->update($validate);
     $equipo = valesconsumibles::findOrFail($id);
    

   
        // equiposprestados::create($validate);

        return redirect ('ValesConsumibles');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        //
        valesconsumibles::destroy($id);
        return redirect ('ValesConsumibles');
    }
}

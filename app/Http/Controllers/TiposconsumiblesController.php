<?php

namespace App\Http\Controllers;

use App\Models\tiposconsumibles;
use Illuminate\Http\Request;

class TiposconsumiblesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $catalogoconsumibles=tiposconsumibles::all();
        return view('CatalogoConsumibles', compact('catalogoconsumibles'));
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
                'tipo_consumible' => ['required'],
                'descripcion' => ['required'],
                'SO'=> ['required'],
                'RAM'=> ['required'],
                'aditamentos'=> ['required'],
                'fecha_vencimiento'=> ['required'],
            ];
            
            $mensaje =[
                'required'=>':attribute es requerido',
                'unique'=>':attribute ya existe',
            ];
         $validate = $this->validate($request, $datos, $mensaje);
         tiposconsumibles::create($validate);
    
       
            // equiposprestados::create($validate);
    
            return redirect ('CatalogoConsumibles');
    }

    /**
     * Display the specified resource.
     */
    public function show(tiposconsumibles $tiposconsumibles)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(tiposconsumibles $tiposconsumibles)
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
            'tipo_consumible' => ['required'],
            'descripcion' => ['required'],
            'SO'=> ['required'],
            'RAM'=> ['required'],
            'aditamentos'=> ['required'],
            'fecha_vencimiento'=> ['required'],
        ];
        
        $mensaje =[
            'required'=>':attribute es requerido',
            'unique'=>':attribute ya existe',
        ];
    


     $validate = $this->validate($request, $datos, $mensaje);
     tiposconsumibles::where('id','=',$id)->update($validate);
     $equipo = tiposconsumibles::findOrFail($id);
   
        // equiposprestados::create($validate);

        return redirect ('CatalogoConsumibles');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        //

        tiposconsumibles::destroy($id);
        return redirect('CatalogoConsumibles');
    }
}

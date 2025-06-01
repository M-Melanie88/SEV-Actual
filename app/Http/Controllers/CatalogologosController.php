<?php

namespace App\Http\Controllers;

use App\Models\catalogologos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class CatalogologosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $catalogologos= catalogologos::all();
        return view('CatalogoLogos', compact('catalogologos'));
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
            'logos' => ['required'],
    
        ];
        
        $mensaje =[
            'required'=>':attribute es requerido',
            'unique'=>':attribute ya existe',
        ];


     $validate = Validator::make($request->all(), $datos, $mensaje);

     $logossev=request()->except('_token');
     if($request->hasFile('logos')){
     $logossev['logos']=$request->file('logos')->store('uploads','public');
    }
     catalogologos::create($logossev);

   
        // equiposprestados::create($validate);

        return redirect ('CatalogoLogos');
    }

    /**
     * Display the specified resource.
     */
    public function show(catalogologos $catalogologos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(catalogologos $catalogologos)
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
          $datos=[
            'logos' => ['required'],
    
        ];
        
        $mensaje =[
            'required'=>':attribute es requerido',
            'unique'=>':attribute ya existe',
        ];


    $validate = Validator::make($request->all(), $datos, $mensaje);
if($request->hasFile('logos')){
    $datos=['logos'=>'required|mimes:jpeg,png,jpg'];
    $mensaje=['logos.required'=>'El logo es requerido'];
}
  
   $this->validate($request, $datos, $mensaje);
    $logossev=request()->except(['_token','_method']);
    if($request->hasFile('logos')){
      $equipo = catalogologos::findOrFail($id);
      Storage::delete('public/storage'.$equipo->logos);
        $logossev['logos']=$request->file('logos')->store('uploads','public');
       }

    catalogologos::where('id','=',$id)->update($logossev);
    $equipo = catalogologos::findOrFail($id);

        return redirect ('CatalogoLogos');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        //
        catalogologos::destroy($id);
        return redirect('CatalogoLogos');
    }
}
<?php

namespace App\Http\Controllers;

use App\Models\catalogofirmantes;
use App\Models\catalogologos;
use App\Models\catalogonombres;
use App\Models\tiposconsumibles;
use App\Models\valesconsumibles;
use Barryvdh\DomPDF\Facade\PDF as PDF;
use Illuminate\Http\Request;


class ValesconsumiblesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        //
        $catalogofirmantes=catalogofirmantes::all();
        $catalogologos=catalogologos::all();
        $tiposconsumibles=tiposconsumibles::all();
        $catalogonombres=catalogonombres::all();
        $valesconsumibles=valesconsumibles::all();



        $valesconsumibles=valesconsumibles::query();
        //  if($request->has('id_cat_nombre')){ 
        //     $valesconsumibles->where('id_cat_nombre',$request->input('id_cat_nombre'));
        //  }

        $valesPaginados= $valesconsumibles->paginate(4);
        $vc['valesconsumibles']=$valesPaginados;


        return view('ValesConsumibles',$vc,compact('valesconsumibles','catalogonombres','catalogofirmantes','tiposconsumibles','catalogologos'),['valesconsumibles'=>valesconsumibles::latest()->get()]);
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
            'numero_oficio'=> ['required'],
            'id_catalogo_logo',
    
 
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
            'numero_oficio'=> ['required'],
            'id_catalogo_logo',
 
        ];
        
        $mensaje =[
            'required'=>':attribute es requerido',
            'unique'=>':attribute ya existe',
        ];

        $validate = $this->validate($request, $datos, $mensaje);
      
       
    
         
    //  $validate = $this->validate($request, $datos, $mensaje);
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

        public function mostrarPdf( $id)
    {
        //
   $valesconsumibles = valesconsumibles::all(); // o la consulta que necesites
   $catalogonombres = catalogonombres::all(); // o la consulta que necesites
   $catalogofirmantes = catalogofirmantes::all(); // o la consulta que necesites
   $tiposconsumibles=tiposconsumibles::all();
   $catalogologos = catalogologos::all(); // o la consulta que necesites


$vales = valesconsumibles::with('tipoconsumible')->findOrFail($id);
    // 2. Buscamos todos los vales con el mismo número de oficio
    $valesRelacionados = valesconsumibles::where('numero_oficio', $vales->numero_oficio)->get();

        $pdf = PDF::loadView('DocValesConsumibles', compact('valesconsumibles','catalogonombres','catalogofirmantes','catalogologos','id','tiposconsumibles','vales','valesRelacionados'));
        return $pdf->stream('Reporte de vales.pdf');
    }


}

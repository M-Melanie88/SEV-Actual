<?php

namespace App\Http\Controllers;

use App\Models\asignacionbienes;
use App\Models\catalogofirmantes;
use App\Models\catalogologos;
use App\Models\catalogonombres;
use App\Models\devoluciones;
use App\Models\tiposequipos;
use Barryvdh\DomPDF\Facade\PDF as PDF;
use Illuminate\Http\Request;

class AsignacionbienesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //

        $asignacionbienes= asignacionbienes::all();
        $catalogonombres= catalogonombres::all();
        $catalogofirmantes= catalogofirmantes::all();
        $catalogologos= catalogologos::all();
        $devoluciones= devoluciones::all();
        $tiposequipos= tiposequipos::all();

 $asignacionbienes=asignacionbienes::query();
        //  if($request->has('id_cat_nombre')){ 
        //     $valesconsumibles->where('id_cat_nombre',$request->input('id_cat_nombre'));
        //  }

        $asignacionesPaginadas= $asignacionbienes->paginate(4);
        $ab['asignacionbienes']=$asignacionesPaginadas;


        return view('AsignacionBienes',$ab, compact('asignacionbienes','catalogonombres','catalogofirmantes','catalogologos','devoluciones','tiposequipos'),['asignacionbienes'=>asignacionbienes::latest()->get()]);
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
               'id_cat_firmantes' => ['required'],
            'descripcion' => ['required'],
            'marca' => ['required'],
            'modelo'=> ['required'],
            'fecha_asignacion'=> ['required'],
            'asignacion'=> ['required'],
            'numero_serie'=> ['required'],
            'codigo_inventario'=>['required'],
            'folio'=>['required'],
    
 
        ];
        
        $mensaje =[
            'required'=>':attribute es requerido',
            'unique'=>':attribute ya existe',
        ];
     $validate = $this->validate($request, $datos, $mensaje);
     asignacionbienes::create($validate);

   
        // equiposprestados::create($validate);

        return redirect ('AsignacionBienes');
    }

    /**
     * Display the specified resource.
     */
    public function show(asignacionbienes $asignacionbienes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(asignacionbienes $asignacionbienes)
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
            'id_cat_firmantes' => ['required'],
            'descripcion' => ['required'],
            'marca' => ['required'],
            'modelo'=> ['required'],
            'fecha_asignacion'=> ['required'],
            'asignacion'=> ['required'],
            'numero_serie'=> ['required'],
            'codigo_inventario'=>['required'],
            'folio'=>['required'],
    
 
        ];
        
        $mensaje =[
            'required'=>':attribute es requerido',
            'unique'=>':attribute ya existe',
        ];
     $validate = $this->validate($request, $datos, $mensaje);


        asignacionbienes::where('id','=',$id)->update($validate);
     $equipo = asignacionbienes::findOrFail($id);
    



   
        // equiposprestados::create($validate);

        return redirect ('AsignacionBienes');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        //
        //
        asignacionbienes::destroy($id);
        return redirect ('AsignacionBienes');
    }

           public function mostrarPdf( $id)
    {
        //
        $asignacionbienes= asignacionbienes::all();
        $catalogonombres= catalogonombres::all();
        $catalogofirmantes= catalogofirmantes::all();
        $catalogologos= catalogologos::all();
        $devoluciones= devoluciones::all();
        $tiposequipos= tiposequipos::all();

// $bienes = asignacionbienes::with('tipoconsumible')->findOrFail($id);
   
//     $valesRelacionados = valesconsumibles::where('numero_oficio', $vales->numero_oficio)->get();

        $pdf = PDF::loadView('DocAsignacionBienes', compact('asignacionbienes','catalogonombres','catalogofirmantes','catalogologos','id'))
              ->setPaper('letter', 'landscape'); // ← aquí está el cambio
        return $pdf->stream('Reporte de asignacion de bienes.pdf');
    }
}

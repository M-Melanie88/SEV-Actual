<?php

namespace App\Http\Controllers;

use App\Models\catalogonombres;
use App\Models\devoluciones;
use App\Models\equiposprestados;
use App\Models\solicitantes;
use App\Models\tiposequipos;
use Illuminate\Http\Request;

class EquiposprestadosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        //
        $equiposprestados = equiposprestados::all();
        $tiposequipos = tiposequipos::all();
        $catalogonombres=catalogonombres::all();

         $equiposprestados=equiposprestados::query();
         if($request->has('id_cat_nombre')){ 
            $equiposprestados->where('id_cat_nombre',$request->input('id_cat_nombre'));
         }

        $equiposPaginadas= $equiposprestados->paginate(4);
        $ep['equiposprestados']=$equiposPaginadas;
        return view("EquiposPrestados",  $ep ,compact('equiposprestados','tiposequipos', 'catalogonombres'),['equiposprestados'=>equiposprestados::latest()->get()]);
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
            // 'id'=>['required'],
            'id_usuario',
            'fecha_prestamo'=>['required'],
            'id_cat_nombre' => ['required'],
            'id_cat_firmantes' ,
            'status' => ['required'],
            'fecha_prorroga' ,
            'id_tipo_equipo' => ['required'],
            'devolucion',
        ];
        
        $mensaje =[
            'required'=>':attribute es requerido',
            'unique'=>':attribute ya existe',
        ];

        // 1. Crear o buscar el tipo de equipo por su nombre
    // $tipo = tiposequipos::firstOrCreate([
    //     'nombre' => $request->nombre_tipo_equipo
    // ]);
    // $nom = solicitantes::firstOrCreate([
    //     'nombre' => $request->solicitante
    // ]);
   // Guardar o buscar la devolución
   $devolucion = devoluciones::firstOrCreate([
    'fecha_devolucion' => $request->devolucion
]);

// Validar campos
$validate = $this->validate($request, $datos, $mensaje);

// Agregar manualmente el ID de devolución
$validate['id_devolucion'] = $devolucion->id;


    equiposprestados::create($validate);


   
        // equiposprestados::create($validate);

        return redirect ('EquiposPrestados');
    }

    /**
     * Display the specified resource.
     */
    public function show(equiposprestados $equiposprestados)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(equiposprestados $equiposprestados)
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
        'id_usuario',
        'fecha_prestamo'=>['required'],
        'id_cat_nombre' => ['required'],
        'id_cat_firmantes' ,
        'status' => ['required'],
        'fecha_prorroga' ,
        'id_tipo_equipo' => ['required'],
        'devolucion',
    ];

    $mensaje = [
        'required' => ':attribute es requerido',
        'unique' => ':attribute ya existe',
    ];

    // Buscar o crear registros relacionados
    // $tipo = tiposequipos::firstOrCreate([
    //     'nombre' => $request->nombre_tipo_equipo
    // ]);

    $equipoprestado = equiposprestados::findOrFail($id);

    // Buscar o crear la devolución con esa fecha
    $devolucion = devoluciones::firstOrCreate([
        'fecha_devolucion' => $request->devolucion
    ]);

    // Validar datos
    $validate = $this->validate($request, $datos, $mensaje);

    // Agregar manualmente el ID de la devolución
    $validate['id_devolucion'] = $devolucion->id;

    // Actualizar el registro
    $equipoprestado->update($validate);
        return redirect ('EquiposPrestados');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        //
        equiposprestados::destroy($id);
        return redirect('EquiposPrestados');
    }
}

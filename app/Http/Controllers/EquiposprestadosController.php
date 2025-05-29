<?php

namespace App\Http\Controllers;

use App\Models\catalogonombres;
use App\Models\equiposprestados;
use App\Models\tiposequipos;
use Illuminate\Http\Request;

class EquiposprestadosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $equiposprestados = equiposprestados::all();
        $tiposequipos = tiposequipos::all();
        return view("EquiposPrestados", compact('equiposprestados','tiposequipos'));
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
            'cat_nombres'=>['required', 'string'],
            'status'=>['required'],
            'fecha_prorroga',
        'nombre_tipo_equipo' => ['required', 'string'], // ← El nombre que el usuario ingresa
            'id_devolucion',
        ];
        
        $mensaje =[
            'required'=>':attribute es requerido',
            'unique'=>':attribute ya existe',
        ];
     $validate = $this->validate($request, $datos, $mensaje);
        // 1. Crear o buscar el tipo de equipo por su nombre
    $tipo = tiposequipos::firstOrCreate([
        'nombre' => $request->nombre_tipo_equipo
    ]);
    $nom = catalogonombres::firstOrCreate([
        'nombre' => $request->cat_nombres
    ]);

    

    // 2. Registrar el equipo prestado
    equiposprestados::create([
        'id_usuario' => $request->id_usuario,
        'fecha_prestamo' => $request->fecha_prestamo,
        'id_cat_nombre' => $nom->id,
        'status' => $request->status,
        'fecha_prorroga' => $request->fecha_prorroga,
        'id_tipo_equipo' => $tipo->id, // ← aquí usamos el id del tipo
        'id_devolucion' => $request->id_devolucion,
        
    ]);

   
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
    public function update(Request $request, equiposprestados $equiposprestados)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(equiposprestados $equiposprestados)
    {
        //
    }
}

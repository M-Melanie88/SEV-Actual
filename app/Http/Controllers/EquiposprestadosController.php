<?php

namespace App\Http\Controllers;

use App\Models\catalogofirmantes;
use App\Models\catalogologos;
use App\Models\catalogonombres;
use App\Models\devoluciones;
use App\Models\equiposprestados;
use App\Models\solicitantes;
use App\Models\tiposequipos;
use Barryvdh\DomPDF\Facade\PDF as PDF;
use \Carbon\Carbon;
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
        $catalogologos=catalogologos::all();
        $catalogofirmantes=catalogofirmantes::all();


         $equiposprestados=equiposprestados::query();
         if($request->has('id_cat_nombre')){ 
            $equiposprestados->where('id_cat_nombre',$request->input('id_cat_nombre'));
         }

        $equiposPaginadas= $equiposprestados->paginate(4);
        $ep['equiposprestados']=$equiposPaginadas;
        return view("EquiposPrestados",  $ep ,compact('equiposprestados','tiposequipos', 'catalogonombres','catalogofirmantes','catalogologos'),['equiposprestados'=>equiposprestados::latest()->get()]);
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
            'id_cat_firmantes' => ['required'],
            'status' => ['required'],
            'fecha_prorroga' ,
            'id_tipo_equipo' => ['required'],
            'devolucion',
                 'folio' => ['required'],
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
        'id_cat_firmantes' => ['required'],
        'status' => ['required'],
        'fecha_prorroga' => ['required'],
        'id_tipo_equipo' => ['required'],
        'devolucion',
        'folio' => ['required'],
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


      public function mostrarPdf( $id)
    {
        //
          $equiposprestados = equiposprestados::all();
        $tiposequipos = tiposequipos::all();
        $catalogonombres=catalogonombres::all();
        $catalogologos=catalogologos::all();
        $catalogofirmantes=catalogofirmantes::all();

// $bienes = asignacionbienes::with('tipoconsumible')->findOrFail($id);
   
//     $valesRelacionados = valesconsumibles::where('numero_oficio', $vales->numero_oficio)->get();

        $pdf = PDF::loadView('DocEquiposPrestados', compact('equiposprestados','catalogonombres','catalogofirmantes','catalogologos','id','catalogonombres'))
              ->setPaper('letter', 'landscape'); // ← aquí está el cambio
        return $pdf->stream('Reporte de equipos prestados.pdf');
    }

//   public function eventos()
// {
//     // Asegúrate de que los equipos prestados tienen la relación de devolución cargada
//     $equiposprestados = Equiposprestados::with('devolucion', 'tipoequipo')
//         ->where('status', 'prestado') // Solo los equipos prestados
//         ->get();

//     // Convertir los préstamos en eventos para el calendario
//     $eventos = $equiposprestados->map(function ($equiposprestados) {
//         // Obtener la fecha de devolución (si tiene prórroga, esa será la fecha final)
//         $fecha = optional($equiposprestados->devolucion)->fecha_prorroga ?? optional($equiposprestados->devolucion)->fecha_devolucion;

//         return [
//             'title' => 'Devolución: ' . $equiposprestados->tipoequipo->nombre,
//             'start' => $fecha, // Asegúrate de que $fecha esté en formato correcto (Y-m-d)
//             'color' => optional($equiposprestados->devolucion)->fecha_prorroga ? '#3498db' : '#e74c3c',
//         ];
//     });

//     // Devolver los eventos en formato JSON
//     return response()->json($eventos);
// }¡

public function estadosPorDia()
{

    $hoy = Carbon::today();

    // 🔁 Verifica y actualiza automáticamente los equipos vencidos
    Equiposprestados::with('devolucion')->chunk(100, function ($equipos) use ($hoy) {
        foreach ($equipos as $equipo) {
            if ($equipo->status === 'devuelto') continue;

            $fechaLimite = optional($equipo->devolucion)->fecha_prorroga
                ?? optional($equipo->devolucion)->fecha_devolucion;

            if ($fechaLimite && Carbon::parse($fechaLimite)->lt($hoy)) {
                $equipo->status = 'vencido';
                $equipo->save();
            }
        }
    });

    // ⚫ Eventos por fecha de préstamo (negro)
    $equipos = Equiposprestados::select('fecha_prestamo')
        ->whereNotNull('fecha_prestamo')
        ->distinct()
        ->get();

    $eventos = [];

    foreach ($equipos as $equipo) {
        $fecha = Carbon::parse($equipo->fecha_prestamo)->format('Y-m-d');

        $eventos[] = [
            'title' => '',
            'start' => $fecha,
            'allDay' => true,
            'display' => 'background',
            'backgroundColor' => '#000000', // negro
            'borderColor' => '#000000',
        ];
    }

    // 💜 Evento para marcar el día actual en morado
    $eventos[] = [
        'title' => '',
        'start' => $hoy->format('Y-m-d'),
        'allDay' => true,
        'display' => 'background',
        'backgroundColor' => '#6f42c1', // morado
        'borderColor' => '#6f42c1',
    ];

    return response()->json($eventos);
}


    
public function equiposPorDia(Request $request)
{
    $fecha = $request->query('fecha');

    if (!$fecha) {
        return response()->json(['error' => 'Fecha requerida'], 400);
    }

    $equipos = Equiposprestados::with('devolucion', 'tipoequipo')
        ->whereDate('fecha_prestamo', $fecha)
        ->get()
        ->map(function($equipo) {
            return [
                'tipoequipo' => $equipo->tipoequipo->nombre ?? 'Sin tipo',
                'estado' => ucfirst($equipo->status), // usa directamente el campo status
                'fecha_prestamo' => $equipo->fecha_prestamo,
                'fecha_devolucion' => optional($equipo->devolucion)->fecha_devolucion,
                'fecha_prorroga' => optional($equipo)->fecha_prorroga,
            ];
        });

    return response()->json($equipos);
}


}

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Asignación de Equipos</title>
    <style>
        body { font-family: Arial, sans-serif; font-size: 12px; margin:0px; }
        table { width: 100%; border-collapse: collapse; }
        td, th { border: 1px solid black; padding: 5px; text-align: right; }
        .no-border { border: none; }
        .center { text-align: center; }
        .firma { width: 33%; display: inline-block; text-align: center; margin-top: 10px; }
        .footer { font-size: 10px; text-align: center; position: absolute; bottom: 30px; width: 100%; }
        .recuadro{width:30%;}
        .fecha{align-content: left;}
        
    </style>
</head>
<body>

    <table class="no-border">
        <tr class="no-border">
      <td class="center" style="width: 60%; background-color: #e0e0e0;" colspan="2">
                {{-- <img src="{{ public_path('images/logo-veracruz.png') }}" width="80"> --}}
                {{-- <img class="float: left;" src="{{ public_path('images/logo-veracruz.png') }}" width="80" alt="agregar imagen"> --}}
   
    {{-- poner logos  --}}

                <strong >DIRECCIÓN DE TECNOLOGÍAS DE LA INFORMACIÓN</strong><br>
                CONTROL DE MOVIMIENTOS DE EQUIPOS<br>
                <strong>DEPARTAMENTO DE SOPORTE TÉCNICO</strong><br>
                (OFICINA DE ATENCIÓN A USUARIOS 8-41-77-00 CISCO 7066, 7007)<br>
                <strong>Asignación de bienes</strong>
            </td>
           
        </tr>
    </table>



    <table>
        <tr>
            <td style="background-color: #e0e0e0;">NOMBRE DEL USUARIO DEL ÁREA QUE RECIBE:</td>
            <td colspan="3"></td>
        </tr>
        <tr>
            <td style="background-color: #e0e0e0;">R.F.C.:</td> 
            <td colspan="3"></td>
          
        </tr>
        <tr>
              <td style="background-color: #e0e0e0;">NOMBRE DEL ÁREA O DEPARTAMENTO QUE RECIBE:</td>
              <td colspan="3"></td>
        </tr>
        <tr>
            <td style="background-color: #e0e0e0;">CLAVE DE CENTRO DE TRABAJO:</td>
            <td colspan="3"> </td>
        </tr>
        <tr>
            <td style="background-color: #e0e0e0;" class="recuadro">REFERENTE:</td>
            <td></td>
            <td style="background-color: #e0e0e0;">SOLICITUD:</td>
            <td></td>
        </tr>
        <tr>
            <td     style="background-color: #e0e0e0;">FECHA DE SALIDA DE EQUIPO:    @php
    $asignacionSeleccionada = $asignacionbienes->firstWhere('id', $id);
@endphp



</td>
<td  colspan="3"  class="fecha">@if ($asignacionSeleccionada)
    <strong size="10px;" > {{ $asignacionSeleccionada->fecha_asignacion }}</strong>

@endif
</td>
        </tr>
        <tr>
            <td   style="background-color: #e0e0e0;">OBSERVACIONES:</td>
            <td colspan="3"></td>
        </tr>
        <tr>
            <td  style="background-color: #e0e0e0;">ELABORA SALIDA:</td>
            <td></td>
            <td  style="background-color: #e0e0e0;">TELÉFONO DE CONTACTO:</td>
            <td></td>
        </tr>
    </table>


    <table>
        <thead>
            <tr>
                <th>FOLIO</th>
                <th>DESCRIPCIÓN</th>
                <th>MARCA</th>
                <th>MODELO</th>
                <th>No. SERIE</th>
                <th>No. DE INVENTARIO</th>
                <th>Asignación</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                    @if ($asignacionSeleccionada)
                        <strong style="" size="10px;"> {{ $asignacionSeleccionada->folio }}</strong>
                    @endif</td>
         <td>
                    @if ($asignacionSeleccionada)
                        <strong style="" size="10px;"> {{ $asignacionSeleccionada->descripcion }}</strong>
                    @endif</td>
        <td>
                    @if ($asignacionSeleccionada)
                        <strong style="" size="10px;"> {{ $asignacionSeleccionada->marca }}</strong>
                    @endif</td>
       <td>
                    @if ($asignacionSeleccionada)
                        <strong style="" size="10px;"> {{ $asignacionSeleccionada->modelo }}</strong>
                    @endif</td>
        <td>
                    @if ($asignacionSeleccionada)
                        <strong style="" size="10px;"> {{ $asignacionSeleccionada->numero_serie }}</strong>
                    @endif</td>
     <td>
                    @if ($asignacionSeleccionada)
                        <strong style="" size="10px;"> {{ $asignacionSeleccionada->codigo_inventario }}</strong>
                    @endif</td>
              <td>
                    @if ($asignacionSeleccionada)
                        <strong style="" size="10px;"> {{ $asignacionSeleccionada->asignacion }}</strong>
                    @endif</td>
            </tr>
        </tbody>
    </table>

    <br><br><br>

    <div style="display: flex; justify-content: space-between;">
        <div class="firma"  >
            <strong>
              @if ($asignacionSeleccionada)
                        <strong size="10px;"> 
                            {{ $asignacionSeleccionada->catalogofirmante->nombre }}
                            {{ $asignacionSeleccionada->catalogofirmante->apellido_paterno }}
                            {{ $asignacionSeleccionada->catalogofirmante->apellido_materno }}
                            </strong>
                    @endif
                         
            _____________________________________________
           <p style="margin:7px;">    </p>
            Vo. Bo. ENTREGA EL EQUIPO</strong><br>
        </div>
        <div class="firma"  >
          <strong> 
                 @if ($asignacionSeleccionada)
                        <strong size="10px;"> 
                            {{ $asignacionSeleccionada->catalogonombre->nombre }}
                            {{ $asignacionSeleccionada->catalogonombre->apellido_paterno }}
                            {{ $asignacionSeleccionada->catalogonombre->apellido_materno }}
                          
                            </strong>
                    @endif
        _______________________________________________<br>
            RECIBE EQUIPO<br>
            NOMBRE, FIRMA Y SELLO</strong>
            
        </div>
        <div class="firma" style="float: right; margin-top: -4px;">
            <strong> M.C. JUAN JOSÉ DE JESUS HERBER RAMIREZ<br>
              ______________________________________________<br>
       AUTORIZÓ<br>
            DIRECCIÓN DE TEC. DE LA INFORMACIÓN</strong><br>
        </div>
    </div>

    <div class="footer">
        Carretera Federal Xalapa-Veracruz Km 4.5 Col. Rubí Ánimas C.P. 91193 Xalapa, Veracruz.
    </div>

</body>
</html>

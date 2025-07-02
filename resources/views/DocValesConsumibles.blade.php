*/
Agregar los logos y marca de agua porque no me la proporcionaron
*/
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Vale de entrega de consumibles</title>
    <style>
        body { font-family: Arial, sans-serif; font-size: 12px; margin: 40px; }
        .center { text-align: center; }
        .header img { width: 80px; }
        .logos { display: flex; justify-content: space-between; align-items: center; }
        table { width: 100%; border-collapse: collapse; margin-top: 15px; }
        th, td { border: 1px solid #000; padding: 5px; text-align: left; }
        .no-border { border: none; }
        .firma { width: 45%; display: inline-block; text-align: center; margin-top: 0px; }
        .nota { font-size: 10px; margin-top: 10px; }
        .firma-linea { border-top: 1px solid #000; margin-top: 50px; }
    </style>
</head>
<body>
    <div class="logos">
        {{-- <img src="{{ public_path('store/Eet0YBAp6AM2AYPxyCjKWkl1lognPc4feqfnhMJ5.jpg') }}" alt="Veracruz">
        <img src="{{ public_path('images/logo-sev.png') }}" alt="SEV">
        <img src="{{ public_path('images/logo-veracruz-orgullo.png') }}" alt="Veracruz Orgullo"> --}}

             {{-- <img src="{{ asset('storage/uploads/Eet0YBAp6AM2AYPxyCjKWkl1lognPc4feqfnhMJ5.jpg' )}}" alt="Logos" width="600px" height="150px" class="img-thumnail img-fluid">
                          <img src="{{ asset('storage/'.$catalogologo->logos )}}" alt="Logos" width="100px" height="100px" class="img-thumnail img-fluid"> --}}
       
          @php
    $logoEspecifico = $catalogologos->firstWhere('id', 3);
@endphp

@if ($logoEspecifico)
    <img src="{{ asset('storage/' . $logoEspecifico->logos) }}" alt="Logo específico" width="600px" height="150px" class="img-thumbnail img-fluid">
@endif
               
    </div>

    <div class="center">
        {{-- <p><strong>"2023: 200 años de Veracruz de Ignacio de la Llave, cuna del Heroico Colegio Militar 1823-2023".</strong></p> --}}
        <p style="margin-top: -20px;"><strong >OFICIALÍA MAYOR<br>DIRECCIÓN DE TECNOLOGÍAS DE LA INFORMACIÓN<br>VALE DE ENTREGA DE CONSUMIBLES 2023</strong><br>
     
    @php
    $valeSeleccionado = $valesconsumibles->firstWhere('id', $id);
@endphp



@if ($valeSeleccionado)
    <strong style="float: right;">OFICIO: {{ $valeSeleccionado->numero_oficio }}</strong>
@else
    <strong style="float: right; color:red;">Oficio no encontrado</strong>
@endif

       </p>
       <br>
    </div>
   <p class="firma2" style='float: right; text-align: center; width:250px; margin-bottom: 0px;'>  Estrategia Estatal de Fomento para la Lectura y Escritura </p><br>
 
       <div style="margin-top: 40px;">
        <strong>Nombre:</strong> 
        <div class="firma">
       ___________________________________
            
        </div>
    
        <div class="firma" style="float: right; margin-top:-3px ;">
          
            ________________________________________<br>
        </div>
    </div> 

    <table>
        <thead>
            <tr>
                <th  style="background-color: #e0e0e0;">Descripción de pieza</th>
                <th  style="background-color: #e0e0e0;">Cantidad</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($valesRelacionados as $item)
            <tr>
       

    <td>{{ $item->tipoconsumible->descripcion ?? 'Sin tipo' }}</td>
     
    {{-- @php
    $valeSeleccionado = $valesconsumibles->firstWhere('id', $id);
@endphp --}}
                <td>
                    {{-- @if ($valeSeleccionado) --}}
   {{ $item->cantidad }}
{{-- @endif --}}
</td>
            </tr>
       
            @endforeach
        </tbody>
    </table>

    <p class="nota">
        IMPORTANTE: El requerimiento de consumible se hará con oficio dirigido a la Dirección de Tecnologías de la Información y tendrá que recogerlo con copia de INE y Sello del área, siempre que no sea kiosko administrado por esta área.
    </p>

    <div style="margin-top: 40px;">
        <div class="firma">
            ___________________________________<br>
            Firma Recibe
                  <p><strong>Estrategia Estatal de Fomento para la Lectura y Escritura</strong></p>
        </div>
        <div class="firma" style="float: right;">
            ___________________________________<br>
            Firma Entrega<br>
         
            <strong>Francisco Javier Guzmán Morales<br>
            Jefe de Departamento de Soporte Técnico</strong>
        </div>
    </div>

    <div style="clear: both; margin-top: 50px; text-align: center;">
   
        <div class="firma-linea">Firma Visto Bueno</div>
        <p><strong>José Alberto Pozos Hernández<br>Director de la Dirección de Tecnologías de la Información</strong></p>
        <p>Xalapa, Ver.; a 25 de mayo del 2023</p>
    </div>

    <div style="position: absolute; bottom: 30px; font-size: 10px; width: 100%; text-align: center;">
        <p>
            Carretera Federal Xalapa-Veracruz km 4.5<br>
            Colonia Ruiz Cortines C.P. 91193, Xalapa, Veracruz<br>
            Tel: (228) 8417700 ext. 7077 y 7076<br>
            <strong>www.veracruz.gob.mx</strong>
        </p>
    </div>
</body>
</html>

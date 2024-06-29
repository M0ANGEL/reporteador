
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Vistas</title>
</head>
<body>
     
    
        <h1>Poryeccion</h1>

        <form  method="get">
            @csrf
                <h4>Que tiempo quieres ver la proyeccion?</h4>
                <input type="text" name="CampoProyec" required>
                <input type="submit">
        </form>

        {{-- respuesta de dias de proyeccion --}}
        {{-- {{$proyec * 4}} --}}

        <table>
            
           @if(count($datos)<=0)
                {{"NO HAY REGISTROS PENDIENTES"}}
           @else
           <tr>
                <th>MOLECULA</th>
                <th>BODEGA</th>
                <th>CANTIDAD</th>
                <th>ESTADO</th>
            </tr>

            {{-- bucle de datos --}}
           @foreach ($datos as $das)
           <tr>
               <td>{{$das->molecula}} </td>
               <td>{{$das->bodega}}</td>
               <td>{{$das->cantidad}}</td>
               <td>{{$das->estado}}</td>
           </tr>
       @endforeach



           @endif
        </table>
    
      
</body>
</html>




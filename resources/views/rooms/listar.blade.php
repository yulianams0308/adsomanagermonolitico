<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class ="container">
        <table id="idPqrsd" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>Id </th>
                    <th>Número Salón</th>
                    <th>Sede</th>
                    <th>Capacidad</th>
                    <th>Observación</th>
                    <th>Detalle</th>
                    <th>Eliminar</th>
                </tr>
            </thead>
            <tbody>
              @foreach ($rooms  as $room)
                  <tr>
                      <td>{{$room->id}}</td>
                      <td>{{$room->num_salon}}</td>
                      <td>{{$room->sede}}</td>
                      <td>{{$room->capacidad}}</td>
                      <td>{{$room->observacion}}</td>
                      
                      <td><a href="{{route('rooms.show',$room->id)}}">Detalle</a></td>
                     <td>
                        <form method="post" action="{{route('rooms.destroy',$room->id)}}">
                            @method('delete')
                            @csrf
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                     </td>
                 
                     
                     
                    
                      
        
                  </tr>
              @endforeach
            </tbody>
            
        </table>
        
        </div>
</body>
</html>
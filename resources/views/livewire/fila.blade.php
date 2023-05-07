<tr>
    <td>{{$datos['id_coordenada']}}</td>
    <td>{{$datos['id_vehiculo']}}</td>
    <td>{{$datos['fechora']}}</td>
    <td>{{$datos['lat']}}</td>
    <td>{{$datos['long']}}</td>
    <td>{{$datos['est']}}</td> 
    <td>{{$datos['obs']}}</td>
    <td  class="d-flex flex-row justify-content-end align-items-center" width="auto">
      <button wire:click="$emitTo('modal-tabla', 'CargarDatos', {{$datos['id_coordenada']}})" type="button" class="btn btn-secondary btn-sm m-1" data-toggle={{$modal['data-toggle']}} data-target={{$modal['data-target']}}>ver y editar</button>
      <button type="button" class="btn btn-danger btn-sm m-1">eliminar</button>
    </td>
</tr>
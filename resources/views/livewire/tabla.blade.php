<div id="contendor_tabla" class="container-fluid d-flex flex-column">
  <div id="filtros" class="d-flex flex-row justify-content-center aling-items-center flex-wrap p-1 mb-1">
    @foreach ($filtros as $key_filtro => $filtro_item)
      <input class="form-control form-control-sm m-1 w-auto" type="text" placeholder="{{$filtro_item}}">
    @endforeach
    
    <button type="button" class="btn btn-primary btn-sm m-1">Buscar</button>
  </div>

  <nav id="paginador">
    <ul class="pagination justify-content-center">
      @foreach ($datos['meta']['links'] as $datos_item)
        @if ($loop->first)
          <li wire:click="CargarDatos('{{$datos['links']['first']}}')" @class(['page-item', 'disabled' => !$datos['links']['prev']])><a class="page-link" href="#">primero</a></li>
          <li wire:click="CargarDatos('{{$datos['links']['prev']}}')" @class(['page-item', 'disabled' => !$datos_item['url']])><a class="page-link" href="#">anterior</a></li>
          @continue
        @endif

        @if ($loop->last)
          <li wire:click="CargarDatos('{{$datos['links']['next']}}')" wire:click="CargarDatos({{$datos['links']['next']}})" @class(['page-item', 'disabled' => !$datos_item['url']])><a class="page-link" href="#">próximo</a></li>
          <li wire:click="CargarDatos('{{$datos['links']['last']}}')" wire:click="CargarDatos({{$datos['links']['last']}})" @class(['page-item', 'disabled' => !$datos['links']['next']])><a class="page-link" href="#">último</a></li>
          @continue
        @endif

        <li wire:click="CargarDatos('{{$datos_item['url']}}')" @class(['page-item', 'active' => $datos_item['active']])><a class="page-link" href="#">{{$datos_item['label']}}</a></li>
      @endforeach
    </ul>
  </nav>

  <table id="tabla" class="table table-borderless table-hover table-sm">
    <thead class="bg-primary text-white">
      <tr>
        @foreach ($cabecera as $key => $cabecera_item)
          <th scope="col" width={{$cabecera_item}}>{{$key}}</th>
        @endforeach

        <th scope="col" class="d-flex flex-row justify-content-end align-items-center" width="auto">
          <button wire:click="CargarDatos('{{$ultima_dir}}')" type="button" class="btn btn-secondary btn-sm m-1">Recargar</button>
          <button type="button" class="btn btn-secondary btn-sm m-1">Nuevo +</button>
        </th>
      </tr>
    </thead>
    <tbody>
      @foreach ($datos['data'] as $datos_item)
        @livewire('fila', ['datos' => $datos_item], key($datos_item['id_coordenada']))
      @endforeach
    </tbody>
  </table>

  @livewire('modal-tabla', key('modal-tabla'))  
</div>
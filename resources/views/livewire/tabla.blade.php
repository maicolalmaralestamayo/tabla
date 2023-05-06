<div id="contendor_tabla" class="container-fluid d-flex flex-column">
  <div id="fil_de_filtros" class="d-flex flex-row justify-content-center aling-items-center flex-wrap p-1 mb-1">
    <input class="form-control form-control-sm m-1 w-auto" type="text" placeholder='nombre del campo'>
    <input class="form-control form-control-sm m-1 w-auto" type="text" placeholder='nombre del campo'>
    <input class="form-control form-control-sm m-1 w-auto" type="text" placeholder='nombre del campo'>
    <button type="button" class="btn btn-primary btn-sm m-1">Buscar</button>
  </div>
  
  <div id="fila_de_botones" class="d-flex flex-row justify-content-center align-items-center p-1 mb-1">
    <div id="paginador" class="row">
        <div class="page-item disabled"><span class="page-link">primero</span></div>
        <div class="page-item"><span class="page-link">anterior</span></div>
        <div class="page-item page-link">1</div>
        <div class="page-item page-link">2</div>
        <div class="page-item page-link bg-primary text-white">3</div>
        <div class="page-item page-link">4</div>
        <div class="page-item page-link">5</div>
        <div class="page-item page-link">...</div>
        <div class="page-item page-link">6</div>
        <div class="page-item page-link">7</div>
        <div class="page-item page-link">8</div>
        <div class="page-item page-link">9</div>
        <div class="page-item page-link">10</div>
        <div class="page-item page-link">siguiente</div>
        <div class="page-item"><span class="page-link">último</span></div>
    </div>
  </div>

  <table id="tabla" class="table table-borderless table-hover table-sm w-auto">
    <thead class="bg-success  text-white">
      <tr>
        @foreach ($cabecera as $cabecera_item)
          <th scope="col">{{$cabecera_item}}</th>
        @endforeach

        <th scope="col" class="d-flex flex-row justify-content-end">
          <button type="button" class="btn btn-primary btn-sm m-1">Actualizar</button>
          <button type="button" class="btn btn-primary btn-sm m-1">Nuevo +</button>
        </th>
      </tr>
    </thead>
    <tbody>
        @foreach ($datos['data'] as $datos_item)
          <tr>
            <td>{{$datos_item['id_coordenada']}}</td>
            <td>{{$datos_item['id_vehiculo']}}</td>
            <td>{{$datos_item['fechora']}}</td>
            <td>{{$datos_item['lat']}}</td>
            <td>{{$datos_item['long']}}</td>
            <td>{{$datos_item['est']}}</td> 
            <td>{{$datos_item['obs']}}</td>
            <td class="d-flex flex-row justify-content-center align-items-center p-1">
              <button type="button" class="btn btn-outline-success btn-sm m-1">detalles</button>
              <button type="button" class="btn btn-outline-warning btn-sm m-1">actualizar</button>
              <button type="button" class="btn btn-outline-danger btn-sm m-1">eliminar</button>
            </td>
          </tr>  
        @endforeach
    </tbody>
  </table>
</div>
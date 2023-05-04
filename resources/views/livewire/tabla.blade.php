<div class="container-fluid">
  <div class="row m-1">
      <div class="col-3">

      </div>

      <div class="col">
        <div class="row">
          <div class="col">
            <nav aria-label="...">
              <ul class="pagination">
                <li class="page-item disabled">
                  <span class="page-link">anterior</span>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item active" aria-current="page">
                  <span class="page-link">2</span>
                </li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">4</a></li>
                <li class="page-item"><a class="page-link" href="#">5</a></li>
                <li class="page-item"><a class="page-link" href="#">...</a></li>
                <li class="page-item"><a class="page-link" href="#">6</a></li>
                <li class="page-item"><a class="page-link" href="#">7</a></li>
                <li class="page-item"><a class="page-link" href="#">8</a></li>
                <li class="page-item"><a class="page-link" href="#">9</a></li>
                <li class="page-item"><a class="page-link" href="#">10</a></li>
                <li class="page-item"><a class="page-link" href="#">último</a></li>
                <li class="page-item">
                  <a class="page-link" href="#">siguiente</a>
                </li>
              </ul>
            </nav>
          </div>

          <div class="col">
            <button type="button" class="btn btn-outline-success btn-sm m-1"
                  wire:click="CargarDatos('http://localhost/gps/public/api/coordenadas/1/all')">
            Actualizar
          </button>

          <button type="button" class="btn btn-outline-success btn-sm m-1"
            wire:click="CargarDatos('http://localhost/gps/public/api/coordenadas/1/all')">
              Nuevo +
          </button>
          </div>
        </div>

        <div class="row">
          <table class="table table-borderless table-hover table-sm">
            <thead class="bg-primary  text-white">
              <tr>
                @foreach ($cabecera as $cabecera_item)
                  <th scope="col">{{$cabecera_item}}</th>
                @endforeach
        
                <th scope="col">Acciones</th>
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
                    <td class="d-flex flex-row justify-content-center"><button type="button" class="btn btn-outline-primary">...</button></td>
                  </tr>  
                @endforeach
            </tbody>
          </table>
        </div>
      </div>
      
      <div class="col-8 d-flex flex-row justify-content-start align-items-center">
        <form class="d-flex flex-row justify-content-start align-items-center">
          <input type="text" class="form-control m-1" value='ID coordenada'>
          <input type="text" class="form-control m-1" value='ID coordenada'>
          <button type="submit" class="btn btn-outline-primary btn-sm m-1">Buscar</button>
        </form>
      </div>
  </div>
</div>
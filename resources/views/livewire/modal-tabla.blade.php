<div id="modal-tabla" class="modal fade" tabindex="-1" data-backdrop="static">
    <div class="modal-dialog modal-dialog-scrollable modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Coordenada del vehículo tal (editable).</h5>
            </div>

            <div class="modal-body">
                <form class="d-flex flex-row flex-wrap justify-content-start align-items-top">
                    <div class="form-group m-1">
                      <label for="formGroupExampleInput">ID coordenada</label>
                      
                      <input disabled type="text" class="form-control form-control-sm" id="formGroupExampleInput" placeholder="ejemplo: 10" value={{$datos['id_coordenada']}}>
                    </div>

                    <div class="form-group m-1">
                      <label for="formGroupExampleInput2">Fecha y hora</label>
                      
                      <input type="text" class="form-control form-control-sm" id="formGroupExampleInput2" placeholder="ejemplo: 2023-04-31 10:50:00">
                    </div>

                    <div class="form-group m-1">
                        <label for="formGroupExampleInput2">Latitud</label>
                        
                        <input type="text" class="form-control form-control-sm" id="formGroupExampleInput2" placeholder="ejemplo: 47.475813">
                    </div>

                    <div class="form-group m-1">
                        <label for="formGroupExampleInput2">Longitud</label>
                        
                        <input type="text" class="form-control form-control-sm" id="formGroupExampleInput2" placeholder="ejemplo: 47.475813">
                    </div>

                    <div class="form-check m-1">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                        
                        <label class="form-check-label" for="defaultCheck1">
                          Activado
                        </label>
                    </div>

                    <div class="form-group ml-5 w-50">
                        <label for="exampleFormControlTextarea1">Observaciones</label>
                        
                        <textarea class="form-control form-control-sm" id="exampleFormControlTextarea1"></textarea>
                      </div>
                </form>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Eliminar</button>
                
                <button wire:click='CargarDatos(88)' type="button" class="btn btn-primary">Guardar</button>

                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>
            

            <!--START OF MODAL-->
            <div class="modal fade" id="modalEditarDispositivo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-md">
                    <div class="modal-content">
                    
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
                          <!-- TITULO -->
                          <h3 id="cabeceraModalSubProcesos"type="hidden" class="modal-title subfuente text-center">Configuración de Dispositivo</h3>
                        </div>

                        <div class="modal-body">
                            <!-- CONTENIDO DE MODAL -->

                            <div class="table-responsive">
                                <div class="col-md-12">
                                    <div class="panel panel-success ">
                                        <div class="row">
                                            <div class="form-group ">
                                                <label for="tituloPanel" class="col-lg-3 col-md-3 col-md-offset-1 control-label">Código Dispositivo:</label>
                                                <div class="col-lg-7 col-md-7">
                                                  <input type="text" class="form-control" id="tituloPanel" disabled>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group ">
                                                <label for="tituloPanel" class="col-lg-3 col-md-3 col-md-offset-1 control-label">Descripción:</label>
                                                <div class="col-lg-7 col-md-7">
                                                  <input type="text" class="form-control" id="tituloPanel">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group">
                                                <label for="tituloPanel" class="col-lg-3 col-md-3 col-md-offset-1 control-label">Tipo Identificador:</label>
                                                <div class="col-lg-7 col-md-7">
                                                    <select class="form-control" >
                                                        <option>Vitrina</option>
                                                        <option>Linea de tiempo</option>
                                                    </select>
                                                </div>                        
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group">
                                                <label class="col-lg-3 col-md-3 col-md-offset-1 control-label">Sala:</label>
                                                <div class="col-lg-7 col-md-7">
                                                    <select class="form-control" >
                                                        <option>Sala 1</option>
                                                        <option>Sala 2</option>
                                                    </select>
                                                </div>                        
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group">
                                                <label class="col-lg-3 col-md-3 col-md-offset-1 control-label">Estado:</label>
                                                <div class="col-lg-7 col-md-7">
                                                    <label class="radio-inline">
                                                        <input type="radio" name="optionsRadiosInline" id="optionsRadiosInline1" value="A" checked>Activo
                                                    </label>
                                                    <label class="radio-inline">
                                                        <input type="radio" name="optionsRadiosInline" id="optionsRadiosInline2" value="I">Inactivo
                                                    </label>
                                                </div>                        
                                            </div>
                                        </div>
                                    </div>  

                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-3 col-md-offset-2">
                                    <button class="btn btn-block btn-info" onClick=""data-dismiss="modal">Cancelar</button> 
                                </div>
                                <div class="col-md-3 col-md-offset-2">
                                    <button class="btn btn-block btn-primary" onClick="">Eliminar</button> 
                                </div>
                            </div>

                            <!-- FIN CONTENIDO DE MODAL -->
                        </div>

                    </div>
                </div>
            </div>
            <!--END OF MODAL-->
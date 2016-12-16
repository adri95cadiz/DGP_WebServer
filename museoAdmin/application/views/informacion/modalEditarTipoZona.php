 <!--START OF MODAL-->
            <div class="modal fade" id="modalEditarTipoZona" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                    
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
                          <!-- TITULO -->
                          <h3 id="cabeceraModalSubProcesos"type="hidden" class="modal-title subfuente text-center">Configuración de Zona</h3>
                        </div>

                        <div class="modal-body">
                            <!-- CONTENIDO DE MODAL -->
                            <div class="row">
                                <form role="form" class="form-horizontal">                                    
                                    <div class="form-group ">
                                        <label for="txtDescripcionModal" class="col-lg-3 col-md-3 control-label">Descripción:</label>
                                        <div class="col-lg-8 col-md-8">
                                          <input type="text" class="form-control" id="txtDescripcionModal">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="cboTipoIdentificadorModal" class="col-lg-3 col-md-3 control-label">Id:</label>
                                        <div class="col-lg-8 col-md-8">
                                          <input type="text" class="form-control" id="txtDescripcionModal">
                                        </div>                      
                                    </div>
                                    <div class="form-group">
                                        <label class="col-lg-3 col-md-3 control-label">Estado:</label>
                                        <div class="col-lg-7 col-md-7">
                                            <label class="radio-inline">
                                                <input type="radio" name="optionsRadiosInline" id="optionsRadiosInline1" value="A" checked>Activo
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="optionsRadiosInline" id="optionsRadiosInline2" value="I">Inactivo
                                            </label>
                                        </div>                        
                                    </div>
                                </form>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-3 col-md-offset-2">
                                    <button class="btn btn-block btn-default" onClick="">Cancelar</button> 
                                </div>
                                <div class="col-md-3 col-md-offset-2">
                                    <button class="btn btn-block btn-success" data-dismiss="modal">Aceptar</button> 
                                </div>
                            </div>

                            <!-- FIN CONTENIDO DE MODAL -->
                        </div>

                    </div>
                </div>
            </div>
            <!--END OF MODAL-->
<!--START OF MODAL-->
            <div class="modal fade" id="modalEditarTipoZona" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-md">
                    <div class="modal-content">
                    
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
                          <!-- TITULO -->
                          <h3 id="cabeceraModalSubProcesos"type="hidden" class="modal-title subfuente text-center">Actualización de tipos de zonas</h3>
                        </div>

                        <div class="modal-body">
                            <!-- CONTENIDO DE MODAL -->
                            <div class="content">
                                <div class="row">
                                    <div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-12 col-xs-12">
                                        <form role="form" class="form-horizontal">
                                            <div class="form-group ">
                                                <label for="txtEditDescription" class="col-lg-3 col-md-3 col-sm-3 control-label">Descripción:</label>
                                                <div class="col-lg-8 col-md-8 col-sm-8">
                                                    <input type="text" class="hidden" id="txtEditId" hidden>
                                                    <input type="text" class="form-control" id="txtEditDescription">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-3 col-md-3 control-label col-sm-3">Estado:</label>
                                                <div class="col-lg-7 col-md-7 col-sm-8">
                                                    <label class="radio-inline">
                                                        <input type="radio" name="rbEditEstado" id="rbEditEstadoA" value="A" checked>Activo
                                                    </label>
                                                    <label class="radio-inline">
                                                        <input type="radio" name="rbEditEstado" id="rbEditEstadoI" value="I">Inactivo
                                                    </label>
                                                </div>                        
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-md-3 col-md-offset-2 col-sm-4 col-sm-offset-1">
                                        <button class="btn btn-block btn-default" data-dismiss="modal">Cancelar</button> 
                                    </div>
                                    <div class="col-md-3 col-md-offset-2 col-sm-4 col-sm-offset-2">
                                        <button class="btn btn-block btn-success" onClick="ajaxEditarTipoZona('<?php echo base_url(); ?>');">Aceptar</button> 
                                    </div>
                                </div>
                            </div>
                            <!-- FIN CONTENIDO DE MODAL -->
                        </div>

                    </div>
                </div>
            </div>
            <!--END OF MODAL-->
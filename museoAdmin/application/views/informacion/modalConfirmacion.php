            

            <!--START OF MODAL-->
            <div class="modal fade" id="modalConfirmacion" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-md">
                    <div class="modal-content">
                    
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
                          <!-- TITULO -->
                          <h3 id="cabeceraModalSubProcesos"type="hidden" class="modal-title subfuente text-center">¡Cuidado!</h3>
                        </div>

                        <div class="modal-body">
                            <!-- CONTENIDO DE MODAL -->

                            <div class="table-responsive">
                                <div class="col-md-12">
                                    <div class="panel panel-success">
                                        <div class="row">
                                            <div class="form-group col-md-4">
                                                <img src="<?php echo base_url(); ?>assets/images/alerta.png" width="100%">
                                            </div>
                                            <div class="form-group col-md-8">
                                                <label for="multimediaPanel" class="text-center lead control-label">¿Está seguro que quiere eliminar este archivo?</label>
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
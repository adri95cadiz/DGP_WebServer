            

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

                            
                                        <div class="row">
                                            <div class="form-group col-md-3 col-md-offset-1">
                                                <img src="<?php echo base_url(); ?>assets/images/alerta.png" width="100%" id="multimediaPanel">
                                            </div>
                                            <div class="form-group col-md-8">
                                                <div class="row">
                                                    <div class="col-md-10">
                                                        <label for="multimediaPanel" class="text-center lead control-label" id="modalAlertaMensaje">¿Está seguro que desea continuar?</label>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <button class="btn btn-block btn-default" id="btnAceptarModalAlerta">Aceptar</button> 
                                                    </div>
                                                    <div class="col-md-5 col-md-offset-1">
                                                        <button class="btn btn-block btn-primary" data-dismiss="modal">Cancelar</button> 
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                            

                            <!-- FIN CONTENIDO DE MODAL -->
                        </div>

                    </div>
                </div>
            </div>
            <!--END OF MODAL-->
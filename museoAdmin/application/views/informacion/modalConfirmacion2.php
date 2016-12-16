    

    <!--START OF MODAL-->
    <div class="modal fade" id="modalConfirmacion2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
            
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
                  <!-- TITULO -->
                  <h3 id="cabeceraModalConfirmacion2"type="hidden" class="modal-title subfuente text-center">¡Advertencia!</h3>
                </div>

                <div class="modal-body">
                    <!-- CONTENIDO DE MODAL -->
                    <div class="row">
                        <div class="form-group col-md-3" style="padding-right: 0px;">
                            <img src="<?php echo base_url(); ?>assets/images/alertaroja.png" width="100%" id="modalConf2Img">
                        </div>
                        <div class="form-group col-md-9" style="padding-left: 0px;">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="text-center lead" id="modalAlerta2Mensaje">¿Está seguro que desea continuar?</div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-5">
                                    <button class="btn btn-block btn-default" id="btnAceptarModalAlerta2">ELIMINAR</button> 
                                </div>
                                <div class="col-md-5 col-md-offset-1">
                                    <button class="btn btn-block btn-primary" data-dismiss="modal">CANCELAR</button> 
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

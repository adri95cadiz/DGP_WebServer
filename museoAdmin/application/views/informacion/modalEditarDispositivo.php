            

            <!--START OF MODAL-->
            <div class="modal fade" id="modalEditarDispositivo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                    
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
                          <!-- TITULO -->
                          <h3 id="cabeceraModalSubProcesos"type="hidden" class="modal-title subfuente text-center">Configuración de Dispositivo</h3>
                        </div>

                        <div class="modal-body">
                            <!-- CONTENIDO DE MODAL -->
                            <div class="row">
                                <form role="form" class="form-horizontal">                                    
                                    <div class="form-group ">
                                        <label for="txtIdZonaEdit" class="col-lg-3 col-md-3 control-label">Código Dispositivo:</label>
                                        <div class="col-lg-8 col-md-8">
                                            <input type="text" class="form-control hidden" id="txtIdZonaEdit" value="" disabled hidden>
                                            <p class="form-control-static mb-0" id="textIdZonaEdit"></p>
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="txtDescripcionEdit" class="col-lg-3 col-md-3 control-label">Descripción:</label>
                                        <div class="col-lg-8 col-md-8">
                                          <input type="text" class="form-control" id="txtDescripcionEdit">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="cboTipoZonaEdit" class="col-lg-3 col-md-3 control-label">Tipo de Zona:</label>
                                        <div class="col-lg-8 col-md-8">
                                            <select class="form-control" id="cboTipoZonaEdit">
                                            <?php 
                                                if(isset($elements)){
                                                    if($elements<>0){
                                                        foreach ($elements as $row) {
                                                            echo '<option value="'.$row['ELEid'].'">'.$row['ELEdescription'].'</option>';
                                                        }
                                                    }
                                                }
                                             ?>
                                        </select>
                                        </div>                        
                                    </div>
                                    <div class="form-group">
                                        <label for="cboSalaEdit" class="col-lg-3 col-md-3 control-label" >Sala:</label>
                                        <div class="col-lg-8 col-md-8">
                                            <select class="form-control" id="cboSalaEdit">
                                            <?php 
                                                if(isset($salas)){
                                                    if($salas<>0){
                                                        foreach ($salas as $row) {
                                                            echo '<option value="'.$row['ROOid'].'">'.$row['ROOdescription'].'</option>';
                                                        }
                                                    }
                                                }
                                             ?>
                                        </select>
                                        </div>                        
                                    </div>
                                    <div class="form-group">
                                        <label class="col-lg-3 col-md-3 control-label">Estado:</label>
                                        <div class="col-lg-7 col-md-7">
                                            <label class="radio-inline">
                                                <input type="radio" name="rbEstadoEdit" id="rbEstadoA" value="A" checked>Activo
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="rbEstadoEdit" id="rbEstadoI" value="I">Inactivo
                                            </label>
                                        </div>                        
                                    </div>
                                </form>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-3 col-md-offset-2">
                                    <button class="btn btn-block btn-default" data-dismiss="modal">CANCELAR</button> 
                                </div>
                                <div class="col-md-4 col-md-offset-1">
                                    <button class="btn btn-block btn-success" onClick="editarZona('<?php echo base_url(); ?>');">GUARDAR CAMBIOS</button> 
                                </div>
                            </div>
                            <br>
                            <!-- FIN CONTENIDO DE MODAL -->
                        </div>

                    </div>
                </div>
            </div>
            <!--END OF MODAL-->
        

        <!--START OF MODAL-->
        <div class="modal fade" id="modalDisability" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-md">
                <div class="modal-content">
                
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
                      <!-- TITULO -->
                      <h4 type="hidden" class="modal-title subfuente text-center">Adjuntar Archivo Multimedia</h4>
                    </div>

                    <div class="modal-body">
                        <!-- CONTENIDO DE MODAL -->
                        <br>
                        <div class="row form-group">
                            <label for="multimediaPanel" class="col-lg-4 col-md-5 control-label">Archivo multimedia:</label>
                            <div class="col-lg-8 col-md-7">
                              <input type="file" name="fileMultimedia" class="fileControl">
                            </div>
                        </div>
                        <div class="row form-group">
                                <label class="col-lg-4 col-md-5 control-label">Archivo disponible para:</label>
                                <div class="col-lg-8 col-md-7">
                                    <?php 
                                    if(isset($necesidades)){
                                        if($necesidades){
                                            foreach ($necesidades as $row) { ?>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox"  value="<?php echo $row['FEAid'] ?>"><?php echo $row['FEAdescription'] ?>
                                                    </label>
                                                </div>
                                            <?php
                                            }
                                        }
                                    } ?>
                                </div>
                        </div>
            
                        <div class="row">
                            <div class="col-md-3 col-md-offset-2">
                                <button class="btn btn-block btn-info" onClick=""data-dismiss="modal">Cancelar</button> 
                            </div>
                            <div class="col-md-3 col-md-offset-2">
                                <button class="btn btn-block btn-primary" onClick="">Añadir</button> 
                            </div>
                        </div>

                        <!-- FIN CONTENIDO DE MODAL -->
                    </div>

                </div>
            </div>
        </div>
        <!--END OF MODAL-->
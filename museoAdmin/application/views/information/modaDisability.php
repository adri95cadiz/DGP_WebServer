            

            <!--START OF MODAL-->
            <div class="modal fade" id="modalCaracterizacion" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                    
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
                          <!-- TITULO -->
                          <h3 id="cabeceraModalSubProcesos"type="hidden" class="modal-title subfuente text-center">Hoja de Caracterización de Proceso</h3>
                        </div>

                        <div class="modal-body">
                            <!-- CONTENIDO DE MODAL -->

                            <div class="table-responsive">
                                <div class="col-md-12">
                                    <table class="table table-bordered">
                                        <!-- Proceso y responsable  -->
                                        <thead>
                                            <tr class="active">
                                                <td style="vertical-align: middle;" colspan="3" width="50%">
                                                    <b>PROCESO: </b><label id="proceso"></label>
                                                </td>
                                            </tr>
                                        </thead>
                                        <tbody>                                   
                                            <!-- Entradas -->
                                            <tr>
                                                <td style="vertical-align: middle;" width="15%">
                                                    Entradas
                                                </td>
                                                <td style="vertical-align: middle;" colspan="3">
                                                    <input type="text" class="form-control sinborde" id="txtEntrada" name="txtEntrada">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="vertical-align: middle;" width="15%">
                                                    Proveedores
                                                </td>
                                                <td style="vertical-align: middle;" colspan="3">
                                                    <input type="text" class="form-control sinborde" id="txtProveedor" name="txtProveedor">
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-3 col-md-offset-8">
                                    <input type="text" id="txtCodProcesoModal" hidden readonly="true">
                                    <button class="btn btn-block btn-primary" onClick="setCaracteristicas('<?php echo base_url(); ?>');">GUARDAR</button>   <!-- id="btnSaveCaracterizacion" -->
                                </div>
                            </div>

                            <!-- FIN CONTENIDO DE MODAL -->
                        </div>

                    </div>
                </div>
            </div>
            <!--END OF MODAL-->
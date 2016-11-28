
        <?php 
        if(isset($dispositivo)){
            if($dispositivo){
                foreach ($dispositivo->result() as $ddispositivo) {
                    $ELEid=$ddispositivo->ELEid;
                    $ELEdescription=$ddispositivo->ELEdescription;
                    $ZONid=$ddispositivo->ZONid;
                    $ZONdescription=$ddispositivo->ZONdescription;
                }
            }
        } ?>

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="row page-header">
                        <form role="form" method="POST" class="form-horizontal" action="<?php echo base_url();?>index.php/admin/tipoDispositivo" >
                            <input type="text" name="ELEid" value="<?php echo $ELEid; ?>" hidden>
                            <input type="text" name="ELEdescription" value="<?php echo $ELEdescription; ?>" hidden>
                            <input type="text" name="ZONid" value="<?php echo $ZONid; ?>" hidden>
                            <h1>
                                <button type="submit" class="btn btn-circle btn-lg btn-default"> <i class="fa fa-arrow-left"></i> </button>
                                Registro de Paneles
                            </h1>
                        </form>
                    </div>

                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <br>
                <div class="row">
                    <div class="col-lg-10 col-lg-offset-1">
                        <div class="row">
                            <div class="col-lg-6 col-md-8 col-sm-8 col-xs-12">
                                <form class="form-horizontal" role="form">
                                    <div class="form-group">
                                        <label for="txtNFCid" class="col-lg-4 col-md-5 col-sm-5 col-xs-12 control-label">Codigo NFC:</label>
                                        <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                            <input type="text" class="form-control hidden" id="txtNFCid" value="<?php echo '004'; ?>" disabled hidden>
                                            <p class="form-control-static mb-0"><?php echo '004'; ?></p>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="imagenPanel" class="col-lg-4 col-md-5 col-sm-5 col-xs-12 control-label">Imagen del Evento:</label>
                                        <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                          <input type="file">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-lg-4 col-md-5 col-sm-5 col-xs-12 control-label">Idioma:</label>
                                        <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                            <select class="form-control" >
                                                <option>Español</option>
                                                <option>Ingles</option>
                                                <option>Frances</option>
                                                <option>Aleman</option>
                                                <option>Italiano</option>
                                            </select>
                                        </div>                        
                                    </div>
                                </form>
                            </div>
                            <div class="col-lg-6 col-md-4 col-sm-4 col-xs-12">
                                <div class="img-responsive">
                                    <img src="hello.jpg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="panel panel-success">
                                <div class="panel-heading">
                                    <b id="idiomaSeleccionadoTittle">-- Seleccionar idioma -- </b>
                                </div>
                                <div class="panel-body" style="padding: 30px;">
                                    <div class="row">
                                        <form role="form" class="form">
                                            <div class="form-group">
                                                <label for="tituloPanel" class="control-label">Titulo:</label>
                                                <div class="">
                                                  <input type="text" class="form-control" id="tituloPanel">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="subtituloPanel" class="control-label">Subtitulo:</label>
                                                <div class="">
                                                  <input type="text" class="form-control" id="subtituloPanel">
                                                </div>
                                            </div>  
                                            <div class="form-group">
                                                <label for="descripcionPanel" class="control-label">Descripción:</label>
                                                <div class="">
                                                  <textarea style="resize: none" class="form-control" rows="3" id="descripcionPanel"></textarea>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="row">
                                            <form role="form" class="form-horizontal">
                                                <div class="form-group">
                                                    <label for="multimediaPanel" class="col-lg-3 col-md-5 col-sm-7 col-xs-7 control-label">Adjuntar archivo multimedia:</label>
                                                    <div class="col-lg-9 col-md-7 col-sm-5 col-xs-5">
                                                      <button type="button" id="multimediaPanel" onClick="openDisability('<?php echo base_url(); ?>')" class="btn btn-success btn-circle"><i class="fa fa-plus"></i> 
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="table-responsive">
                                                <table class="table table-hover">
                                                    <thead>
                                                      <tr>
                                                        <th>Posición</th>
                                                        <th>Nombre archivo</th>
                                                        <th>Discapacidades</th>
                                                        <th>Descargar</th>
                                                        <th>Borrar</th>
                                                      </tr>
                                                    </thead>
                                                    <tbody>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->


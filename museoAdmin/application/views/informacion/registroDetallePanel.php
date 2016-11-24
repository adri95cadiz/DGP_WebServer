
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
                        <form role="form" method="POST" class="form-horizontal" action="<?php echo base_url();?>index.php/admin/registroPanel" >
                            <input type="text" name="txtZONid" id="txtZONid" value="<?php echo $ZONid; ?>" hidden>
                            <input type="text" name="txtPANid" id="txtPANid" value="<?php echo $PANid; ?>" hidden>
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
                            <div class="col-lg-7 col-md-8 col-sm-8 col-xs-12">
                                <form class="form-horizontal" role="form">
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <big>
                                        <b><p>Datos de dispositivo:</p></b>
                                        </big>
                                    </div>
                                    <div class="form-group">
                                        <label for="txtNFCid" class="col-lg-4 col-md-5 col-sm-5 col-xs-12 control-label">Codigo dispositivo:</label>
                                        <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                            <input type="text" class="form-control hidden" id="txtNFCid" value="<?php echo '004'; ?>" disabled hidden>
                                            <p class="form-control-static mb-0"><?php echo $ZONid; ?></p>
                                        </div>
                                        <label class="col-lg-4 col-md-5 col-sm-5 col-xs-12 control-label">Tipo de zona:</label>
                                        <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                            <p class="form-control-static mb-0"><?php echo $ELEdescription; ?></p>
                                        </div>
                                        <label for="txtNFCid" class="col-lg-4 col-md-5 col-sm-5 col-xs-12 control-label">Descripción de zona:</label>
                                        <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                            <p class="form-control-static mb-0"><?php echo $ZONdescription; ?></p>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <big>
                                        <b><p>Datos del panel:</p></b>
                                        </big>
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
                                            <select class="form-control" id="cboIdioma" onchange="seleccionarIdioma('<?php echo base_url(); ?>');">
                                                <?php 
                                                    $idioma=' -- Seleccionar idioma -- ';
                                                    if(isset($idiomas)){
                                                        if($idiomas){
                                                            $flag=1;
                                                            foreach ($idiomas as $row) {
                                                                if($flag==1){
                                                                    $idioma=$row['LANdescription'];
                                                                }
                                                                $flag=0;
                                                                echo '<option value="'.$row['LANid'].'">'.$row['LANdescription'].'</option>';
                                                            }
                                                        }
                                                    }
                                                 ?>
                                            </select>
                                        </div>                        
                                    </div>
                                </form>
                            </div>
                            <div class="col-lg-5 col-md-4 col-sm-4 col-xs-12">
                                <div class="img-responsive">
                                    <img src="hello.jpg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="panel panel-success">
                                <div class="panel-heading">
                                    <big><b id="idiomaSeleccionadoTittle"> <?php echo $idioma; ?> </b></big>
                                </div>
                                <div class="panel-body" style="padding: 30px;">
                                    <div class="row">
                                        <form role="form" class="form">
                                            <div class="form-group">
                                                <label for="txtTitulo" class="control-label">Titulo:</label>
                                                <div class="">
                                                  <input type="text" class="form-control" id="txtTitulo">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="txtSubtitulo" class="control-label">SubTitulo:</label>
                                                <div class="">
                                                  <input type="text" class="form-control" id="txtSubtitulo">
                                                </div>
                                            </div>  
                                            <div class="form-group">
                                                <label for="txtDescripcion" class="control-label">Descripción:</label>
                                                <div class="">
                                                  <textarea style="resize: none" class="form-control" rows="3" id="txtDescripcion"></textarea>
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
                                                        <th>Borrar</th>
                                                      </tr>
                                                    </thead>
                                                    <tbody>
                                                      <tr>
                                                        <td>1</td>
                                                        <td>Videogestual.mp4</td>
                                                        <td>sordo,sin dicapacidad</td>
                                                        <td>
                                                            <button type="button" class="btn btn-danger btn-circle" onClick="confirmacionEliminar('<?php echo base_url(); ?>')"><i class="fa fa-times"></i></button>
                                                        </td>
                                                      </tr>
                                                      <tr>
                                                        <td>2</td>
                                                        <td>Videoexplicativo.mp4</td>
                                                        <td>sin discapacidad</td>
                                                        <td>
                                                            <button type="button" class="btn btn-danger btn-circle" onClick="confirmacionEliminar('<?php echo base_url(); ?>')"><i class="fa fa-times"></i></button>
                                                        </td>
                                                      </tr>
                                                      <tr>
                                                        <td>3</td>
                                                        <td>audio.mp3</td>
                                                        <td>ciego</td>
                                                        <td>
                                                            <button type="button" class="btn btn-danger btn-circle" onClick="confirmacionEliminar('<?php echo base_url(); ?>')"><i class="fa fa-times"></i></button>
                                                        </td>
                                                      </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">   
                                        <div class="col-lg-3 col-md-3 col-sm-5 col-xs-12 col-lg-offset-9 col-md-offset-9 col-sm-offset-7">
                                            <button id="btnGuardarDetallePanel" class="btn btn-success btn-lg" onclick="guardarDetallePanel('<?php echo base_url(); ?>', '<?php echo $ZONid; ?>', '<?php echo $PANid; ?>');">GUARDAR CAMBIOS</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-2 btn-md-3 col-lg-offset-10 col-md-offset-9">
                                <form role="form" method="POST" class="form-horizontal" action="<?php echo base_url();?>index.php/admin/registroPanel" >
                                    <input type="text" name="txtZONid" value="<?php echo $ZONid; ?>" hidden>
                                    <input type="text" name="txtPANid" id="txtPANid" value="<?php echo $PANid; ?>" hidden>
                                    <button type="submit" class="btn btn-lg btn-default btn-block"> <i class="fa fa-arrow-left"></i> &nbsp VOLVER </button>
                                </form>
                            </div>
                        </div>
                        <br>
                        <br>

                    </div>
                </div>
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->



        <?php 
        if(isset($dispositivo)){
            if($dispositivo){
                foreach ($dispositivo as $row) {
                    $ELEid=$row['ELEid'];
                    $ELEdescription=$row['ELEdescription'];
                    $ZONid=$row['ZONid'];
                    $ZONdescription=$row['ZONdescription'];
                }
            }
        } 
        //Inicialización de variables
        $fileName='images/logo.png';
        $description='';
        //Verificar que exista una imagen ya registrada, si no hay, se queda con los valores por defecto
        if(isset($imagen)){
            if(count($imagen)>0 or $imagen!='0'){
                foreach ($imagen as $row) {
                    $fileName=$row['fileName'];
                    $description=$row['description'];
                }
            }
        }
        ?>

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
                                    <div class="row">
                                        <div for="txtNFCid" class="col-lg-5 col-md-5 col-sm-6 col-xs-4 control-label">Codigo dispositivo:</div>
                                        <div class="col-lg-7 col-md-7 col-sm-6 col-xs-8">
                                            <input type="text" class="form-control hidden" id="txtNFCid" value="<?php echo $ZONid; ?>" disabled hidden>
                                            <p class="form-control-static mb-0"><?php echo $ZONid; ?></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-5 col-md-5 col-sm-6 col-xs-4 control-label">Tipo de zona:</div>
                                        <div class="col-lg-7 col-md-7 col-sm-6 col-xs-8">
                                            <p class="form-control-static mb-0"><?php echo $ELEdescription; ?></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-5 col-md-5 col-sm-6 col-xs-4 control-label">Descripción de zona:</div>
                                        <div class="col-lg-7 col-md-7 col-sm-6 col-xs-8">
                                            <p class="form-control-static mb-0"><?php echo $ZONdescription; ?></p>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <big>
                                        <b><p>Datos del panel:</p></b>
                                        </big>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-5 col-md-5 col-sm-6 col-xs-4 control-label">Idioma:</div>
                                        <div class="col-lg-7 col-md-7 col-sm-6 col-xs-8">
                                            <select class="form-control" id="cboIdioma" onload="seleccionarIdioma('<?php echo base_url(); ?>');" onchange="seleccionarIdioma('<?php echo base_url(); ?>');">
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
                                <br>
                            </div>
                            <div class="col-lg-5 col-md-4 col-sm-4 col-xs-12">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                      <input type="file" id="fileImagen" name="fileImagen" onchange="mostrarImagen(this);">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="img-responsive text-center" style="height: 149px; padding: 7px 15px;">
                                        <img  alt="Imagen temporal del panel de información." style="max-height: 100%; max-width:100%" id="imagenPanel"
                                            src="<?php echo base_url(); ?>assets/<?php 
                                                if(isset($fileName) or $fileName!=''){
                                                    echo $fileName; 
                                                }else{
                                                    echo 'images/logo.png'; 
                                                }
                                            ?>"
                                        >
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" >
                                        <div class="input-group" style="border-top: 10px; border-bottom: 10px;">
                                            <input type="text" style="height: 34px;" class="form-control" id="txtImgDescription" name="txtImgDescription" placeholder="Descripción de la imagen" value="<?php if(isset($description)){ echo $description; } ?>" >
                                            <span class="input-group-btn">
                                                <button class="btn btn-default" style="height: 34px;" type="button" onclick="guardarImagen('<?php echo base_url(); ?>', '<?php echo $ZONid; ?>', '<?php echo $PANid; ?>');">
                                                    <i class="fa fa-save"></i> 
                                                </button>
                                            </span>
                                        </div><!-- /input-group -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
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
                                    <div class="row">   
                                        <div class="col-lg-4 col-md-5 col-sm-6 col-xs-12 col-lg-offset-8 col-md-offset-7 col-sm-offset-6">
                                            <button id="btnGuardarDetallePanel" class="btn btn-success btn-lg" onclick="guardarDetallePanel('<?php echo base_url(); ?>', '<?php echo $ZONid; ?>', '<?php echo $PANid; ?>');">GUARDAR CAMBIOS &nbsp <i class="fa fa-save"></i></button>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="row">
                                            <form role="form" class="form-horizontal">
                                                <div class="form-group">
                                                    <label for="multimediaPanel" class="col-lg-4 col-md-6 col-sm-7 col-xs-8 control-label">Adjuntar archivo multimedia:</label>
                                                    <div class="col-lg-8 col-md-6 col-sm-5 col-xs-4">
                                                      <button type="button" id="multimediaPanel" onClick="openDisability('<?php echo base_url(); ?>')" class="btn btn-success btn-circle"><i class="fa fa-plus"></i> 
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="table-responsive">
                                                <table class="table table-hover" id="tblMultimediaFiles">
                                                    <thead>
                                                      <tr>
                                                        <th>Posición</th>
                                                        <th>Nombre archivo</th>
                                                        <th>Necesidades especiales</th>
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
                                    <br>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-offset-7 col-sm-5 col-lg-3 btn-md-5 col-xs-12 col-lg-offset-9 col-md-offset-7 ">
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


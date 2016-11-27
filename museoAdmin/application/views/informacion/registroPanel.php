
        <?php 
        if(isset($dispositivo)){
            if($dispositivo){
                foreach ($dispositivo as $row) {
                    $ELEdescription=$row['ELEdescription'];
                    $ZONdescription=$row['ZONdescription'];
                    $ELEid=$row['ELEid'];
                }
            }
        } ?>

        <!-- Page Content -->
        <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row page-header">
                <form role="form" method="POST" class="form-horizontal" action="<?php echo base_url();?>index.php/admin/tipoDispositivo" >
                    <input type="text" name="ELEid" value="<?php echo $ELEid; ?>" hidden>
                    <input type="text" name="ELEdescription" value="<?php echo $ELEdescription; ?>" hidden>
                    <h1>
                        <button type="submit" class="btn btn-circle btn-lg btn-default"> <i class="fa fa-arrow-left"></i> </button>
                        Registro de Paneles
                    </h1>
                </form>
            </div>
            <div class="col-lg-10 col-lg-offset-1 col-md-12">
                <br>
                <div class="row">
                    <div class="col-lg-9 col-md-8 col-sm-12 col-xs-12">
                        <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <big>
                                    <b><p>Datos de la zona:</p></b>
                                    </big>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-12">
                                    <i class="fa fa-angle-double-right"></i> <b>Código:</b> <?php echo $ZONid; ?>
                                </div>
                                <div class="col-lg-9 col-md-8 col-sm-12">
                                    <i class="fa fa-angle-double-right"></i> <b>
                                     de zona: </b> <?php echo $ELEdescription; ?>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <i class="fa fa-angle-double-right"></i> <b>Descripción: </b> <?php echo $ZONdescription; ?>
                                </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12">
                        <br>
                        <form role="form" method="POST" id="frmRegistroPanel" class="form-horizontal" action="<?php echo base_url();?>index.php/admin/registroDetallePanel">
                            <input type="text" name="ZONid" value="<?php echo $ZONid; ?>" hidden>
                            <input type="text" name="ELEid" value="<?php echo $ELEid; ?>" hidden>
                            <input type="text" name="PANid" id="PANidForm" value="<?php echo $PANid; ?>" hidden>
                            <button onClick="registrarPanel('<?php echo base_url(); ?>', '<?php echo $ZONid; ?>');" class="btn btn-block btn-success btn.lg"><i class="fa fa-plus"></i> &nbsp <big><b>Agregar panel </b></big></button>
                        </form>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <br>
                <div class="row">      
                    <div class="panel panel-default">
                        <div class="col-md-12 panel-heading">
                            <big><label class="panel-title ">Paneles asociados a esta zona</label></big>
                        </div>
                        <div class="panel-body">
                            <br>
                            <table class="table table-hover">
                                <thead>
                                  <tr>
                                    <th>Posición</th>
                                    <th>Titulo</th>
                                    <th>Subtitulo</th>
                                    <th>Editar</th>
                                    <th>Borrar</th>
                                  </tr>
                                </thead>
                                <tbody>
                                <?php 
                                    if(isset($paneles)){
                                        if($paneles){
                                            foreach ($paneles as $row) {
                                                $flag=$row['PANid'];
                                                if($flag!='0'){ ?>
                                                    <tr>
                                                        <td><?php echo $row['PANorder'] ?></td>
                                                        <td><?php echo $row['PDEtitle'] ?></td>
                                                        <td><?php echo $row['PDEsubTitle'] ?></td>
                                                        <td>
                                                            <form role="form" method="POST" id="frmEditPanel" class="form-horizontal" action="<?php echo base_url();?>index.php/admin/registroDetallePanel" >
                                                                <input type="text" name="ELEid" value="<?php echo $ELEid; ?>" hidden>
                                                                <input type="text" name="ZONid" value="<?php echo $row['ZONid']; ?>" hidden>
                                                                <input type="text" name="PANid" value="<?php echo $row['PANid']; ?>" hidden>
                                                                <button type="submit" class="btn btn-warning btn-circle btn-sm"><i class="fa fa-pencil"></i> </button>
                                                            </form>
                                                        </td>
                                                        <td>
                                                            <button type="button" class="btn btn-danger btn-circle" onClick="confirmacionEliminar('<?php echo base_url(); ?>')"><i class="fa fa-times"></i></button>
                                                        </td>
                                                      </tr>
                                                <?php
                                                }else{
                                                    echo '<tr><td colspan="5"><p>No se ha indicado en que idioma mostrar la información de los paneles.</p></td></tr>';
                                                    break;
                                                }
                                            }
                                        }else{?>
                                            <tr><td colspan="5"><p>No hay paneles registrados en esta zona.</p></td></tr>
                                        <?php
                                        }
                                    } 
                                ?>
                                </tbody>
                            </table>       
                        </div>
                    </div>                      
                      
                </div>
                <br>
                <div class="row">
                    <div class="col-lg-2 btn-md-3">
                        <form role="form" method="POST" class="form-horizontal" action="<?php echo base_url();?>index.php/admin/tipoDispositivo" >
                            <input type="text" name="ELEid" value="<?php echo $ELEid; ?>" hidden>
                            <input type="text" name="ELEdescription" value="<?php echo $ELEdescription; ?>" hidden>
                            <button type="submit" class="btn btl-lg btn-default"> <i class="fa fa-arrow-left"></i> &nbsp Volver </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /#page-wrapper -->


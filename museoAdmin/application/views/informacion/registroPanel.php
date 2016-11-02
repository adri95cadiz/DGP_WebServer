
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Registro de Paneles</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <div class="col-lg-10 col-lg-offset-1 col-md-12">
                    <br>
                    <div class="row">
                        <div class="col-lg-9 col-md-8 col-sm-12 col-xs-12">
                            <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <big>
                                        <b><p>Datos de dispositivo:</p></b>
                                        </big>
                                    </div>
                                    <?php 
                                    if(isset($dispositivo)){
                                        if($dispositivo){
                                            foreach ($dispositivo->result() as $ddispositivo) { ?>
                                                
                                                <div class="col-lg-3 col-md-4 col-sm-12">
                                                    <i class="fa fa-angle-double-right"></i> <b>Código:</b> <?php echo $ZONid; ?>
                                                </div>
                                                <div class="col-lg-9 col-md-8 col-sm-12">
                                                    <i class="fa fa-angle-double-right"></i> <b>Tipo de zona: </b> <?php echo $ddispositivo->ELEdescription; ?>
                                                </div>
                                                <div class="col-lg-12 col-md-12 col-sm-12">
                                                    <i class="fa fa-angle-double-right"></i> <b>Descripción: </b> <?php echo $ddispositivo->ZONdescription; ?>
                                                </div>
                                                <?php 
                                            }
                                        }
                                    } ?>
                                
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12">
                            <br>
                              <button type="button" onClick="" class="btn btn-block btn-success btn.lg"><i class="fa fa-plus"></i> &nbsp <big><b>Agregar panel </b></big></button>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <br>
                    <div class="row">      
                        <div class="panel panel-default">
                            <div class="col-md-12 panel-heading">
                                <big><label class="panel-title ">Paneles asociados a este dispositivo</label></big>
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
                                      <tr>
                                        <td>1</td>
                                        <td>1942</td>
                                        <td>El tractor moderniza el campo</td>
                                        <td>
                                            <form role="form" method="POST" id="frmEdit-1" class="form-horizontal" action="<?php echo base_url();?>index.php/admin/registroDetallePanel" >
                                                <!-- <input type="text" name="ZONid" text="<?php //echo $dzones->ZONid; ?>" hidden>
                                                <input type="text" name="PANid" text="<?php //echo $dzones->PANid; ?>" hidden> -->
                                                <input type="text" name="ZONid" text="1" hidden>
                                                <input type="text" name="PANid" text="1" hidden>
                                                <button type="submit" class="btn btn-warning btn-circle btn-sm"><i class="fa fa-pencil"></i> </button>
                                            </form>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-danger btn-circle" onClick="confirmacionEliminar('<?php echo base_url(); ?>')"><i class="fa fa-times"></i></button>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td>2</td>
                                        <td>1967</td>
                                        <td>Fundación de los sindicatos democráticos de estudiantes</td>
                                        <td>
                                            <form role="form" method="POST" id="frmEdit-2" class="form-horizontal" action="<?php echo base_url();?>index.php/admin/registroDetallePanel" >
                                                <!-- <input type="text" name="ZONid" text="<?php //echo $dzones->ZONid; ?>" hidden>
                                                <input type="text" name="PANid" text="<?php //echo $dzones->PANid; ?>" hidden> -->
                                                <input type="text" name="ZONid" text="1" hidden>
                                                <input type="text" name="PANid" text="1" hidden>
                                                <button type="submit" class="btn btn-warning btn-circle btn-sm"><i class="fa fa-pencil"></i> </button>
                                            </form>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-danger btn-circle" onClick="confirmacionEliminar('<?php echo base_url(); ?>')"><i class="fa fa-times"></i></button>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td>3</td>
                                        <td>1979 hasta 1982</td>
                                        <td>Crisis económica</td>
                                        <td>
                                            <form role="form" method="POST" id="frmEdit-3" class="form-horizontal" action="<?php echo base_url();?>index.php/admin/registroDetallePanel" >
                                                <!-- <input type="text" name="ZONid" text="<?php //echo $dzones->ZONid; ?>" hidden>
                                                <input type="text" name="PANid" text="<?php //echo $dzones->PANid; ?>" hidden> -->
                        
                                                <input type="text" name="ZONid" text="1" hidden>
                                                <input type="text" name="PANid" text="1" hidden>
                                                <button type="submit" class="btn btn-warning btn-circle btn-sm"><i class="fa fa-pencil"></i> </button>
                                            </form>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-danger btn-circle" onClick="confirmacionEliminar('<?php echo base_url(); ?>')"><i class="fa fa-times"></i></button>
                                        </td>
                                      </tr>
                                    </tbody>
                                </table>       
                            </div>
                        </div>                      
                          
                    </div>
                    
                </div>
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->


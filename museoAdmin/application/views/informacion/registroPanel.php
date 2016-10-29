
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
                <div class="row">
                    <form class="form-horizontal" role="form">
                      <div class="form-group">
                        <h3 for="codigoNFC" class="col-lg-3 col-md-3 control-label">Codigo NFC: <?php echo $ZONid; ?> </h3>
                      </div><br><br>
                      

                    <div class="panel panel-default">
                        <div class="col-md-12 panel-heading">
                            <h4 class="panel-title ">Paneles asociados a este dispositivo</h4>
                        </div>
                        <div class="panel-body">
                            <div class="form-group">
                                <div class="col-md-12 ">
                                  <button type="button" onClick="" class="btn btn-block btn-social btn-tumblr"><i class="fa fa-plus-circle"></i>Agregar</button>
                                </div>
                            </div>                            
                        </div>
                        <table class="table table-striped">
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
                                    <td><button type="button" class="btn btn-danger btn-circle" onClick="confirmacionEliminar('<?php echo base_url(); ?>')"><i class="fa fa-times"></i>
                            </button></td>
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
                                    <td><button type="button" class="btn btn-danger btn-circle" onClick="confirmacionEliminar('<?php echo base_url(); ?>')"><i class="fa fa-times"></i>
                            </button></td>
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
                                    <td><button type="button" class="btn btn-danger btn-circle" onClick="confirmacionEliminar('<?php echo base_url(); ?>')"><i class="fa fa-times"></i>
                            </button></td>
                                  </tr>
                                </tbody>
                            </table>       
                    </div>                      
                      
                    </form>
                </div>
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->


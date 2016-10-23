
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
                        <h3 for="codigoNFC" class="col-lg-3 col-md-3 control-label">Codigo NFC: 0001</h3>
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
                                    <td>Videogestual.mp4</td>
                                    <td>sordo,sin dicapacidad</td>
                                    <td><button type="button" class="btn btn-info btn-circle" onClick="confirmacionEliminar('<?php echo base_url(); ?>')"><i class="fa fa-link"></i>
                            </button></td>
                                    <td><button type="button" class="btn btn-warning btn-circle" onClick="confirmacionEliminar('<?php echo base_url(); ?>')"><i class="fa fa-times"></i>
                            </button></td>
                                  </tr>
                                  <tr>
                                    <td>2</td>
                                    <td>Videoexplicativo.mp4</td>
                                    <td>sin discapacidad</td>
                                    <td><button type="button" class="btn btn-info btn-circle" onClick="confirmacionEliminar('<?php echo base_url(); ?>')"><i class="fa fa-link"></i>
                            </button></td>
                                    <td><button type="button" class="btn btn-warning btn-circle" onClick="confirmacionEliminar('<?php echo base_url(); ?>')"><i class="fa fa-times"></i>
                            </button></td>
                                  </tr>
                                  <tr>
                                    <td>3</td>
                                    <td>audio.mp3</td>
                                    <td>ciego</td>
                                    <td><button type="button" class="btn btn-info btn-circle" onClick="confirmacionEliminar('<?php echo base_url(); ?>')"><i class="fa fa-link"></i>
                            </button></td>
                                    <td><button type="button" class="btn btn-warning btn-circle" onClick="confirmacionEliminar('<?php echo base_url(); ?>')"><i class="fa fa-times"></i>
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


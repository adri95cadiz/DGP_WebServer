
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Registro de Dispositivo</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <div class="row">
                    <form class="form-horizontal" role="form">
                      <div class="form-group">
                        <label for="codigoNFC" class="col-lg-2 control-label">Codigo Generado:</label>
                        <div class="col-lg-4">
                          <input type="text" class="form-control" id="codigoNFC" disabled>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="tituloPanel" class="col-lg-2 control-label">Descripcion:</label>
                        <div class="col-lg-8 ">
                          <input type="text" class="form-control" id="tituloPanel">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-lg-2 control-label">Tipo Identificador:</label>
                        <div class="col-lg-4">
                            <select class="form-control" >
                                <option>Vitrina</option>
                                <option>Linea de tiempo</option>
                            </select>
                        </div>                        
                      </div>
                      <div class="form-group">
                        <label class="col-lg-2 control-label">Sala:</label>
                        <div class="col-lg-4">
                            <select class="form-control" >
                                <option>Sala 1</option>
                                <option>Sala 2</option>
                                <option>Sala 3</option>
                                <option>Sala 4</option>
                                <option>Sala 5</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <div class="col-lg-6">
                              <button type="button" onClick="openDisability('<?php echo base_url(); ?>')" class="btn btn-default btn-md"><i class="fa fa-plus-circle"></i> 
                                </button>
                            </div>
                        </div>                                                    
                      </div>
                    

                    <div class="panel panel-default">
                        <div class="panel-body">
                                                     
                        </div>
                        <table class="table table-striped">
                                <thead>
                                  <tr>
                                    <th>Nº</th>
                                    <th>Codigo NFC</th>
                                    <th>Descripción</th>
                                    <th>Tipo</th>
                                    <th>Sala</th>
                                    <th>Editar</th>
                                    <th>Borrar</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td>1</td>
                                    <td>00001</td>
                                    <td>Época prehispánica</td>
                                    <td>linea de tiempo</td>
                                    <td>Sala 1</td>
                                    <td><button type="button" class="btn btn-info btn-circle" onClick="editarDispositivo('<?php echo base_url(); ?>')"><i class="fa fa-link"></i>
                                    </button></td>
                                    <td><button type="button" class="btn btn-warning btn-circle" onClick="confirmacionEliminar2('<?php echo base_url(); ?>')"><i class="fa fa-times"></i>
                                    </button></td>
                                  </tr>
                                  <tr>
                                    <td>2</td>
                                    <td>00002</td>
                                    <td>Herramientas de Campo</td>
                                    <td>Vitrina</td>
                                    <td>Sala 2</td>
                                    <td><button type="button" class="btn btn-info btn-circle" onClick="editarDispositivo('<?php echo base_url(); ?>')"><i class="fa fa-link"></i>
                                    </button></td>
                                    <td><button type="button" class="btn btn-warning btn-circle" onClick="confirmacionEliminar2('<?php echo base_url(); ?>')"><i class="fa fa-times"></i>
                                    </button></td>
                                  </tr>
                                  <tr>
                                    <td>3</td>
                                    <td>00003</td>
                                    <td>Década de 1980</td>
                                    <td>linea de tiempo</td>
                                    <td>Sala 1</td>
                                    <td><button type="button" class="btn btn-info btn-circle" onClick="editarDispositivo('<?php echo base_url(); ?>')"><i class="fa fa-link"></i>
                                    </button></td>
                                    <td><button type="button" class="btn btn-warning btn-circle" onClick="confirmacionEliminar3('<?php echo base_url(); ?>')"><i class="fa fa-times"></i>
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


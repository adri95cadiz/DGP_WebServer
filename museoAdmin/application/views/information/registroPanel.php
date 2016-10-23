
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Registro de Eventos</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <div class="row">
                    <form class="form-horizontal" role="form">
                      <div class="form-group">
                        <label for="codigoNFC" class="col-lg-2 control-label">Codigo NFC:</label>
                        <div class="col-lg-4">
                          <input type="text" class="form-control" id="codigoNFC" disabled>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="imagenPanel" class="col-lg-2 control-label">Imagen del Evento:</label>
                        <div class="col-lg-4">
                          <input type="file">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-lg-2 control-label">Idioma:</label>
                        <div class="col-lg-10">
                            <select class="form-control" >
                                <option>Español</option>
                                <option>Ingles</option>
                                <option>Frances</option>
                                <option>Aleman</option>
                                <option>Italiano</option>
                            </select>
                        </div>                        
                    </div>
                    

                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="form-group">
                                <label for="tituloPanel" class="col-lg-1 control-label">Titulo:</label>
                                <div class="col-lg-12 ">
                                  <input type="text" class="form-control" id="tituloPanel">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="subtituloPanel" class="col-lg-1 control-label">SubTitulo:</label>
                                <div class="col-lg-12 ">
                                  <input type="text" class="form-control" id="subtituloPanel">
                                </div>
                            </div>  
                            <div class="form-group">
                                <label for="descripcionPanel" class="col-lg-1 control-label">Descripción:</label>
                                <div class="col-lg-12 ">
                                  <textarea class="form-control" rows="3" id="descripcionPanel"></textarea>
                                </div>
                            </div>
                            <br>   
                            <div class="form-group">
                                <label for="multimediaPanel" class="col-lg-2 control-label">Archivo multimedia:</label>
                                <div class="col-lg-4">
                                  <input type="file">
                                </div>
                                <div class="col-lg-4">
                                  <button type="button" onClick="openDisability('<?php echo base_url; ?>'" class="btn btn-default btn-circle btn-lg"><i class="fa fa-plus-circle"></i>
                                
                            </button>
                                </div>
                            </div>                            
                        </div>
                        <table class="table table-striped">
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
                                    <td><button type="button" class="btn btn-warning btn-circle"><i class="fa fa-times"></i>
                            </button></td>
                                  </tr>
                                  <tr>
                                    <td>2</td>
                                    <td>Videoexplicativo.mp4</td>
                                    <td>sin discapacidad</td>
                                    <td><button type="button" class="btn btn-warning btn-circle"><i class="fa fa-times"></i>
                            </button></td>
                                  </tr>
                                  <tr>
                                    <td>3</td>
                                    <td>audio.mp3</td>
                                    <td>ciego</td>
                                    <td><button type="button" class="btn btn-warning btn-circle"><i class="fa fa-times"></i>
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


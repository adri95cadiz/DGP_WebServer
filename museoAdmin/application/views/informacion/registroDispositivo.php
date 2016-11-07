
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Registro de Zona</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <br>
                <div class="col-lg-10 col-lg-offset-1 col-md-12">
                    <div class="row">
                        <form class="form-horizontal" role="form">
                            <div class="form-group row">
                                <label for="txtNFC" class="col-lg-2 control-label">Codigo Generado:</label>
                                <div class="col-lg-2">
                                    <input type="text" class="form-control hidden" id="txtNFC" value="" disabled hidden>
                                    <p class="form-control-static mb-0">0004</p>
                                </div>
                            </div>
                            <div class="row form-group">
                                    <label class="col-lg-2 control-label">Tipo de Zona:</label>
                                    <div class="col-lg-3">
                                        <select class="form-control" >
                                            <option>Vitrina</option>
                                            <option>Linea de tiempo</option>
                                        </select>
                                    </div>                        
                                <!-- </div>
                                <div class="form-group"> -->
                                    <label class="col-lg-2 control-label">Sala:</label>
                                    <div class="col-lg-3">
                                        <select class="form-control" >
                                            <option>Sala 1</option>
                                            <option>Sala 2</option>
                                            <option>Sala 3</option>
                                            <option>Sala 4</option>
                                            <option>Sala 5</option>
                                        </select>
                                    </div>
                            </div>
                            <div class="row form-group">
                                <label for="tituloPanel" class="col-lg-2 control-label">Descripcion de Zona:</label>
                                <div class="col-lg-8">
                                    <input type="text" class="form-control" id="tituloPanel">
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-md-2 col-md-offset-8 text-right">
                                  <button onClick="openDisability('<?php echo base_url(); ?>')" class="btn btn-success btn-lg btn-circle"><i class="fa fa-plus"></i> 
                                    </button>
                                </div>
                            </div>
                        </form>
                        <br>
                        <table width="100%" class="table table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Nº</th>
                                        <th>Codigo NFC</th>
                                        <th>Descripción</th>
                                        <th>Sala</th>
                                        <th>Tipo de Sala</th>
                                        <th>Estado</th>
                                        <th class="text-center">Editar</th>
                                        <th class="text-center">Borrar</th>
                                    </tr>
                                </thead>
                                <tbody>
                                  <?php 
                                    if(isset($dispositivos)){
                                        if($dispositivos){
                                            foreach ($dispositivos->result() as $ddispositivos) { 
                                                echo '<tr>';
                                                    echo '<td>'.$ddispositivos->ZONid.'</td>';
                                                    echo '<td class="text-center">'.$ddispositivos->ZONid.'</td>';
                                                    echo '<td width="20%">'.$ddispositivos->ZONdescription.'</td>';
                                                    echo '<td width="20%">'.$ddispositivos->ROOdescription.'</td>';
                                                    echo '<td width="20%">'.$ddispositivos->ELEdescription.'</td>';
                                                    echo '<td class="text-center">'.$ddispositivos->ZONstate.'</td>';
                                                    echo '<td class="center text-center" width="10%">';?>
                                                        <button type="button" class="btn btn-warning btn-circle" onClick="editarDispositivo('<?php echo base_url(); ?>')"><i class="fa fa-pencil"></i></button></td>
                                                    <?php
                                                    echo '<td class="center text-center" width="10%">';?>
                                                        <button type="button" class="btn btn-danger btn-circle" onClick="confirmacionEliminar2('<?php echo base_url(); ?>')"><i class="fa fa-times"></i></button></td>
                                                    <?php
                                                echo '</tr>';
                                            }
                                        }
                                    }
                                    ?>
                                </tbody>
                            </table>  
                            <br>     
                    </div>                                         
                </div>
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->


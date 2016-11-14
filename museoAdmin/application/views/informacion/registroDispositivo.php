        
        <?php 
            //Obtención de siguiente código de dispositivo
            if(isset($nextId)){
                if($nextId<>0){
                    foreach ($nextId as $row) {
                        $nextId=$row['nextId'];
                    }
                }
            }
         ?>

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
                                <label for="txtIdZona" class="col-lg-2 control-label">Codigo Generado:</label>
                                <div class="col-lg-2">
                                    <input type="text" class="form-control hidden" id="txtIdZona" value="<?php echo $nextId; ?>" disabled hidden>
                                    <p class="form-control-static mb-0"><?php echo $nextId; ?></p>
                                </div>
                            </div>
                            <div class="row form-group">
                                    <label class="col-lg-2 control-label" for="cboTipoZona">Tipo de Zona:</label>
                                    <div class="col-lg-3">
                                        <select class="form-control" id="cboTipoZona">
                                            <?php 
                                                if(isset($elements)){
                                                    if($elements<>0){
                                                        foreach ($elements as $row) {
                                                            echo '<option value="'.$row['ELEid'].'">'.$row['ELEdescription'].'</option>';
                                                        }
                                                    }
                                                }
                                             ?>
                                        </select>
                                    </div>                        
                                <!-- </div>
                                <div class="form-group"> -->
                                    <label class="col-lg-2 control-label" for="cboSala">Sala:</label>
                                    <div class="col-lg-3">
                                        <select class="form-control" id="cboSala">
                                            <?php 
                                                if(isset($salas)){
                                                    if($salas<>0){
                                                        foreach ($salas as $row) {
                                                            echo '<option value="'.$row['ROOid'].'">'.$row['ROOdescription'].'</option>';
                                                        }
                                                    }
                                                }
                                             ?>
                                        </select>
                                    </div>
                            </div>
                            <div class="row form-group">
                                <label for="txtDescripcion" class="col-lg-2 control-label">Descripcion de Zona:</label>
                                <div class="col-lg-8">
                                    <input type="text" class="form-control" id="txtDescripcion">
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-md-2 col-md-offset-8 text-right">
                                  <button onClick="registrarZona('<?php echo base_url(); ?>')" class="btn btn-success btn-lg btn-circle"><i class="fa fa-plus"></i> 
                                    </button>
                                </div>
                            </div>
                        </form>
                        <br>
                        <table width="100%" class="table table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
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
                                        if($dispositivos<>0){
                                            foreach ($dispositivos as $row) { 
                                                echo '<tr>';
                                                    echo '<td width="5%" class="text-center">'.$row['ZONid'].'</td>';
                                                    echo '<td width="30%">'.$row['ZONdescription'].'</td>';
                                                    echo '<td width="10%">'.$row['ROOdescription'].'</td>';
                                                    echo '<td width="20%">'.$row['ELEdescription'].'</td>';
                                                    echo '<td width="8%" class="text-center">'.$row['ZONstate'].'</td>';
                                                    echo '<td width="7%" class="center text-center" width="10%">';?>
                                                        <button type="button" class="btn btn-warning btn-circle" onClick="editarDispositivo('<?php echo base_url(); ?>')"><i class="fa fa-pencil"></i></button></td>
                                                    <?php
                                                    echo '<td width="7%" class="center text-center" width="10%">';?>
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


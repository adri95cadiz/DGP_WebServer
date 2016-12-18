
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Tipos de zonas o ambientes del museo</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <br>
                <br>
                <div class="row">
                    <div class="col-lg-10 col-lg-offset-1">
                        <form class="form-horizontal" method="POST" role="form" action="<?php echo base_url(); ?>index.php/admin/registrarTipoZona" >
                            <div class="form-group">
                                <div class="control-label col-lg-2 col-md-3">
                                    <label for="txtTipoZona">Nombre de la zona:</label>
                                </div>
                                <div class="col-lg-8 col-md-6">
                                    <input type="text" class="form-control" name="txtTipoZona" id="txtTipoZona">
                                </div>
                                <div class="col-lg-2 col-md-3" style="padding-top: -5px; ">
                                    <button class="btn btn-success btn-md" style="padding-top: -5px; margin-top: -5px;">
                                        <i class="fa fa-plus"></i> &nbsp Agregar
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-lg-10 col-lg-offset-1 col-md-12 col-sm-12 col-xs-12">
                        <table width="100%" class="table table-hover">
                            <thead>
                                <tr>
                                    <th width="6%">N°</th>
                                    <th width="40%">DESCRIPCIÓN DE LA ZONA</th>
                                    <th width="8%">Estado</th>
                                    <th width="8%" class="text-center">EDITAR</th>
                                    <th width="8%" class="text-center">ELIMINAR</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php 
                                if(isset($tiposZonas)){
                                    if($tiposZonas){
                                        foreach ($tiposZonas as $row) { 
                                            echo '<tr>';
                                                echo '<td>'.$row['ELEid'].'</td>';
                                                echo '<td width="20%">'.$row['ELEdescription'].'</td>';
                                                echo '<td>'.$row['ELEstate'].'</td>';
                                                echo '<td class="center text-center" width="10%">'?>
                                                    <button type="submit" class="btn btn-warning btn-circle btn-sm" onClick="editarTipoZona('<?php echo $row['ELEid']; ?>', '<?php echo $row['ELEdescription']; ?>', '<?php echo $row['ELEstate']; ?>')"><i class="fa fa-pencil" ></i> </button>
                                                <?php 
                                                echo '</td>';
                                                echo '<td class="center text-center" width="10%">
                                                    <button type="button" class="btn btn-danger btn-circle btn-sm" onclick="return confEliminarTipoZona(\''.base_url().'\', \''.$row['ELEid'].'\');"><i class="fa fa-times"></i>
                                                        </button>
                                                </td>';
                                            echo '</tr>';
                                        }
                                    }
                                }
                                ?>
                            </tbody>
                        </table>
                        <!-- /.table-responsive -->
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->


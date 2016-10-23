
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Dispositivos en <?php echo $ELEdescription; ?></h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <br>
                <div class="row">
                    <div class="col-lg-10 col-lg-offset-1 col-md-12 col-sm-12 col-xs-12">
                        <table width="100%" class="table table-hover" id="dataTables-example">
                            <thead>
                                <tr>
                                    <th>Sala</th>
                                    <th>Cod. NFC</th>
                                    <th>Descripción</th>
                                    <th class="text-center">Ver paneles</th>
                                    <th class="text-center">Eliminar</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php 
                                if(isset($zones)){
                                    if($zones){
                                        foreach ($zones->result() as $dzones) { 
                                            echo '<tr>';
                                                echo '<td>'.$dzones->ROOdescription.'</td>';
                                                echo '<td width="20%">'.$dzones->ZONid.'</td>';
                                                echo '<td>'.$dzones->ZONdescription.'</td>';
                                                echo '<td class="center text-center" width="10%">'?>
                                                    <form role="form" method="POST" id="frmEdit-<?php echo $dzones->ZONid; ?>" class="form-horizontal" action="<?php echo base_url();?>index.php/admin/registroPanel" >
                                                        <input type="text" name="ZONid" text="<?php echo $dzones->ZONid; ?>" hidden>
                                                        <button type="submit" class="btn btn-success btn-circle btn-sm"><i class="fa fa-folder-open-o"></i> </button>
                                                    </form>
                                                <?php 
                                                echo '</td>';
                                                echo '<td class="center text-center" width="10%">
                                                    <button type="button" class="btn btn-danger btn-circle btn-sm" onclick="return confirmacionEliminar2(\''.base_url().'\');"><i class="fa fa-times"></i>
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


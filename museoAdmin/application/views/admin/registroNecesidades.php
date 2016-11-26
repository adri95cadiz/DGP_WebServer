
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Gestión de Necesidades Especiales</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <br>
                <br>
                <div class="row">
                	<div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 col-sm-12">
                		<form class="form-horizontal" role="form">
		                    <div class="col-lg-9">
		                        <div class="form-group row">
		                            <label for="txtNecesidad" class="col-lg-3 col-sm-12 control-label">Necesidad especial:</label>
		                            <div class="col-lg-9 col-sm-12">
		                                <input id="txtNecesidad" type="text" class="form-control">
		                            </div>
		                        </div>
		                    </div>
		                    <div class="col-lg-3">
		                        <div class="form-group row">
		                            <div class="text-center" style="padding-top: -5px; ">
		                                <button class="btn btn-success btn-lg" style="padding-top: -5px; margin-top: -5px;" onclick="registrarNecesidad('<?php echo base_url(); ?>');">
		                                    <i class="fa fa-plus"></i> &nbsp Agregar
		                                </button>
		                            </div>
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
                                    <th width="8%">N°</th>
                                    <th width="52%">NECESIDAD ESPECIAL</th>
                                    <th width="15%">ESTADO</th>
                                    <th width="15%" class="text-center">EDITAR</th>
                                    <th width="15%" class="text-center">ELIMINAR</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php 
                                if(isset($necesidades)){
                                    if($necesidades){
                                        foreach ($necesidades as $row) { 
                                            echo '<tr>';
                                                echo '<td>'.$row['FEAid'].'</td>';
                                                echo '<td width="20%">'.$row['FEAdescription'].'</td>';
                                                echo '<td>'.$row['FEAstate'].'</td>';
                                                echo '<td class="center text-center" width="10%">'?>
                                                    <button type="submit" class="btn btn-warning btn-circle btn-sm"><i class="fa fa-pencil"></i> </button>
                                                <?php 
                                                echo '</td>';
                                                echo '<td class="center text-center" width="10%">
                                                    <button type="button" class="btn btn-danger btn-circle btn-sm" onclick="return confEliminarNecesidad(\''.base_url().'\', \''.$row['FEAid'].'\');"><i class="fa fa-times"></i>
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


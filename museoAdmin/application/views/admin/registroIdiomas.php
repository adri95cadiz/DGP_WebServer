
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Gestión de idiomas</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <br>
                <br>
                <div class="row">
                	<div class="col-lg-10 col-lg-offset-1 col-md-12 col-sm-12 col-xs-12">
                		<form class="form-horizontal" method="POST" role="form" action="<?php echo base_url(); ?>index.php/admin/registrarIdioma">
		                    <div class="col-lg-6 col-md-7 col-sm-7">
		                        <div class="form-group row">
                                    <label for="cboIdioma" class="col-lg-3 col-md-4 col-sm-4 control-label">Idioma:</label>
                                    <div class="col-lg-9 col-md-8 col-sm-8">
                                        <select class="js-example-basic-single form-control js-example-basic-single js-states" name="cboIdioma" id="cboIdioma">
                                            <?php 
                                            if(isset($idiomasI)){
                                                if($idiomasI){
                                                    foreach ($idiomasI->result() as $didiomasI) { 
                                                        echo '<option value="'.$didiomasI->LANid.'" >';
                                                        echo $didiomasI->LANdescription.'</option>';
                                                    }
                                                }
                                            }
                                            ?>
                                        </select>
                                    </div>
		                        </div>
		                    </div>
		                    <!-- <div class="col-lg-5">
		                        <div class="form-group row">
		                            <label for="fileBandera" class="col-lg-3 col-md-12 control-label">Bandera:</label>
		                            <div class="col-lg-9 col-md-12">
		                                <input id="fileBandera" type="file" class="form-control-file" name="fileBandera" >
		                            </div>
		                        </div>
		                    </div> -->
		                    <div class="col-lg-2 col-md-3 col-sm-5">
		                        <div class="form-group row">
		                            <div class="text-center" style="padding-top: -5px; ">
		                                <button type="submit" class="btn btn-success" style="padding-top: -5px; margin-top: -5px;">
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
                        <div class="table-responsive">
                            <table width="100%" class="table table-hover">
                                <thead>
                                    <tr>
                                        <th width="8%">N°</th>
                                        <th width="52%">IDIOMA</th>
                                        <th width="15%">BANDERA</th>
                                        <th width="15%" class="text-center">ELIMINAR/DESACTIVAR</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php 
                                    if(isset($idiomasA)){
                                        if($idiomasA){
                                            $cont=1;
                                            foreach ($idiomasA as $didiomasA) { 
                                                echo '<tr>';
                                                    echo '<td class="hidden" hidden>'.$didiomasA['LANid'].'</td>';
                                                    echo '<td>'.$cont.'</td>';
                                                    echo '<td width="20%">'.$didiomasA['LANdescription'].'</td>';
                                                    echo '<td class="text-center" width="20%">'.'<div class="flag '.$didiomasA['LANroute'].'"></div>'.'</td>';
                                                    echo '<td class="center text-center" width="10%">
                                                        <button type="button" class="btn btn-danger btn-circle btn-sm" onclick="return confEliminarIdioma(\''.base_url().'\', '.$didiomasA['LANid'].');"><i class="fa fa-times"></i>
                                                            </button>
                                                    </td>';
                                                echo '</tr>';
                                                $cont=$cont+1;
                                            }
                                        }
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.table-responsive -->
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->


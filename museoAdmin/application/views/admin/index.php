
        <div id="page-wrapper">

            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Gestión de información del museo Caja Granada</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->

            
    <?php 
        if(isset($elements)){
            if($elements){
                echo '<div class="row">';
                foreach ($elements as $row) { ?>
                    <form role="form" method="POST" id="form-<?php echo $row['ELEid']; ?>" class="form-horizontal" action="<?php echo base_url();?>index.php/admin/tipoDispositivo" >
                        <input type="text" name="ELEid" value="<?php echo $row['ELEid']; ?>" hidden>
                        <input type="text" name="ELEdescription" value="<?php echo $row['ELEdescription']; ?>" hidden>
                    </form>
                    <div class="col-lg-4 col-lg-offset-1 col-md-6">
                        <div class="panel panel-info">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-3">
                                        <i class="fa fa-folder-open-o fa-4x"></i>
                                    </div>
                                    <div class="col-lg-10 col-md-9 col-sm-9 col-xs-9 text-right">
                                        <div><h3><?php echo $row['ELEdescription']; ?></h3></div>
                                    </div>
                                </div>
                            </div>
                            <a style="cursor:pointer; cursor: hand;" onclick="goTipoDispositivo('<?php echo $row['ELEid']; ?>');">
                                <div class="panel-footer">
                                    <span class="pull-left">Ver detalles</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <?php 
                }
                echo  '<div class="clearfix"></div>';
                echo '</div>';
            }
        }
    ?>
                                

            
            
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->



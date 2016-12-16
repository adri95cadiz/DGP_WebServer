<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Museo Caja Granada</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url();?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="<?php echo base_url(); ?>assets/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url(); ?>assets/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url(); ?>assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- Custom flags -->
    <link href="<?php echo base_url(); ?>assets/dist/css/flags.css" rel="stylesheet" type="text/css">

    <!-- OPCIONALES -->

	    <!-- Morris Charts CSS -->
	    <link href="<?php echo base_url(); ?>assets/vendor/morrisjs/morris.css" rel="stylesheet">

	    <!-- Social Buttons CSS -->
	    <link href="<?php echo base_url(); ?>assets/vendor/bootstrap-social/bootstrap-social.css" rel="stylesheet">

	    <!-- DataTables CSS -->
	    <link href="<?php echo base_url(); ?>assets/vendor/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">

	    <!-- DataTables Responsive CSS -->
	    <link href="<?php echo base_url(); ?>assets/vendor/datatables-responsive/dataTables.responsive.css" rel="stylesheet">

        <!-- Alertify -->
        <script src="<?php echo base_url(); ?>assets/js/alertify.js"></script>
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/alertify.core.css" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/alertify.default.css" />

        <!-- JS PROPIOS-->
        <script src="<?php echo base_url(); ?>assets/js/functionality.js"></script>
    
        <!-- SELECT 2 -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/select2.css" />
        

    <!-- /OPCIONALES -->

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>


<body onload="nobackbutton('<?php echo base_url(); ?>')" onUnLoad="verificarPaginas('<?php echo base_url(); ?>')">

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            

            <!--PAGE HEADER-->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index">UGR - v0.1</a>
                </div>
                <!-- /.navbar-header -->

                <ul class="nav navbar-top-links navbar-right">
                    <!-- <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-envelope fa-fw"></i> <i class="fa fa-caret-down"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-messages">
                            <li>
                                <a href="#">
                                    <div>
                                        <strong>John Smith</strong>
                                        <span class="pull-right text-muted">
                                            <em>Yesterday</em>
                                        </span>
                                    </div>
                                    <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">
                                    <div>
                                        <strong>John Smith</strong>
                                        <span class="pull-right text-muted">
                                            <em>Yesterday</em>
                                        </span>
                                    </div>
                                    <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">
                                    <div>
                                        <strong>John Smith</strong>
                                        <span class="pull-right text-muted">
                                            <em>Yesterday</em>
                                        </span>
                                    </div>
                                    <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a class="text-center" href="#">
                                    <strong>Read All Messages</strong>
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </li>
                        </ul> -->
                        <!-- /.dropdown-messages -->
                    <!-- </li> -->
                    <!-- /.dropdown -->
                    <!-- <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-tasks fa-fw"></i> <i class="fa fa-caret-down"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-tasks">
                            <li>
                                <a href="#">
                                    <div>
                                        <p>
                                            <strong>Task 1</strong>
                                            <span class="pull-right text-muted">40% Complete</span>
                                        </p>
                                        <div class="progress progress-striped active">
                                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                                <span class="sr-only">40% Complete (success)</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">
                                    <div>
                                        <p>
                                            <strong>Task 2</strong>
                                            <span class="pull-right text-muted">20% Complete</span>
                                        </p>
                                        <div class="progress progress-striped active">
                                            <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                                                <span class="sr-only">20% Complete</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">
                                    <div>
                                        <p>
                                            <strong>Task 3</strong>
                                            <span class="pull-right text-muted">60% Complete</span>
                                        </p>
                                        <div class="progress progress-striped active">
                                            <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                                <span class="sr-only">60% Complete (warning)</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">
                                    <div>
                                        <p>
                                            <strong>Task 4</strong>
                                            <span class="pull-right text-muted">80% Complete</span>
                                        </p>
                                        <div class="progress progress-striped active">
                                            <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                                <span class="sr-only">80% Complete (danger)</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a class="text-center" href="#">
                                    <strong>See All Tasks</strong>
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </li>
                        </ul>    -->
                        <!-- /.dropdown-tasks -->
                    <!-- </li> -->
                    <!-- /.dropdown -->
                    <!-- <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-bell fa-fw"></i> <i class="fa fa-caret-down"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-alerts">
                            <li>
                                <a href="#">
                                    <div>
                                        <i class="fa fa-comment fa-fw"></i> New Comment
                                        <span class="pull-right text-muted small">4 minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">
                                    <div>
                                        <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                        <span class="pull-right text-muted small">12 minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">
                                    <div>
                                        <i class="fa fa-envelope fa-fw"></i> Message Sent
                                        <span class="pull-right text-muted small">4 minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">
                                    <div>
                                        <i class="fa fa-tasks fa-fw"></i> New Task
                                        <span class="pull-right text-muted small">4 minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">
                                    <div>
                                        <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                        <span class="pull-right text-muted small">4 minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a class="text-center" href="#">
                                    <strong>See All Alerts</strong>
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </li>
                        </ul>   -->
                        <!-- /.dropdown-alerts -->
                    <!-- </li>  -->
                    <!-- /.dropdown -->
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-user">
                            <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                            </li>
                            <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                            </li>
                            <li class="divider"></li>
                            <li><a href="<?php echo base_url(); ?>index.php/admin/login"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                            </li>
                        </ul>
                        <!-- /.dropdown-user -->
                    </li>
                    <!-- /.dropdown -->
                </ul>
                <!-- /.navbar-top-links -->
            <!--//PAGE HEADER-->

            <!-- SIDEBAR MENU -->
                <div class="navbar-default sidebar" role="navigation">
                    <div class="sidebar-nav navbar-collapse">
                        <ul class="nav" id="side-menu">
                            <li class="" style="min-height: 90px; padding: 10px; max-height: 100px;">
                                <div class="img-responsive">
                                    <img src="<?php echo base_url(); ?>assets/images/LogoCajaGranada.png" width="100%" max-height="100px">
                                   <!--  <div class="col-md-3 col-lg-3 col-sm-4 col-xs-3" style="padding-left: 5px; padding-right: 3px; height: 70px; width: 55px;">
                                        <div class="img-responsive" style="vertical-align: middle;">
                                            <img src="<?php echo base_url(); ?>assets/images/Escudo_de_Granada.png" width="100%"  height="100%">
                                        </div>
                                    </div>
                                    <div class="col-md-9 col-lg-9 col-sm-8 col-xs-9" style="padding-left: 0px; padding-right: 0px; height: 70px; vertical-align: middle; text-align: center; display: table; display: table-cell; font-style: italic; font-weight: bold;">
                                        Bienvenido al Sistema de Gestión de Dispositivos del museo Caja Granada
                                    </div> -->
                                </div>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Gestionar información<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <?php 
                                        if(isset($elements)){
                                            if($elements){
                                                foreach ($elements as $row) { ?>
                                                    <li>
                                                        <form role="form" method="POST" id="form-<?php echo $row['ELEid']; ?>" class="form-horizontal" action="<?php echo base_url();?>index.php/admin/tipoDispositivo" >
                                                            <input type="text" name="ELEid" value="<?php echo $row['ELEid']; ?>" hidden>
                                                            <input type="text" name="ELEdescription" value="<?php echo $row['ELEdescription']; ?>" hidden>
                                                        </form>
                                                        <a style="cursor:pointer; cursor: hand;" onclick="goTipoDispositivo('<?php echo $row['ELEid']; ?>');"><?php echo $row['ELEdescription']; ?></a>
                                                    </li>
                                                <?php }
                                            }
                                        }
                                    ?>
                                </ul>
                                <!-- /.nav-second-level -->
                            </li>
                            <li>
                                <a href="<?php echo base_url(); ?>index.php/admin/idiomas"><i class="fa fa-dashboard fa-fw"></i> Idiomas</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url(); ?>index.php/admin/necesidadEspecial"><i class="fa fa-dashboard fa-fw"></i> Necesidades especiales</a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Administración<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="<?php echo base_url(); ?>index.php/admin/registroZonas">Registro de zona <br>(Nuevo dispositivo)</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url(); ?>index.php/admin/registroTiposZonas">Tipos de zonas</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url(); ?>index.php/admin/registroSalas">Salas del museo</a>
                                    </li>
                                </ul>
                                <!-- /.nav-second-level -->
                            </li>



                            <!-- RESTO DEL MENU -->



                            
                        </ul>
                    </div>
                    <!-- /.sidebar-collapse -->
                </div>
                <!-- /.navbar-static-side -->
            <!--//SIDEBAR MENU -->
        </nav>
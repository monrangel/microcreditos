<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Agregar nuevo cliente</title>
        <!-- Bootstrap Core CSS -->
        <!--link href="../../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet"-->
        <link href="<?= base_url('assets/vendor/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">

        <!-- MetisMenu CSS -->
        <link href="<?= base_url('assets/vendor/metisMenu/metisMenu.min.css') ?>" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="<?= base_url('assets/dist/css/sb-admin-2.css') ?>" rel="stylesheet">

        <!-- Morris Charts CSS -->
        <link href="<?= base_url('assets/vendor/morrisjs/morris.css') ?>" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="<?= base_url('assets/vendor/font-awesome/css/font-awesome.min.css') ?>" rel="stylesheet" type="text/css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>

    <body>

        <div id="wrapper">

            <!-- Navigation -->
            <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html">SB Admin v2.0</a>
                </div>
                <!-- /.navbar-header -->

                <ul class="nav navbar-top-links navbar-right">
                    <li class="dropdown">
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
                        </ul>
                        <!-- /.dropdown-messages -->
                    </li>
                    <!-- /.dropdown -->
                    <li class="dropdown">
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
                        </ul>
                        <!-- /.dropdown-tasks -->
                    </li>
                    <!-- /.dropdown -->
                    <li class="dropdown">
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
                        </ul>
                        <!-- /.dropdown-alerts -->
                    </li>
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
                            <li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                            </li>
                        </ul>
                        <!-- /.dropdown-user -->
                    </li>
                    <!-- /.dropdown -->
                </ul>
                <!-- /.navbar-top-links -->

                <div class="navbar-default sidebar" role="navigation">
                    <div class="sidebar-nav navbar-collapse">
                        <ul class="nav" id="side-menu">

                            <li>
                                <a href="index.html"><i class="fa fa-dashboard fa-fw"></i> Inicio</a>
                            </li>
                            <li>
                                <a href="clientes.html"><i class="fa fa-bar-chart-o fa-fw"></i> Clientes</a>
                            </li>
                            <li>
                                <a href="solicitudes.html"><i class="fa fa-table fa-fw"></i> Solicitudes</a>
                            </li>
                            <li>
                                <a href="empleados.html"><i class="fa fa-edit fa-fw"></i> Empleados</a>
                            </li>
                            <li>
                                <a href="entregas.html"><i class="fa fa-edit fa-fw"></i> Entregas</a>
                            </li>
                            <li>
                                <a href="reportes.html"><i class="fa fa-edit fa-fw"></i> Reportes</a>
                            </li>
                        </ul>
                    </div>
                    <!-- /.sidebar-collapse -->
                </div>
                <!-- /.navbar-static-side -->
            </nav>

            <div id="page-wrapper">
                <div class="row">
                    <div class="col-lg-8">
                        <h1 class="page-header">Agregar nuevo cliente</h1>
                        <?= isset($msg) ? $msg : ''?>
                        <div class="col-lg-12">
                            <div class="panel panel-default">

                                <div class="panel-body">
                                    <div class="row">

                                        <form role="form" action='agregarCliente/create' method="POST">
                                            <div class="col-lg-6">
 
                                                <div class="form-group">
                                                    <p class="help-block">Introduce los datos del cliente.</p>
                                                    <label>Nombre</label>
                                                    <input class="form-control" name="nombre">
                                                
                                                </div>
                                                <div class="form-group">
                                                    <label>Apellido Paterno</label>
                                                    <input class="form-control" name="a_paterno">
                                                    
                                                </div>
                                                <div class="form-group">
                                                    <label>Apellido Materno</label>
                                                    <input class="form-control" name="a_materno">
                                                    
                                                </div>
                                                <div class="form-group">
                                                    <label>Curp</label>
                                                    <input class="form-control" name="curp">

                                                </div>
                                                <div class="form-group">
                                                    <label>RFC</label>
                                                    <input class="form-control" name="rfc">
                                                    <p class="help-block">Ingresa el RFC con homoclave.</p>
                                                </div>
                                                <div class="form-group">
                                                    <label>Fecha de Nacimiento</label>
                                                    <input class="form-control" name="fecha_nacimiento">

                                                </div>
                                                <div class="form-group">
                                                    <label>País Nacimiento</label>
                                                    <select class="form-control" name="pais_nacimiento" id="pais_nacimiento">
                                                        <option>Selecciona el país...</option>
                                                        <?php 
                                                        foreach ($paises as $row){
                                                            echo '<option value="'.$row->id_pais.'">'.$row->descripcion.'</option>';
                                                        }
                                                        ?>
                                                    </select>
                                                    <!--label>Pais Nacimiento</label>
                                                    <input class="form-control" name="pais_nacimiento"-->
                                                </div>
                                                <div class="form-group">
                                                    <label>Entidad Nacimiento</label>
                                                    <select class="form-control" name="entidad_nacimiento" id="entidad_nacimiento">
                                                        <option>Selecciona la entidad de nacimiento...</option>
                                                        <?php 
                                                        foreach ($entidades as $row){
                                                            echo '<option value="'.$row->id_entidad.'">'.$row->descripcion.'</option>';
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label>Municipio Nacimiento</label>
                                                    <select class="form-control" name="municipio_nacimiento" id="municipio_nacimiento">
                                                        <option>Selecciona el municipio de nacimiento...</option>
                                                        <?php 
                                                        foreach ($municipios as $row){
                                                            echo '<option value="'.$row->id_municipio.'">'.$row->descripcion.'</option>';
                                                        }
                                                        ?>
                                                    </select>
                                                </div>


                                                <div class="form-group">
                                                    <p class="help-block">Introduce el domicilio.</p>
                                                    <label>Calle</label>
                                                    <input class="form-control" name="calle">
                                                    
                                                </div>
                                                <div class="form-group">
                                                    <label>Colonia</label>
                                                    <input class="form-control" name="colonia">
                                                    
                                                </div>
                                                <div class="form-group">
                                                    <label>Num. Int.</label>
                                                    <input class="form-control" name="interior">
                                                </div>
                                                <div class="form-group">
                                                    <label>Num. Ext.</label>
                                                    <input class="form-control" name="exterior">
                                                </div>


                                                <div class="form-group">
                                                    <label>Telefono</label>
                                                    <input class="form-control" name="telefono">

                                                </div>
                                                <div class="form-group">
                                                    <label>Localidad donde vive:</label>
                                                    <input class="form-control" name="localidad_radicacion">

                                                </div>

                                                <div class="form-group">
                                                    <label>Pais Radicacion</label>
                                                    <input class="form-control" name="pais_radicacion">

                                                </div>
                                                <div class="form-group">
                                                    <label>Entidad Radicacion</label>
                                                    <input class="form-control" name="entidad_radicacion">

                                                </div>
                                                <div class="form-group">
                                                    <label>Municipio Radicacion</label>
                                                    <input class="form-control" name="municipio_radicacion">

                                                </div>

                                            </div>
                                            <!-- /.col-lg-6 (nested) -->
                                                <!--button type="submit" class="btn btn-default">Guardar</button-->
                                                <?php echo form_submit('submit','Guardar');?>
                                                <button type="reset" class="btn btn-default">Limpiar</button>

                                            </div>
                                            <!-- /.col-lg-6 (nested) -->
                                        </form>
                                    </div>
                                    <!-- /.row (nested) -->
                                </div>
                                <!-- /.panel-body -->
                            </div>
                            <!-- /.panel -->
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <h1 class="page-header">Indicaciones</h1>
                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</p>
                    </div>
                </div>


            </div>
        </div>
        <!-- /#wrapper -->

        
            <!-- jQuery -->
            <script src="<?= base_url('assets/vendor/jquery/jquery.min.js') ?>"></script>

            <!-- Bootstrap Core JavaScript -->
            <script src="<?= base_url('assets/vendor/bootstrap/js/bootstrap.min.js') ?>"></script>

            <!-- Metis Menu Plugin JavaScript -->
            <script src="<?= base_url('assets/vendor/metisMenu/metisMenu.min.js') ?>"></script>

            <!-- Morris Charts JavaScript -->
            <script src="<?= base_url('assets/vendor/raphael/raphael.min.js') ?>"></script>
            

            <!-- Custom Theme JavaScript -->
            <script src="<?= base_url('assets/dist/js/sb-admin-2.js') ?>"></script>
            <script>
            $(document).ready(function(){
                
                $('#pais_nacimiento').change(function(){
                    
                    var id_pais=$('#pais_nacimiento').val();
                      alert (id_pais);
                    if(id_pais!=''){
                       
                        $.ajax({
                            url:"<?php echo base_url();?>AgregarCliente/trae_entidades",
                            method:"POST",
                            data:{id_pais:id_pais},
                            succes:function(data){
                                $('#entidad_nacimiento').html(data);
                            }        
                        })
                    }
                });
            });
            </script>
    </body>

</html>

<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>CREOMA</title>

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
                                <a href="<?= base_url('Index') ?>"><i class="fa fa-dashboard fa-fw"></i> Inicio</a>
                            </li>
                            <li>
                                <a href="<?= base_url('Clientes') ?>"><i class="fa fa-bar-chart-o fa-fw"></i> Clientes</a>
                            </li>
                            <li>
                                <a href="<?= base_url('Solicitudes') ?>"><i class="fa fa-table fa-fw"></i> Solicitudes</a>
                            </li>
                            <li>
                                <a href="<?= base_url('Empleados') ?>"><i class="fa fa-edit fa-fw"></i> Empleados</a>
                            </li>
                            <li>
                                <a href="<?= base_url('Entregas') ?>"><i class="fa fa-edit fa-fw"></i> Entregas</a>
                            </li>
                            <li>
                                <a href="<?= base_url('Reportes') ?>"><i class="fa fa-edit fa-fw"></i> Reportes</a>
                            </li>
                        </ul>
                    </div>
                    <!-- /.sidebar-collapse -->
                </div>            <!-- /.navbar-static-side -->
            </nav>

            <div id="page-wrapper">
                <div class="row">
                    <div class="col-lg-8">
                        <h1 class="page-header">Clientes</h1>

                        <div class="panel col-lg-12">
                            <!--a href="form-agregar-cliente.html"><button type="button" class="btn btn-primary">Agregar Cliente</button></a-->
                            <!-- Boton Bootstrap Popup -->
                            <button class="btn btn-primary" data-toggle="modal" data-target="#myModal">Agregar Cliente</button>
                        </div>
                        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
                             aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                            ×</button>
                                        <h4 class="modal-title" id="myModalLabel">
                                            Login/Registration - <a href="http://www.jquery2dotnet.com">jquery2dotnet.com</a></h4>
                                    </div>
                                    <div class="modal-body" style="height: 500px; overflow-y: scroll;">
                                        <div class="row">
                                            <div class="col-md-8" style="border-right: 1px dotted #C2C2C2;padding-right: 30px;">
                                                <!-- Nav tabs -->
                                                <ul class="nav nav-tabs">
                                                    <!--li class="active"><a href="#Login" data-toggle="tab">Login</a></li-->
                                                    <li><a href="#NuevoCliente" data-toggle="tab">Nuevo Cliente</a></li>
                                                </ul>
                                                <!-- Tab panes -->
                                                <div class="tab-content">
                                                    <div class="tab-pane" id="NuevoCliente">
                                                        <form role="form" class="form-horizontal">
                                                            <div class="form-group">
                                                                <label for="nombre" class="col-sm-2 control-label">
                                                                    Nombre:</label>
                                                                <div class="col-sm-10">
                                                                    <div class="row">
                                                                        <div class="col-sm-10">
                                                                            <input type="text" class="form-control" id="nombre" placeholder="Nombre" />
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="a_paterno" class="col-sm-2 control-label">
                                                                    Apellido Paterno:</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" class="form-control" id="a_paterno" placeholder="Apellido Paterno" />
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="a_materno" class="col-sm-2 control-label">
                                                                    Apellido Materno:</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" class="form-control" id="a_materno" placeholder="Apellido Materno" />
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="a_paterno" class="col-sm-2 control-label">
                                                                    Calle:</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" class="form-control" id="calle" placeholder="Calle" />
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="num_int" class="col-sm-2 control-label">
                                                                    Numero Interior:</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" class="form-control" id="num_int" placeholder="Numero Interior" />
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="a_paterno" class="col-sm-2 control-label">
                                                                    Numero Exterior:</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" class="form-control" id="num_ext" placeholder="Numero Exterior" />
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="entidad_nacimiento" class="col-sm-2 control-label">
                                                                    Entidad de Nacimiento:</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" class="form-control" id="entidad_nacimiento" placeholder="Entidad de Nacimiento" />
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="municipio_nacimiento" class="col-sm-2 control-label">
                                                                    Municipio de nacimiento:</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" class="form-control" id="municipio_nacimiento" placeholder="Municipío de Nacimiento" />
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="localidad_radicacion" class="col-sm-2 control-label">
                                                                    Localidad donde vive:</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" class="form-control" id="localidad_radicacion" placeholder="Localidad donde vive" />
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="telefono" class="col-sm-2 control-label">
                                                                    Telefono</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" class="form-control" id="telefono" placeholder="Telefono" />
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="curp" class="col-sm-2 control-label">
                                                                    CURP:</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" class="form-control" id="curp" placeholder="CURP" />
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="rfc" class="col-sm-2 control-label">
                                                                    RFC:</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" class="form-control" id="rfc" placeholder="RFC" />
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="fecha_nacimiento" class="col-sm-2 control-label">
                                                                    Fecha de Nacimiento:</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" class="form-control" id="fecha_nacimiento" placeholder="Fecha de Nacimiento" />
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="estatus_cliente" class="col-sm-2 control-label">
                                                                    Estatus Cliente:</label>
                                                                <div class="col-sm-10">
                                                                    <input type="hidden" class="form-control" id="estatus_cliente" placeholder="Estatus Cliente" />
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="colonia" class="col-sm-2 control-label">
                                                                    Colonia:</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" class="form-control" id="colonia" placeholder="Colonia" />
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="pais_nacimiento" class="col-sm-2 control-label">
                                                                    Nacionalidad:</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" class="form-control" id="pais_nacimiento" placeholder="Nacionalidad" />
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="entidad_radicacion" class="col-sm-2 control-label">
                                                                    Entidad donde vive:</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" class="form-control" id="entidad_radicacion" placeholder="Entidad donde vive" />
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="municipio_radicacion" class="col-sm-2 control-label">
                                                                    Municipio donde vive:</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" class="form-control" id="municipio_radicacion" placeholder="Municipio donde vive" />
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="pais_radicacion" class="col-sm-2 control-label">
                                                                    País donde vive:</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" class="form-control" id="a_paterno" placeholder="Pais donde vive" />
                                                                </div>
                                                            </div>
                                                            
                                                            
                                                            <div class="row">
                                                                <div class="col-sm-2">
                                                                </div>
                                                                <div class="col-sm-10">
                                                                    <button type="button" class="btn btn-primary btn-sm">
                                                                        Save & Continue</button>
                                                                    <button type="button" class="btn btn-default btn-sm">
                                                                        Cancel</button>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                                <div id="OR" class="hidden-xs">
                                                    OR</div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="row text-center sign-with">
                                                    <div class="col-md-12">
                                                        <h3>
                                                            Sign in with</h3>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="btn-group btn-group-justified">
                                                            <a href="#" class="btn btn-primary">Facebook</a> <a href="#" class="btn btn-danger">
                                                                Google</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="panel panel-default">

                                <!-- /.panel-heading -->
                                <div class="panel-body">
                                    <div id="dataTables-example_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="dataTables_length" id="dataTables-example_length">
                                                    <label>Mostrar <select name="dataTables-example_length" aria-controls="dataTables-example" class="form-control input-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> registros.</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div id="dataTables-example_filter" class="dataTables_filter">
                                                    <label>Buscar:<input type="search" class="form-control input-sm" placeholder="" aria-controls="dataTables-example"></label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <table width="100%" class="table table-striped table-bordered table-hover dataTable no-footer dtr-inline" id="dataTables-example" role="grid" aria-describedby="dataTables-example_info" style="width: 100%;">
                                                    <thead>
                                                        <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 160px;">Nombre</th>
                                                            <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 194px;">Curp</th>
                                                            <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 180px;">Estatus</th>
                                                            <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 104px;">Acciones</th></tr>
                                                    </thead>
                                                    <tbody>

                                                        <tr class="gradeA odd" role="row">
                                                            <td class="sorting_1">Oscar</td>
                                                            <td>Text</td>
                                                            <td>Prestamo S13</td>
                                                            <td>
                                                                <button type="button" class="btn btn-primary btn-xs">Editar</button>
                                                                <button type="button" class="btn btn-primary btn-xs">Historico</button>
                                                            </td>
                                                        </tr><tr class="gradeA even" role="row">
                                                            <td class="sorting_1">Alejandro</td>
                                                            <td>Text</td>
                                                            <td>Solicitud Pendiente</td>
                                                            <td>
                                                                <button type="button" class="btn btn-primary btn-xs">Editar</button>
                                                                <button type="button" class="btn btn-primary btn-xs">Historico</button>
                                                            </td>
                                                        </tr><tr class="gradeA odd" role="row">
                                                            <td class="sorting_1">Oscar</td>
                                                            <td>Text</td>
                                                            <td>Lista Negra</td>
                                                            <td>
                                                                <button type="button" class="btn btn-primary btn-xs">Editar</button>
                                                                <button type="button" class="btn btn-primary btn-xs">Historico</button>
                                                            </td>
                                                        </tr><tr class="gradeA even" role="row">
                                                            <td class="sorting_1">Oscar</td>
                                                            <td>Text</td>
                                                            <td>Sin prestamo</td>
                                                            <td>
                                                                <button type="button" class="btn btn-primary btn-xs">Editar</button>
                                                                <button type="button" class="btn btn-primary btn-xs">Historico</button>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="dataTables_info" id="dataTables-example_info" role="status" aria-live="polite">Mostrando del 1 al 10 de 4 registros.</div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="dataTables_paginate paging_simple_numbers" id="dataTables-example_paginate">	<ul class="pagination">
                                                        <li class="paginate_button previous disabled" aria-controls="dataTables-example" tabindex="0" id="dataTables-example_previous">
                                                            <a href="#">Anterior</a>
                                                        </li>
                                                        <li class="paginate_button active" aria-controls="dataTables-example" tabindex="0">
                                                            <a href="#">1</a>
                                                        </li>
                                                        <li class="paginate_button " aria-controls="dataTables-example" tabindex="0">
                                                            <a href="#">2</a>
                                                        </li>
                                                        <li class="paginate_button " aria-controls="dataTables-example" tabindex="0">
                                                            <a href="#">3</a>
                                                        </li>
                                                        <li class="paginate_button next" aria-controls="dataTables-example" tabindex="0" id="dataTables-example_next">
                                                            <a href="#">Siguiente</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.table-responsive -->

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
            <!-- /#wrapper -->

            <!-- jQuery -->
            <script src="<?= base_url('assets/vendor/jquery/jquery.min.js') ?>"></script>

            <!-- Bootstrap Core JavaScript -->
            <script src="<?= base_url('assets/vendor/bootstrap/js/bootstrap.min.js') ?>"></script>

            <!-- Metis Menu Plugin JavaScript -->
            <script src="<?= base_url('assets/vendor/metisMenu/metisMenu.min.js') ?>"></script>

            <!-- Morris Charts JavaScript -->
            <script src="<?= base_url('assets/vendor/raphael/raphael.min.js') ?>"></script>
            <script src="<?= base_url('assets/vendor/morrisjs/morris.min.js') ?>"></script>
            <script src="<?= base_url('assets/data/morris-data.js') ?>"></script>

            <!-- Custom Theme JavaScript -->
            <script src="<?= base_url('assets/dist/js/sb-admin-2.js') ?>"></script>

    </body>

</html>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Menú</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo URL_BASE."/public/css2/bootstrap.min.css"?>" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo URL_BASE."/public/css2/sb-admin.css"?>" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="<?php echo URL_BASE."/public/css2/plugins/morris.css"?>" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo URL_BASE."/public/font-awesome2/css/font-awesome.min.css"?>" rel="stylesheet" type="text/css">

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
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Gestión Bibliotecaria del ITSMante</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a href="index.html" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Administrador <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="index.html"><i class="fa fa-fw fa-power-off"></i> Cerrar Sesión</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="active">
                        <a href="<?php echo URL_BASE."/index.php/Index/menu"?>"><i class="glyphicon glyphicon-home"></i> Menú</a>
                    </li>
                    <li>
                        <a href="<?php echo URL_BASE."/index.php/Index/menu"?>"><i class="glyphicon glyphicon-book"></i> Libros</a>
                    </li>
                    <li>
                        <a href="Prestamos.html"><i class="fa fa-fw fa-table"></i> Préstamos</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Menú principal
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="glyphicon glyphicon-home"></i>  <a href="Menu.html">Menú</a>
                            </li>
                            <li class="active">
                                <i class="glyphicon glyphicon-home"></i> Menú
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

             <div class="jumbotron">
                <h2 class="glyphicon glyphicon-list-alt"> Agregar préstamo</h2>
                <p>Registrar un nuevo préstamo.</p> 
                <p><a class="btn btn-primary btn-md" href="SolicitarPrestamo.html" role="button">Agregar</a></p>
            </div>  

            <div class="jumbotron">
                <h2 class="glyphicon glyphicon-book"> Libro nuevo</h2>
                <p>Agregar un libro a la base de datos.</p>   
                <p><a class="btn btn-primary btn-md" href="AgregarLibros.html" role="button">Agregar</a></p>
            </div>  

            <div class="jumbotron">
                <h2 class="glyphicon glyphicon-user"> Registrar alumno</h2>
                <p>Agregar información de un estudiante.</p>    
                <p><a class="btn btn-primary btn-md" href="RegistrarAlumno.html" role="button">Agregar</a></p>
            </div>                    

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

   
</body>

</html> 


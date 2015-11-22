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
                            <a href="index.html"><i class="fa fa-fw fa-power-off"></i> Cerrar sesión </a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="active">
                        <a href="Menu.html"><i class="glyphicon glyphicon-home"></i> Menú</a>
                    </li>
                    <li>
                        <a href="LibrosNuevos.html"><i class="glyphicon glyphicon-book"></i> Libros</a>
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
                                <i class="glyphicon glyphicon-home"></i>  <a href="Index.php">Menú</a>
                            </li>
                            <li class="active">
                                <i class="glyphicon glyphicon-list-alt"></i> Solicitar préstamo
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

             <div class="jumbotron">
  <div class="container">
    <h2>Solicitar préstamo:</h2><br/>
    </div>


  <section id="formulario">
    <div class="container">

<!-- Formulario -->
    <form class="form-horizontal" role="form">

      <div class="form-group">
        <label class="control-label col-sm-2" for="NControl">Número de control:</label>
        <div class="col-sm-6">
          <input type="text" class="form-control" id="NControl" required="required" placeholder="Nº control">
          <br/>
        </div>
      </div>

      <div class="form-group">
        <label class="control-label col-sm-2" for="NombreA">Nombre completo:</label>
        <div class="col-sm-6">
          <input type="text" class="form-control" id="NombreA" required="required" placeholder="Nombre">
          <br/>
        </div>
      </div>

      <div class="form-group">
        <label class="control-label col-sm-2" for="titulo">Titulo y edición:</label>
        <div class="col-sm-6">
          <input type="text" class="form-control" id="titulo" required="required" placeholder="Titulo y edicion">
          <br/>
        </div>
      </div>

      <div class="form-group">
        <label class="control-label col-sm-2" for="CantidadLibros">Cantidad de libros prestados:</label>
        <div class="col-sm-1">
          <input type="number" class="form-control" id="CantidadLibros" min="1" max="10" required="required" placeholder="">
          <p class="help-block"></p>
          <br/>
        </div>
      </div>

      <div class="form-group">
        <label class="control-label col-sm-2" for="fecha">Fecha de entrega:</label>
        <div class="col-sm-2">
          <input type="number" class="form-control" id="fecha" min="1" max="31" placeholder="Día">
        </div>

        <div class="col-sm-2">
          <input type="number" class="form-control" id="fecha" min="1" max="12" placeholder="Mes">
        </div>

        <div class="col-sm-2">
          <input type="number" class="form-control" id="fecha" min="1985" max="1998" placeholder="Año">
        </div>
      </div>

      <div class="form-group">
        <label class="control-label col-sm-2" for="Descripcion">Descripción:</label>
        <div class="col-sm-6">
          <input type="text" class="form-control" id="Descripcion" required="required" placeholder="Descripion">
          <p class="help-block"></p>
        </div>
      </div>





    <div class="form-group col-xs-10">
      <div class="col-sm-3">
        <button class="btn btn-primary btn-md" type="submit">Solicitar préstamo</button>
      </div>
      <div class="col-sm-3">
        <button class="btn btn-primary btn-md" type="submit">Cancelar</button>
      </div>
    </div>


  </div>
  </section>

            </div>                      

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
    
</body>

</html> 

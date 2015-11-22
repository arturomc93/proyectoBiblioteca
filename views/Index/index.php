<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Gestión Bibliotecaria del Tec Mante</title>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="<?php echo URL_BASE."/public/css/bootstrap.min.css"?>" type="text/css">

    <!-- Custom Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="<?php echo URL_BASE."/public/font-awesome/css/font-awesome.min.css"?>" type="text/css">

    <!-- Plugin CSS -->
    <link rel="stylesheet" href="<?php echo URL_BASE."/public/css/animate.min.css"?>" type="text/css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?php echo URL_BASE."/public/css/creative.css"?>" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top">

    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">Gestión Bibliotecaria del Tec Mante</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a class="page-scroll" href="#about">Acerca de</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#services">Servicios</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#portfolio">Libros</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Iniciar Sesión</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <header>
        <div class="header-content">
            <div class="header-content-inner">
                <h1>Instituto Tecnológico Superior De El Mante</h1>
                <hr>
                <p><span class="text-biblioteca">Biblioteca Escolar</span></p>
                <a href="#about" class="btn btn-primary btn-lg page-scroll">Más información</a>
            </div>
        </div>
    </header>

    <section class="bg-primary" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">Solicitar un libro será más fácil y rápido!</h2>
                    <hr class="light">
                    <p class="text-faded">Inicia sesión y obten todos los beneficios de está página.</p>
                    <a href="#contact" class="btn btn-default btn-xl; page-scroll">Iniciar Sesión</a>
                </div>
            </div>
        </div>
    </section>

    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Servicios</h2>
                    <hr class="primary">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="glyphicon glyphicon-inbox tamaño-iconos"></i>
                        <h3>Préstamos</h3>
                        <p class="text-muted">Solicita los libros en línea.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="glyphicon glyphicon-book tamaño-iconos" data-wow-delay=".1s"></i>
                        <h3>Libros actualizados</h3>
                        <p class="text-muted">Siempre a tu alcance</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="glyphicon glyphicon-globe tamaño-iconos" data-wow-delay=".2s"></i>
                        <h3>Carreras Profesionales</h3>
                        <p class="text-muted">Libros para todas las carreras</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="glyphicon glyphicon-ok tamaño-iconos" data-wow-delay=".3s"></i>
                        <h3>Las mejores editoriales</h3>
                        <p class="text-muted">Con los contenidos más recientes</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="no-padding" id="portfolio">
        <div class="container-fluid">
            <div class="row no-gutter">
                <div class="col-lg-4 col-sm-6">
                    <a href="#" class="portfolio-box">
                        <img src="img/portfolio/ISC.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Categoría
                                </div>
                                <div class="project-name">
                                    Ingeniería en Sistemas Computacionales
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="#" class="portfolio-box">
                        <img src="img/portfolio/II.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Categoría
                                </div>
                                <div class="project-name">
                                    Ingeniería Industrial
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="#" class="portfolio-box">
                        <img src="img/portfolio/IIAS.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Categoría
                                </div>
                                <div class="project-name">
                                    Ingeniería en Innovación Agrícola Sustentable
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="#" class="portfolio-box">
                        <img src="img/portfolio/IGE.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Categoría
                                </div>
                                <div class="project-name">
                                    Ingeniería en Gestión Empresarial
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="#" class="portfolio-box">
                        <img src="img/portfolio/CB.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Categoría
                                </div>
                                <div class="project-name">
                                    Ciencias Básicas
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="#" class="portfolio-box">
                        <img src="img/portfolio/LC.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Categoría
                                </div>
                                <div class="project-name">
                                    Lectura
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <aside class="bg-dark">
        <!--<div class="container text-center">
            <div class="call-to-action">
                <h2></h2>
                <a href="#" class="btn btn-default btn-xl wow tada"></a>
            </div>
        </div>-->
    </aside>

    <section id="contact">
        <div class="container">
             <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">Iniciar Sesión</h2>
                    <hr class="primary">
                    <p>Solicite su usuario y contraseña en el Departamento Académico.</p>
                </div>
                <div class="col-lg-8 col-lg-offset-2">
                    <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
                    <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
                    <form name="sentMessage" id="contactForm" novalidate>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Usuario:</label>
                                <input type="text" class="form-control" placeholder="Usuario" id="name" required data-validation-required-message="Por favor ingresa el usuario.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Contraseña:</label>
                                <input type="password" class="form-control" placeholder="Contraseña" id="password" required data-validation-required-message="Por favor ingresa la contraseña.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                          <br>
                        <div id=""></div>
                        <div class="row">
                            <div class="form-group col-xs-12">
                                <a href="Menu.html"><button type="submit" class="btn btn-success btn-md">Acceder</button></a>
                            </div>
                        </div>
              
                    </form>
                </div>
            </div>
            <!--<div class="row">
                
                
               
            </div>-->
        </div>
    </section>

    <!-- <footer>

            <div class="social-container">
                <div class="social-footer-logos">
                    <div class="facebook">
                        <a href=""></a>
                        <img src="img/social/btn_facebook.png"></img>
                    </div>
                    <div class="twitter">
                        <a href=""></a>
                        <img src="img/social/btn_twitter.png"></img>
                    </div>
                    <div class="youtube">
                        <a href=""></a>
                        <img src="img/social/btn_youtube.png"></img>
                    </div>
                </div>
            </div>

            <div>
                <div class="col-lg-4 col-lg-offset-2 text-center">
                    <i class="fa fa-phone fa-3x wow bounceIn tamaño-iconos"></i>
                    <p>01 (831) 23 3 66 70</p>
                </div>
            </div>

            <div>
                <div class="col-lg-1 col-lg-offset-2 text-center">
                    <i class="glyphicon glyphicon-modal-window tamaño-iconos"></i>
                    <p><a href="http://www.itsmante.edu.mx/">www.itsmante.edu.mx</a></p>
                </div>
            </div>

    </footer> -->

    <!-- jQuery -->
    <script src="<?php echo URL_BASE."/public/js/jquery.js"?>"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo URL_BASE."/public/js/bootstrap.min.js"?>"></script>

    <!-- Plugin JavaScript -->
    <script src="<?php echo URL_BASE."/public/js/jquery.easing.min.js"?>"></script>
    <script src="<?php echo URL_BASE."/public/js/jquery.fittext.js"?>"></script>
    <script src="<?php echo URL_BASE."/public/js/wow.min.js"?>"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?php echo URL_BASE."/public/js/creative.js"?>"></script>

</body>

</html>

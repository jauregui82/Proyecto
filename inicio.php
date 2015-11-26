<?php 
session_start();

 ?>


<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Admin</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-responsive.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/sl-slide.css">

    <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
    <link rel="stylesheet" type="text/css" href="Galeria/css/component.css" />
    
    <script src="Galeria/js/modernizr.min.js"></script>
</head>

<body>

    <!--Header-->
    <header class="navbar navbar-fixed-top">
        <div class="navbar-inner">
            <div class="container">
                <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <a id="logo" class="pull-left" href="index.html"></a>
                <div class="nav-collapse collapse pull-right">
                    <ul class="nav">
                        <li><a href="index.php">Inicio</a></li>
                        <!--
                        <li><a href="about-us.html">About Us</a></li>
                        <li><a href="services.html">Services</a></li>
                        <li class="active"><a href="quienes-somos-php">Galerìa</a></li>   -->
                 <!--
                        <li class="dropdown">
                           <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages <i class="icon-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="career.html">Career</a></li>
                                <li><a href="blog-item.html">Blog Single</a></li>
                                <li><a href="faq.html">FAQ</a></li>
                                <li><a href="pricing.html">Pricing</a></li>
                                <li><a href="404.html">404</a></li>
                                <li><a href="typography.html">Typography</a></li>
                                <li><a href="registration.html">Registration</a></li>
                                <li class="divider"></li>
                                <li><a href="privacy.html">Privacy Policy</a></li>
                                <li><a href="terms.html">Terms of Use</a></li>
                            </ul>
                        </li>
                        -->
                        
                        <li><a href="index.php">Salir</a></li>
                        <!--
                        <li class="login">
                            <a data-toggle="modal" href="#loginForm"><i class="icon-lock"></i></a>
                        </li>
                        -->
                    </ul>        
                </div><!--/.nav-collapse -->
            </div>
        </div>
    </header>
    <!-- /header -->
<!--
    <section class="title">
        <div class="container">
            <div class="row-fluid">
                <div class="span6">
                    <h1>Portfolio</h1>
                </div>
                <div class="span6">
                    <ul class="breadcrumb pull-right">
                        <li><a href="index.html">Home</a> <span class="divider">/</span></li>
                        <li><a href="#">Pages</a> <span class="divider">/</span></li>
                        <li class="active">Portfolio</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>-->
    <!-- / .title -->     

    <section id="portfolio" class="container main">    

<!-- CAMARAS-->
<style type="text/css">
    /* jQuery lightBox plugin - Gallery style */
    #cuadro_camara {
        background-color: #444;
        padding-left: 30px;
        padding-top:20px;
    }
    #titulo_camara {
    background-color: #666;
    color:#FFF;
    padding-left: 30px;
    font-size: 14px;
    text-align:center;
    }
    .botones_cam {
        background-color:#FFF;
        color:#333;
        font-family: "Comic Sans MS", cursive;
        font-size:14px;
        margin-top:10px;
        width:100px;
        height:40px;
    }
    .formulario {
        color: #FFF;
    }
    
    </style>
<script type="text/javascript" src="Galeria/jquery-1.6.2.min.js"></script>
<script type="text/javascript" src="Galeria/jquery.lightbox-0.5.js"></script>
<link rel="stylesheet" type="text/css" href="Galeria/jquery.lightbox-0.5.css" media="screen" />
<script type="text/javascript" src="webcam.js"></script>
    <script language="JavaScript">
        webcam.set_api_url( 'test.php' );//PHP adonde va a recibir la imagen y la va a guardar en el servidor
        webcam.set_quality( 90 ); // calidad de la imagen
        webcam.set_shutter_sound( true ); // Sonido de flash
    </script>
        <script language="JavaScript">
        webcam.set_hook( 'onComplete', 'my_completion_handler' );
        
        function do_upload() {
            // subir al servidor
            document.getElementById('upload_results').innerHTML = '<h1>Cargando al servidor...</h1>';
            webcam.upload();
        }
        
        function do_upload_1() {
            // subir al servidor
            document.getElementById('upload_results').innerHTML = '<h1>Cargando al servidor 1...</h1>';
            webcam.upload_1();
        }
        function do_upload_2() {
            // subir al servidor
            document.getElementById('upload_results').innerHTML = '<h1>Cargando al servidor 2...</h1>';
            webcam.upload_2();
        }
        function do_upload_3() {
            // subir al servidor
            document.getElementById('upload_results').innerHTML = '<h1>Cargando al servidor  3...</h1>';
            webcam.upload_3();
        }




        function my_completion_handler(msg) {
            
            if (msg.match(/(http\:\/\/\S+)/)) {
                var image_url = RegExp.$1;//respuesta de text.php que contiene la direccion url de la imagen
                
                // Muestra la imagen en la pantalla
                document.getElementById('upload_results').innerHTML = 
                    '<img src="' + image_url + '">'+
                    '<form action="gestion_foto.php" method="post">'+
                    '<input type="hidden" name="id_foto" id="id_foto" value="' + image_url + '"  /><br>'+
                    '<label>Nombre </label><input type="text" name="nombre_foto" id="nombre_foto"/>'+
                    '<label>Descripcion </label><input type="text" name="des" id="des"/>'+
                    '<input type="submit" name="button" id="button" value="Enviar" /></form>'
                    ;
                // reset camera for another shot
                webcam.reset();
            }
            else alert("PHP Error: " + msg);
        }
    </script>
<div align="left" id="cuadro_camara">    

<table width="100%" height="144"><tr>
<td width="100" valign=top>
        <form>
        <input type=button value="Configurar" onClick="webcam.configure()" class="botones_cam">
        &nbsp;&nbsp;
        <input type=button value="Tomar foto" onClick="webcam.freeze()" class="botones_cam">
        &nbsp;&nbsp;
        <input type=button value="subir" onClick="do_upload()" class="botones_cam">
        &nbsp;&nbsp;
        <input type=button value="Reset" onClick="webcam.reset()" class="botones_cam">
    </form>
    
    </td>
    <td width="263" valign=top>
    <script language="JavaScript">
    document.write( webcam.get_html(320, 240) );//dimensiones de la camara
    </script>
    </td>  
     <td width="263" valign=top>
    <script language="JavaScript">
    document.write( webcam.get_html_1(320, 240) );//dimensiones de la camara
    </script>
    </td>
    <td width="100" valign=top>
        <form>
        <input type=button value="Configurar" onClick="webcam.configure_1()" class="botones_cam">
        &nbsp;&nbsp;
        <input type=button value="Tomar foto" onClick="webcam.freeze_1()" class="botones_cam">
        &nbsp;&nbsp;
        <input type=button value="subir" onClick="do_upload_1()" class="botones_cam">
        &nbsp;&nbsp;
        <input type=button value="Reset" onClick="webcam.reset()" class="botones_cam">
    </form>
    
    </td>

    <tr>
        <td width="100" valign=top>
        <form>
        <input type=button value="Configurar" onClick="webcam.configure_2()" class="botones_cam">
        &nbsp;&nbsp;
        <input type=button value="Tomar foto" onClick="webcam.freeze_2()" class="botones_cam">
        &nbsp;&nbsp;
        <input type=button value="subir" onClick="do_upload_2()" class="botones_cam">
        &nbsp;&nbsp;
        <input type=button value="Reset" onClick="webcam.reset()" class="botones_cam">
    </form>
    
    </td>
    <td width="263" valign=top>
    <script language="JavaScript">
    document.write( webcam.get_html_2(320, 240) );//dimensiones de la camara
    </script>
    </td>  
     <td width="263" valign=top>
    <script language="JavaScript">
    document.write( webcam.get_html_3(320, 240) );//dimensiones de la camara
    </script>
    </td>
    <td width="100" valign=top>
        <form>
        <input type=button value="Configurar" onClick="webcam.configure_3()" class="botones_cam">
        &nbsp;&nbsp;
        <input type=button value="Tomar foto" onClick="webcam.freeze_3()" class="botones_cam">
        &nbsp;&nbsp;
        <input type=button value="subir" onClick="do_upload_3()" class="botones_cam">
        &nbsp;&nbsp;
        <input type=button value="Reset" onClick="webcam.reset()" class="botones_cam">
    </form>
    
    </td>
    </tr>
    <td width=411>
        <div id="upload_results" class="formulario" > </div>
  </td></tr></table><br /><br />
</div>



<br />
<br />
<script type="text/javascript">
    $(function() {
        $('#gallery a').lightBox();//Galeria jquery
    });
    </script>
    <style type="text/css">
    /* jQuery lightBox plugin - Gallery style */
    #gallery {
        background-color: #444;
        width: 100%;
    }
    #gallery ul { list-style: none; }
    #gallery ul li { display: inline; }
    #gallery ul img {
        border: 5px solid #3e3e3e;
        border-width: 5px 5px 5px;
    }
    #gallery ul a:hover img {
        border: 5px solid #fff;
        border-width: 5px 5px 5px;
        color: #fff;
    }
    #gallery ul a:hover { color: #fff; }
    </style>
    
    <div id="gallery">
    <ul>
  <?php  
  
  include("clase_conexion.php");
  $consulta="select * from fotos order by id_foto desc";
  $busca_fotos=mysql_query($consulta,$c);
  while($ro=mysql_fetch_array($busca_fotos)){
   $url=$ro['id_foto'];  
   $nombre=$ro['nombre']; 
     $des=$ro['des'];
     echo "<li>
     
            <a href=\"fotos/".$url.".jpg\" title=\"$nombre - $des\">

                <img src=\"fotos/".$url.".jpg\" width=\"150\" height=\"120\" alt=\"\" />

            </a>
        </li>";
  }
?>    
    </ul>
</div>

<!-- /CAMARAS-->

        
    </section>

<!--Footer-->
<footer id="footer">
    <div class="container">
        <div class="row-fluid">
            <div class="span5 cp">
                &copy; 2015 <a target="_blank" href="#" title="">Jauregui Crespo Y Eduardo Daboin</a>. Seccion 8.
            </div>
            <!--/Copyright-->

            <div class="span6">
                <ul class="social pull-right">
                    <li><a href="#"><i class="icon-facebook"></i></a></li>
                    <li><a href="#"><i class="icon-twitter"></i></a></li>
                    <li><a href="#"><i class="icon-pinterest"></i></a></li>
                    <li><a href="#"><i class="icon-linkedin"></i></a></li>
                    <li><a href="#"><i class="icon-google-plus"></i></a></li>                       
                    <li><a href="#"><i class="icon-youtube"></i></a></li>
                    <li><a href="#"><i class="icon-tumblr"></i></a></li>                        
                    <li><a href="#"><i class="icon-dribbble"></i></a></li>
                    <li><a href="#"><i class="icon-rss"></i></a></li>
                    <li><a href="#"><i class="icon-github-alt"></i></a></li>
                    <li><a href="#"><i class="icon-instagram"></i></a></li>                   
                </ul>
            </div>

            <div class="span1">
                <a id="gototop" class="gototop pull-right" href="#"><i class="icon-angle-up"></i></a>
            </div>
            <!--/Goto Top-->
        </div>
    </div>
</footer>
<!--/Footer-->
<!--  Login form -->
<div class="modal hide fade in" id="loginForm" aria-hidden="false">
    <div class="modal-header">
        <i class="icon-remove" data-dismiss="modal" aria-hidden="true"></i>
        <h4>Login Form</h4>
    </div>
    <!--Modal Body-->
    <div class="modal-body">
        <form class="form-inline" action="index.php" method="post" id="form-login">
            <input type="text" class="input-small" placeholder="Email">
            <input type="password" class="input-small" placeholder="Password">
            <label class="checkbox">
                <input type="checkbox"> Remember me
            </label>
            <button type="submit" class="btn btn-primary">Sign in</button>
        </form>
        <a href="#">Forgot your password?</a>
    </div>
    <!--/Modal Body-->
</div>
<!--  /Login form -->

<script src="js/vendor/jquery-1.9.1.min.js"></script>
<script src="js/vendor/bootstrap.min.js"></script>
<script src="js/main.js"></script>

</body>
</html>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Inicio | Nova</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-responsive.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/sl-slide.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
    <link rel="stylesheet" type="text/css" href="Galeria/css/component.css" />
    <script src="Galeria/js/modernizr.min.js"></script>
    <script src="js/script.js"></script>
    <script src="/canvas/js/prefixfree.min.js"></script>

<style> 

 canvas {
    display: block;
    position: fixed;
    left: 0;
    top: -34px;
}
</style>

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

                <a id="logo" class="pull-left" href="index.php"></a>
                <div class="nav-collapse collapse pull-right">

                    <ul class="nav">
                        
                    
                     <li class="active"><a href="index.php">Inicio</a></li>
                     <!--
                        <li><a href="about-us.html">Quiénes Somos</a></li>
                        <li><a href="services.html">Servicios</a></li>
                        <!--<li><a href="quienes-somos.php">Galería</a></li>-->
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
                        <li><a href="blog.html">Blog</a></li> -->
                        <li><a href="contacto.php">Contacto</a></li>
                        <li class="login">
                            <a data-toggle="modal" href="#loginForm"><i class="icon-lock"></i></a>
                        </li> 
                    </ul>      
                </div><!--/.nav-collapse -->
            </div>
        </div>

        <canvas id="canvas"></canvas>
        <script src="canvas/js/index.js"></script>
    </header>
    <!-- /header -->

    <!--Slider-->
    <section id="slide-show">
     <div id="slider" class="sl-slider-wrapper">

        <!--Slider Items-->    
        <div class="sl-slider">
            <!--Slider Item1-->
            <div class="sl-slide item1" data-orientation="horizontal" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">
                <div class="sl-slide-inner">
                    <div class="container">
                        <img class="pull-right" src="images/sample/slider/img1.png" alt="" />
                        <h2>Seguridad Domestica e Industrial</h2>
                        <!--<h3 class="gap">Subtitulo</h3>
                        <a class="btn btn-large btn-transparent" href="#">Learn More</a>-->
                    </div>
                </div>
            </div>
            <!--/Slider Item1-->

            <!--Slider Item2-->
            <div class="sl-slide item2" data-orientation="vertical" data-slice1-rotation="10" data-slice2-rotation="-15" data-slice1-scale="1.5" data-slice2-scale="1.5">
                <div class="sl-slide-inner">
                    <div class="container">
                        <img class="pull-right" src="images/sample/slider/img2.png" alt="" />
                        <h2>Mas de 5 años de experiencia</h2>
                        <!--<h3 class="gap">Aenean ultricies mi vitast</h3>
                        <a class="btn btn-large btn-transparent" href="#">Learn More</a>-->
                    </div>
                </div>
            </div>
            <!--Slider Item2-->

            <!--Slider Item3-->
            <div class="sl-slide item3" data-orientation="horizontal" data-slice1-rotation="3" data-slice2-rotation="3" data-slice1-scale="2" data-slice2-scale="1">
                <div class="sl-slide-inner">
                   <div class="container">
                    <img class="pull-right" src="images/sample/slider/img3.png" alt="" />
                    <h2>Soluciones Únicas</h2>
                   <!-- <h3 class="gap">Breatures who have been utterly</h3>
                    <a class="btn btn-large btn-transparent" href="#">Learn More</a>-->
                </div>
            </div>
        </div>
        <!--Slider Item3-->

    </div>
    <!--/Slider Items-->

    <!--Slider Next Prev button-->
    <nav id="nav-arrows" class="nav-arrows">
        <span class="nav-arrow-prev"><i class="icon-angle-left"></i></span>
        <span class="nav-arrow-next"><i class="icon-angle-right"></i></span> 
    </nav>
    <!--/Slider Next Prev button-->

</div>
<!-- /slider-wrapper -->           
</section>
<!--/Slider-->
<!--
<section class="main-info">
    <div class="container">
        <div class="row-fluid">
            <div class="span9">
                <h4>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas</h4>
                <p class="no-margin">Tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet</p>
            </div>
            <div class="span3">
                <a class="btn btn-success btn-large pull-right" href="http://shapebootstrap.net">Free Download Nova</a>
            </div>
        </div>
    </div>
</section>
-->

<!--Services-->

<!-- GAlLERIA -->
<style>
    


</style>
 <div class="container">
            
            <section id="photostack-1" class="photostack photostack-start">
                <div>
                    <figure>
                        <a href="http://goo.gl/Qw3ND4" class="photostack-img"><img src="Galeria/img/1.jpg" alt="img01"/></a>
                        <figcaption>
                            <h2 class="photostack-title">Calidad</h2>
                        </figcaption>
                    </figure>
                    <figure>
                        <a href="http://goo.gl/fhwlSP" class="photostack-img"><img src="Galeria/img/2.jpg" alt="img02"/></a>
                        <figcaption>
                            <h2 class="photostack-title">Seguridad</h2>
                        </figcaption>
                    </figure>
                    <figure>
                        <a href="http://goo.gl/Jmvr4u" class="photostack-img"><img src="Galeria/img/3.jpg" alt="img03"/></a>
                        <figcaption>
                            <h2 class="photostack-title">Compromiso</h2>
                        </figcaption>
                    </figure>
                    <figure>
                        <a href="http://goo.gl/49lN3k" class="photostack-img"><img src="Galeria/img/4.jpg" alt="img04"/></a>
                        <figcaption>
                            <h2 class="photostack-title">Profesionales en el Área</h2>
                        </figcaption>
                    </figure>
                    <figure>
                        <a href="http://goo.gl/NJ1Dhf" class="photostack-img"><img src="Galeria/img/5.jpg" alt="img05"/></a>
                        <figcaption>
                            <h2 class="photostack-title">Protección</h2>
                        </figcaption>
                    </figure>
                    <figure>
                        <a href="http://goo.gl/Ms7VDl" class="photostack-img"><img src="Galeria/img/6.jpg" alt="img06"/></a>
                        <figcaption>
                            <h2 class="photostack-title">Confianza</h2>
                        </figcaption>
                    </figure>
                    <figure data-dummy>
                        <a href="#" class="photostack-img"><img src="Galeria/img/7.jpg" alt="img07"/></a>
                        <figcaption>
                            <h2 class="photostack-title"></h2>
                        </figcaption>
                    </figure>
                    <figure data-dummy>
                        <a href="#" class="photostack-img"><img src="Galeria/img/8.jpg" alt="img08"/></a>
                        <figcaption>
                            <h2 class="photostack-title"></h2>
                        </figcaption>
                    </figure>
                    <figure data-dummy>
                        <a href="#" class="photostack-img"><img src="Galeria/img/9.jpg" alt="img09"/></a>
                        <figcaption>
                            <h2 class="photostack-title"></h2>
                        </figcaption>
                    </figure>
                    <figure data-dummy>
                        <a href="#" class="photostack-img"><img src="Galeria/img/10.jpg" alt="img10"/></a>
                        <figcaption>
                            <h2 class="photostack-title"></h2>
                        </figcaption>
                    </figure>
                    <figure data-dummy>
                        <a href="#" class="photostack-img"><img src="Galeria/img/11.jpg" alt="img11"/></a>
                        <figcaption>
                            <h2 class="photostack-title"> </h2>
                        </figcaption>
                    </figure>
                    <figure data-dummy>
                        <a href="#" class="photostack-img"><img src="Galeria/img/12.jpg" alt="img12"/></a>
                        <figcaption>
                            <h2 class="photostack-title"></h2>
                        </figcaption>
                    </figure>
                    <figure data-dummy>
                        <a href="#" class="photostack-img"><img src="Galeria/img/13.jpg" alt="img13"/></a>
                        <figcaption>
                            <h2 class="photostack-title"> </h2>
                        </figcaption>
                    </figure>
                    <figure data-dummy>
                        <a href="#" class="photostack-img"><img src="Galeria/img/14.jpg" alt="img14"/></a>
                        <figcaption>
                            <h2 class="photostack-title"> </h2>
                        </figcaption>
                    </figure>
                    <figure data-dummy>
                        <a href="#" class="photostack-img"><img src="Galeria/img/15.jpg" alt="img15"/></a>
                        <figcaption>
                            <h2 class="photostack-title"> </h2>
                        </figcaption>
                    </figure>
                    <figure data-dummy>
                        <a href="#" class="photostack-img"><img src="Galeria/img/16.jpg" alt="img16"/></a>
                        <figcaption>
                            <h2 class="photostack-title"></h2>
                        </figcaption>
                    </figure>
                </div>
            </section>
            
        </div><!-- /container -->
        <script src="Galeria/js/classie.js"></script>
        <script src="Galeria/js/photostack.js"></script>
        <script>
            // [].slice.call( document.querySelectorAll( '.photostack' ) ).forEach( function( el ) { new Photostack( el ); } );
            
            new Photostack( document.getElementById( 'photostack-1' ), {
                callback : function( item ) {
                    //console.log(item)
                }
            } );

        </script>












<!-- /GAlLERIA-->


<!-- 

<section id="services">
    <div class="container">
        <div class="center gap">
            <h3>What We Offer</h3>
            <p class="lead">Look at some of the recent projects we have completed for our valuble clients</p>
        </div>

        <div class="row-fluid">
            <div class="span4">
                <div class="media">
                    <div class="pull-left">
                        <i class="icon-globe icon-medium"></i>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">Web Design</h4>
                        <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
                    </div>
                </div>
            </div>            

            <div class="span4">
                <div class="media">
                    <div class="pull-left">
                        <i class="icon-thumbs-up-alt icon-medium"></i>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">Graphic Design</h4>
                        <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
                    </div>
                </div>
            </div>            

            <div class="span4">
                <div class="media">
                    <div class="pull-left">
                        <i class="icon-leaf icon-medium icon-rounded"></i>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">Email Marketing</h4>
                        <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="gap"></div>

        <div class="row-fluid">
            <div class="span4">
                <div class="media">
                    <div class="pull-left">
                        <i class="icon-shopping-cart icon-medium"></i>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">Ecommerce Solution</h4>
                        <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
                    </div>
                </div>
            </div>            

            <div class="span4">
                <div class="media">
                    <div class="pull-left">
                        <i class="icon-globe icon-medium"></i>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">SEO &amp; Solution</h4>
                        <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
                    </div>
                </div>
            </div>            

            <div class="span4">
                <div class="media">
                    <div class="pull-left">
                        <i class="icon-globe icon-medium"></i>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">Bootstrap</h4>
                        <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
-->

<!--/Services-->
<!-- 

<section id="recent-works">
    <div class="container">
        <div class="center">
            <h3>Our Recent Works</h3>
            <p class="lead">Look at some of the recent projects we have completed for our valuble clients</p>
        </div>  
        <div class="gap"></div>
        <ul class="gallery col-4">
     
            <!--Item 1-->
            <!-- 

            <li>
                <div class="preview">
                    <img alt=" " src="images/portfolio/thumb/item1.jpg">
                    <div class="overlay">
                    </div>
                    <div class="links">
                        <a data-toggle="modal" href="#modal-1"><i class="icon-eye-open"></i></a><a href="#"><i class="icon-link"></i></a>                          
                    </div>
                </div>
                <div class="desc">
                    <h5>Lorem ipsum dolor sit amet</h5>
                </div>
                <div id="modal-1" class="modal hide fade">
                    <a class="close-modal" href="javascript:;" data-dismiss="modal" aria-hidden="true"><i class="icon-remove"></i></a>
                    <div class="modal-body">
                        <img src="images/portfolio/full/item1.jpg" alt=" " width="100%" style="max-height:400px">
                    </div>
                </div>                 
            </li>
            <!--/Item 1--> 

            <!--Item 2-->
            <!--   
            <li>
                <div class="preview">
                    <img alt=" " src="images/portfolio/thumb/item2.jpg">
                    <div class="overlay">
                    </div>
                    <div class="links">
                        <a data-toggle="modal" href="#modal-1"><i class="icon-eye-open"></i></a><a href="#"><i class="icon-link"></i></a>                                
                    </div>
                </div>
                <div class="desc">
                    <h5>Lorem ipsum dolor sit amet</h5>
                </div>
                <div id="modal-1" class="modal hide fade">
                    <a class="close-modal" href="javascript:;" data-dismiss="modal" aria-hidden="true"><i class="icon-remove"></i></a>
                    <div class="modal-body">
                        <img src="images/portfolio/full/item2.jpg" alt=" " width="100%" style="max-height:400px">
                    </div>
                </div>                 
            </li>
            <!--/Item 2-->

            <!--Item 3-->
            <!--   
            <li>
                <div class="preview">
                    <img alt=" " src="images/portfolio/thumb/item3.jpg">
                    <div class="overlay">
                    </div>
                    <div class="links">
                        <a data-toggle="modal" href="#modal-3"><i class="icon-eye-open"></i></a><a href="#"><i class="icon-link"></i></a>                                
                    </div>
                </div>
                <div class="desc">
                    <h5>Lorem ipsum dolor sit amet</h5>
                </div>
                <div id="modal-3" class="modal hide fade">
                    <a class="close-modal" href="javascript:;" data-dismiss="modal" aria-hidden="true"><i class="icon-remove"></i></a>
                    <div class="modal-body">
                        <img src="images/portfolio/full/item3.jpg" alt=" " width="100%" style="max-height:400px">
                    </div>
                </div>                 
            </li>
            <!--/Item 3--> 

            <!--Item 4-->
            <!--   
            <li>
                <div class="preview">
                    <img alt=" " src="images/portfolio/thumb/item4.jpg">
                    <div class="overlay">
                    </div>
                    <div class="links">
                        <a data-toggle="modal" href="#modal-4"><i class="icon-eye-open"></i></a><a href="#"><i class="icon-link"></i></a>                                
                    </div>
                </div>
                <div class="desc">
                    <h5>Lorem ipsum dolor sit amet</h5>
                </div>
                <div id="modal-4" class="modal hide fade">
                    <a class="close-modal" href="javascript:;" data-dismiss="modal" aria-hidden="true"><i class="icon-remove"></i></a>
                    <div class="modal-body">
                        <img src="images/portfolio/full/item4.jpg" alt=" " width="100%" style="max-height:400px">
                    </div>
                </div>                 
            </li>
            /Item 4-->               
<!--   
        </ul>
    </div>

</section>
-->

<section id="clients" class="main">
    <div class="container">
        <div class="row-fluid">
            <div class="span2">
                <div class="clearfix">
                    <h4 class="pull-left">Proveedores</h4>
                    <div class="pull-right">
                        <a class="prev" href="#myCarousel" data-slide="prev"><i class="icon-angle-left icon-large"></i></a> <a class="next" href="#myCarousel" data-slide="next"><i class="icon-angle-right icon-large"></i></a>
                    </div>
                </div>
                <p>Trabajamos con la mejor calidad en camaras y con las mejores marcas del mercado</p>
            </div>
            <div class="span10">
                <div id="myCarousel" class="carousel slide clients">
                  <!-- Carousel items -->
                  <div class="carousel-inner">
                    <div class="active item">
                        <div class="row-fluid">
                            <ul class="thumbnails">
                                <li class="span3"><a href="https://www.samsung-security.com/es-es/products/security-cameras.aspx"><img src="images/sample/clients/client1.png"></a></li>
                                <li class="span3"><a href="http://www.casmar.es/"><img src="images/sample/clients/client2.png"></a></li>
                                <li class="span3"><a href="http://panasonic.net/sanyo/"><img src="images/sample/clients/client3.png"></a></li>
                                <li class="span3"><a href="http://www.panasonic.com/global/home.html"><img src="images/sample/clients/client4.png"></a></li>

                            </ul>
                        </div>
                    </div>

                    <div class="item">
                        <div class="row-fluid">
                            <ul class="thumbnails">
                                <li class="span3"><a href="https://www.samsung-security.com/es-es/products/security-cameras.aspx"><img src="images/sample/clients/client1.png"></a></li>
                                <li class="span3"><a href="http://www.casmar.es/"><img src="images/sample/clients/client2.png"></a></li>
                                <li class="span3"><a href="http://panasonic.net/sanyo/"><img src="images/sample/clients/client3.png"></a></li>
                                <li class="span3"><a href="http://www.panasonic.com/global/home.html"><img src="images/sample/clients/client4.png"></a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="item">
                        <div class="row-fluid">
                            <ul class="thumbnails">
                            
                                <li class="span3"><a href="https://www.samsung-security.com/es-es/products/security-cameras.aspx"><img src="images/sample/clients/client1.png"></a></li>
                                <li class="span3"><a href="http://www.casmar.es/"><img src="images/sample/clients/client2.png"></a></li>
                                <li class="span3"><a href="http://panasonic.net/sanyo/"><img src="images/sample/clients/client3.png"></a></li>
                                <li class="span3"><a href="http://www.panasonic.com/global/home.html"><img src="images/sample/clients/client4.png"></a></li>

                            </ul>
                        </div>
                    </div>
                </div>
                <!-- /Carousel items -->

            </div>
        </div>
    </div>
</div>
</section>



<!--Footer-->

<footer id="footer">
    <div class="container">
        <div class="row-fluid">
            <div class="span5 cp">
                &copy; 2015 <a  href="#" title="">Jauregui Crespo Y Eduardo Daboin</a>. Seccion 8.
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
        <h4>Iniciar Sesión</h4>
    </div>
    <!--Modal Body-->
    <div class="modal-body">
        <form class="form-inline" action="index.php" method="post" id="form-login">
            <input type="text" class="input-small" placeholder="Usuario">
            <input type="password" class="input-small" placeholder="Contraseña">
            <label class="checkbox">
                <input type="checkbox"> Recordar mi Cuenta
            </label>
           <!-- <button type="submit" class="btn btn-primary">Entrar</button>  -->
            <input type="button" class="btn btn-primary" value="Entrar" onClick=" window.location.href='inicio.php' ">

        </form>
        <a href="#">¿Olvido su Contraseña?</a>
    </div>
    <!--/Modal Body-->
</div>
<!--  /Login form -->

<script src="js/vendor/jquery-1.9.1.min.js"></script>
<script src="js/vendor/bootstrap.min.js"></script>
<script src="js/main.js"></script>
<!-- Required javascript files for Slider -->
<script src="js/jquery.ba-cond.min.js"></script>
<script src="js/jquery.slitslider.js"></script>
<!-- /Required javascript files for Slider -->

<!-- SL Slider -->
<script type="text/javascript"> 
$(function() {
    var Page = (function() {

        var $navArrows = $( '#nav-arrows' ),
        slitslider = $( '#slider' ).slitslider( {
            autoplay : true
        } ),

        init = function() {
            initEvents();
        },
        initEvents = function() {
            $navArrows.children( ':last' ).on( 'click', function() {
                slitslider.next();
                return false;
            });

            $navArrows.children( ':first' ).on( 'click', function() {
                slitslider.previous();
                return false;
            });
        };

        return { init : init };

    })();

    Page.init();
});
</script>
<!-- /SL Slider -->
</body>
</html>
<!DOCTYPE html>
<html lang="es">

<head>
    <!--====== Required meta tags ======-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--====== Title ======-->
    <title>Aprende a invertir BBVA</title>

    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="assets/images/favicon.ico" type="image/png">

    <!--====== Bootstrap css ======-->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <!--====== animate css ======-->
    <link rel="stylesheet" href="assets/css/animate.css">

    <!--====== Fontawesome css ======-->
    <link rel="stylesheet" href="assets/css/all.css">

    <!--====== Magnific Popup css ======-->
    <link rel="stylesheet" href="assets/css/magnific-popup.css">

    <!--====== nice select css ======-->
    <link rel="stylesheet" href="assets/css/nice-select.css">

    <!--====== rangeSlider css ======-->
    <link rel="stylesheet" href="assets/css/ion.rangeSlider.min.css">

    <!--====== Slick css ======-->
    <link rel="stylesheet" href="assets/css/slick.css">

    <!--====== Default css ======-->
    <link rel="stylesheet" href="assets/css/default.css">

    <!--====== Style css ======-->
    <link rel="stylesheet" href="assets/css/style.css">


</head>

<body>

    <!--====== PRELOADER PART START ======-->

    <div class="preloader" id="preloader">
        <div class="three ">
            <div class="loader" id="loader">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>


    <!--====== HEADER PART START ======-->

    <header class="header-area">
        <div class="header-nav">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="navigation">
                            <nav class="navbar navbar-expand-lg navbar-light ">
                                <a class="navbar-brand" href="{{ url('/') }}"><img src="assets/images/logo.png" alt=""></a> <!-- logo -->
                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="toggler-icon"></span>
                                    <span class="toggler-icon"></span>
                                    <span class="toggler-icon"></span>
                                </button> <!-- navbar toggler -->


                                <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                                    <ul class="navbar-nav m-auto">
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('register') }}">Registrar</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('login') }}">Ingresar</a>
                                        </li>
                                    </ul>
                                </div> <!-- navbar collapse -->
                            </nav>
                        </div> <!-- navigation -->
                    </div>
                </div> <!-- row -->
            </div>
        </div>
    </header>


    <!--====== BANNER PART START ======-->

    <section class="banner-area">
        <div class="banner-bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 col-md-9">
                        <div class="banner-content">
                            <h1 class="title wow fadeInLeft" data-wow-duration="1.2s" data-wow-delay="1s">El mejor lugar <span>para aprender <span>sobre inversiones</span></span> </h1>
                            <span class="wow fadeInLeft" data-wow-duration="1.2s" data-wow-delay="1.5s">Experimenta sin preocupaciones</span>
                            <p class="wow fadeInLeft" data-wow-duration="1.2s" data-wow-delay="2s"></p>
                            <ul class="wow fadeInLeft" data-wow-duration="1.2s" data-wow-delay="2.6s" >
                                <li><a class="main-btn" href="{{ route('login') }}">Ingresar</a></li>
                                <li><a class="main-btn main-btn-2" href="{{ route('register') }}">Registrar</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!--====== ABOUT PART START ======-->

    <section class="about-area pt-130 pb-130">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about-thumb text-center">
                        <img src="assets/images/about-thumb.png" alt="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-content">
                        <h3 class="title wow fadeInLeft"><span>Inicia y cumple con <span>todos tus objetivos</span></span></h3>
                        <span>¡Tu puedes tener grandes inversiones! </span>
                        <p>En la actualidad, el uso de dispositivos electrónicos ha aumentado, y con ello los modelos, sistemas y demás elementos tecnológicos. Hoy en día, sigue siendo complicado y confuso el tema del ahorro e inversión por lo que nuestra propuesta e idea principal es ayudar a los clientes (sobre todo nuevos) a entender algunos conceptos financieros básicos para facilitar el proceso de inversión.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!--====== FEATURES PART START ======-->

    <section class="features-area pb-130 bg_cover" style="background-image: url(assets/images/features-bg.jpg);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section-title section-title-2  text-center">
                        <h2 class="title"><span>Temas para <span>aprender</span></span></h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-3 col-md-6 col-sm-7">
                    <div class="features-item text-center white-bg mt-30 wow fadeIn animated" data-wow-duration="2000ms" data-wow-delay="0ms">
                        <i class="fas fa-lock"></i>
                        <h4 class="title">Plazos fijos</h4>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-7">
                    <div class="features-item text-center white-bg mt-30 item-2 wow fadeIn animated" data-wow-duration="2000ms" data-wow-delay="300ms">
                        <i class="fas fa-coins"></i>
                        <h4 class="title">Fondos comunes de inversión</h4>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-7">
                    <div class="features-item text-center white-bg mt-30 item-3 wow fadeIn animated" data-wow-duration="2000ms" data-wow-delay="600ms">
                        <i class="fas fa-chart-line"></i>
                        <h4 class="title">Mercado de capitales</h4>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-7">
                    <div class="features-item text-center white-bg mt-30 item-4 wow fadeIn animated" data-wow-duration="2000ms" data-wow-delay="900ms">
                        <i class="fas fa-hand-holding-usd"></i>
                        <h4 class="title">Compraventa de divisas</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!--====== TEAM PART START ======-->

    <section class="team-area pt-130 pb-130">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <div class="team-title">
                        <h3 class="title"><br><span>Secciones<span></span></span></h3>
                        <span>¡Descubre, analiza y experimenta!</span>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="row team-active">
                        <div class="col-lg-6">
                            <div class="team-item">
                                <img src="assets/images/Aprender.png" alt="team">
                                <div class="team-overlay">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="team-item">
                                <img src="assets/images/Planificar.png" alt="team">
                                <div class="team-overlay">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="team-item">
                                <img src="assets/images/Progreso.png" alt="team">
                                <div class="team-overlay">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="team-item">
                                <img src="assets/images/Simulador.png" alt="team">
                                <div class="team-overlay">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="team-item">
                                <img src="assets/images/Noticias.png" alt="team">
                                <div class="team-overlay">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!--====== WORKING PROCESS PART START ======-->

    <section class="working-process">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section-title text-center">
                        <h2 class="title"><span>Descubre tu camino<span></span></span></h2>
                        <p>Lleva tu propio ritmo y siéntete seguro 
                        </p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-3 col-md-6 col-sm-7">
                    <div class="working-item text-center item-1">
                        <i class="fas fa-box-open"></i>
                        <h5 class="title">Descubre</h5>
                        <p>Aprende de nuevas formas para invertir tu dinero</p>
                        <div class="dot-1">
                            <img src="assets/images/working-dot-1.png" alt="working">
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-7">
                    <div class="working-item text-center item-2">
                        <i class="fal fa-head-side-brain"></i>
                        <h5 class="title">Analiza</h5>
                        <p>Investiga los planes financieros que proporciona las entidades bancarias</p>
                        <div class="dot-2">
                            <img src="assets/images/working-dot-2.png" alt="working">
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-7">
                    <div class="working-item text-center item-3">
                        <i class="fas fa-bong"></i>
                        <h5 class="title">Experimenta</h5>
                        <p>Realiza pequeñas inversiones para incrementar tus finanzas</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-7">
                    <div class="working-item text-center item-4">
                        <i class="fas fa-award"></i>
                        <h5 class="title">Adquiere experiencia</h5>
                        <p>Mejora tus métodos de inversión y elige cual te conviene más, de acuerdo a tu crecimiento y capital</p>
                        <div class="dot-3">
                            <img src="assets/images/working-dot-1.png" alt="working">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="shape-1"></div>
        <div class="shape-2"></div>
        <div class="shape-3"></div>
        <div class="shape-4"></div>
    </section>



    

    <!--====== FOOTER PART START ======-->

    <footer class="footer-area pt-80">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer-logo text-center pb-45">
                        <a href="#"><img src="assets/images/footer-logo.png" alt=""></a>
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer-copyright justify-content-center">
                        <p>Copyright ©2021 | Aprende a Invertir</p>
                    </div>
                    <div class="back-top">
                        <a href="#" class="back-to-top">
                            <i class="fa fa-angle-up"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </footer>



    <!--====== jquery js ======-->
    <script src="assets/js/vendor/modernizr-3.6.0.min.js"></script>
    <script src="assets/js/vendor/jquery-1.12.4.min.js"></script>

    <!--====== Bootstrap js ======-->
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/popper.min.js"></script>

    <!--====== Slick js ======-->
    <script src="assets/js/slick.min.js"></script>

    <!--====== counterup js ======-->
    <script src="assets/js/jquery.counterup.min.js"></script>

    <!--====== nice select js ======-->
    <script src="assets/js/jquery.nice-select.min.js"></script>

    <!--====== waypoints js ======-->
    <script src="assets/js/waypoints.min.js"></script>

    <!--====== rangeSlider js ======-->
    <script src="assets/js/ion.rangeSlider.min.js"></script>

    <!--====== wow js ======-->
    <script src="assets/js/wow.min.js"></script>

    <!--====== Magnific Popup js ======-->
    <script src="assets/js/jquery.magnific-popup.min.js"></script>

    <!--====== Ajax Contact js ======-->
    <script src="assets/js/ajax-contact.js"></script>

    <!--====== Main js ======-->
    <script src="assets/js/main.js"></script>

</body>

</html>


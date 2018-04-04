<?php

    require "php/start_session.php";
    $_SESSION['passchange'] = "";
    $_SESSION['reg_sucesses '] = "";
    if((isset($_SESSION["email"])) && (isset($_SESSION["logged"]))){
        header("Location: home.php");
        exit();
    }
    
?>

    <!doctype html>
    <html lang="en">

    <head>
        <title>Neon | Welcome</title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- JQuery -->
        <script src="dist1/jquery-3.3.1.min.js"></script>
        <!-- CSS -->        
        <link rel="stylesheet" href="dist1/bootstrap.css">
        <link rel="stylesheet" href="css/index.css">
        <!-- JavaScript -->
        <script src="js/index.js"></script>
        <!-- Bootstrap -->
        <script src="dist1/bootstrap.bundle.js"></script>
        <!-- Font Awesome -->
        <script src="dist1/fontawesome-all.js"></script>
        <!-- beautifull scroll -->
        <script src="js/scroll-function.js"></script>
        <script src="js/smooth-scroll.js"></script>

    </head>

    <body>

        <!-- navigation -->

        <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
            <div class="container">
                <a href="" class="navbar-brand js-scroll-trigger">
                    <strong>Neon</strong>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                    Menu
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="collapsibleNavbar">
                    <ul class="navbar-nav ml-auto" id="">
                        <li class="nav-item">
                            <a class="nav-link" href="#main-section">What is Neon </a>
                        </li>
                        <li class="nav-item">
                            <a href="#neon-feature" class="nav-link">Feature</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#about-us">About Us </a>
                        </li>
                        <li class="nav-item ml-5">
                            <a class="nav-link" href="sign-in.php">
                                <span>
                                    <i class="fas fa-sign-in-alt"></i>
                                </span> Sign In </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="sign-up.php">
                                <span>
                                    <i class="fas fa-user-plus"></i>
                                </span> Create new account</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <header id="header-part">
            <div class="showcase-img">
            </div>
            <div class="container">
                <div class="header-text">
                    <h1 class="display-4 text-light text-center">Music Streming Website</h1>
                    <h1 class="display-1 text-light text-center">
                        <strong>Neon</strong>
                    </h1>

                </div>
                <div class="container text-center mt-5">
                    <a href="#main-section" class="btn btn-primary btn-xl text-uppercase sr-button">Tell me more </a>
                </div>
            </div>
        </header>

        <section id="main-section" class="pb-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h1 id="neon-title" class="display-2">What is Neon?</h1>
                    </div>
                </div>
                <br>
                <br>
                <div class="row text-center">
                    <div class="col-lg-6 win-left">
                        <img class="rounded" src="img/register-bg.jpeg" alt="">
                        <h1>
                            <small>Music for everyone</small>
                        </h1>
                        <p>We provide several kind of music</p>
                    </div>
                    <div class="col-lg-6 win-right">
                        <img src="img/register-bg.jpeg" alt="">
                        <h1>
                            <small>Music for everyone</small>
                        </h1>
                        <p>We provide several kind of music</p>
                    </div>
                </div>
                <div class="row text-center">
                    <div class="col-lg-6 win-left">
                        <img src="img/register-bg.jpeg" alt="">
                        <h1>
                            <small>Music for everyone</small>
                        </h1>
                        <p>We provide several kind of music</p>
                    </div>
                    <div class="col-lg-6 win-right">
                        <img src="img/register-bg.jpeg" alt="">
                        <h1>
                            <small>Music for everyone</small>
                        </h1>
                        <p>We provide several kind of music</p>
                    </div>
                </div>

            </div>
        </section>
        <br>
        <br>
        <br>

        <section id="neon-feature" class="py-5">
            <div class="container text-center">
                <h1 class="display-2">Feature</h1>
                <div id="feature-list" class="py-3">
                    <div class="row">
                        <div class="col-lg-4 win-left">
                            <h1>
                                <small>Click and Play</small>
                            </h1>
                        </div>
                        <div class="col-lg-4 win-middle">
                            <h1>
                                <small>Various music</small>
                            </h1>

                        </div>
                        <div class="col-lg-4 win-right">
                            <h1>
                                <small>Top 10 playlist</small>
                            </h1>

                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section id="about-us" class="py-5">
            <div class="container">
                <div class="row text-center">
                    <div class="col-sm-12 win-middle">
                        <h1 class="display-2">About Us</h1>
                        <div id="img-profile">
                            <img class="rounded-circle" src="img/jenwit-profile.jpg" alt="">
                            <br>
                            <br>
                            <h4>
                                <strong>Jenwit Suwech</strong>
                                <br>
                                <span>
                                    <i>15rssb7020</i>
                                </span>
                                <br>
                                <span>6th Semester BCA</span>
                                <div class="social-network">
                                    <br>
                                    <a href="http://www.facebook.com" class="text-dark win-left">
                                        <span>
                                            <i class="fab fa-facebook-square fa-2x"></i>
                                        </span>
                                    </a>
                                    <a href="www.instagram.com" class="text-dark win-right">
                                        <span>
                                            <i class="fab fa-instagram fa-2x"></i>
                                        </span>
                                    </a>
                                </div>
                            </h4>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <footer class="py-3 bg-dark">
            <div class="container-fluid text-center text-light">
                <p>
                    <strong>&copy; 2018, Neon </strong>
                </p>
            </div>
        </footer>

        <!-- <script>
            $(document).ready(function () {

                window.sr = ScrollReveal();
                sr.reveal(".navbar", {
                    duration: 2000,
                    origin: "bottom",
                });

                sr.reveal(".header-text", {
                    duration: 2000,
                    origin: "top",
                    distance: "300px"
                });

                sr.reveal("#header-part .btn", {
                    duration: 2000,
                    origin: "center",
                    delay: "2000"
                });

                sr.reveal("#neon-title", {
                    duration: 2000,
                    origin: "top",
                    distance: "300px",
                    viweFactor: 0.2
                });

                sr.reveal(".win-left", {
                    duration: 2000,
                    origin: "left",
                    distance: "300px",
                    viweFactor: 0.2
                });

                sr.reveal(".win-right", {
                    duration: 2000,
                    origin: "right",
                    distance: "300px",
                    viweFactor: 0.2
                });

                sr.reveal(".win-middle", {
                    duration: 2000,
                    origin: "bottom",
                    distance: "300px",
                    viweFactor: 0.2
                });

                sr.reveal(".display-2", {
                    duration: 2000,
                    origin: "top",
                    viweFactor: 0.2
                });

            });
        </script>

        <script>
            $('a[href*="#"]:not([href="#"])').click(function () {
                if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') &&
                    location.hostname == this.hostname) {
                    var target = $(this.hash);
                    target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                    if (target.length) {
                        $('html, body').animate({
                            scrollTop: target.offset().top
                        }, 1000);
                        return false;
                    }
                }
            });
        </script> -->


    </body>

    </html>
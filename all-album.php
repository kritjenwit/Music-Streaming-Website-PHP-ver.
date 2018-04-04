<?php

    session_start();   

    // TO Check which is login or not
    require "php/sign-in-check.php";
    // To show NAME of USER
    require "php/show-user-sign-in.php";

?>
    <!doctype html>
    <html lang="en">

    <head>
        <title>Neon | Album</title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- CSS -->
        <link rel="stylesheet" href="dist1/bootstrap.css">
        <link rel="stylesheet" href="css/album.css">
        <!-- JQuery -->
        <script src="dist1/jquery-3.3.1.min.js"></script>
        <script src="js/audio-controller.js"></script>
        <!-- Bootstrap -->
        <script src="dist1/bootstrap.bundle.js"></script>
        <!-- Font Awesome -->
        <script src="dist1/fontawesome-all.js"></script>
    </head>

    <style>
    @import "css/home.css";
    body{
        margin-top: 7.5%;
    }
    </style>

    <body>

        <!-- header section -> navbar  -->

        <header id="navigation">
            <nav class="navbar navbar-expand-sm bg-dark fixed-top navbar-dark">

                <a class="navbar-brand" href="home.php">
                    <i class="fas fa-headphones"></i>Neon</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="collapsibleNavbar">

                    <ul class="navbar-nav ml-auto" id="">
                        <li class="nav-item">
                            <span class="navbar-brand mb-0" id="profileName"> Welcome
                                <?php echo $_SESSION['email'] ?>
                            </span>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="profile.php">
                                <i class="fas fa-user"></i>Profile</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="php/sign-out.php">
                                <i class="fas fa-sign-out-alt"></i>Logout</a>
                        </li>
                    </ul>
                </div>

            </nav>
        </header>
        
        <section id="album">
            <div class="container">
                <br>
                <h1 class="display-4">
                    <a class="text-light" href="#">All Album</a>
                </h1>
                <div class="row">
                        <?php require "php/admin-panel/opt/show-album.php"; ?>
                </div>
            </div>
        </section>

        <audio src="" controls controlsList="nodownload" id="audioPlayer">
            Sorry! Your browser does not support audio player
        </audio>

        <section id="audio-player-controller">
            <nav class="navbar navbar-expand-sm navbar-dark bg-dark fixed-bottom">
                <div class="container">
                    <span class="navbar-text">Title:
                        <span class="navbar-text" id="audio-title"></span>
                    </span>

                    <ul class="navbar-nav" id="audio-control">
                        <li class="nav-item" id="">
                            <a id="back" href="" class="nav-link">
                                <i class="fas fa-step-backward"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a id="play" href="" class="nav-link">
                                <i class="fas fa-play"></i>
                            </a>
                        </li>
                        <li class="nav-item" id="">
                            <a id="pause" href="" class="nav-link">
                                <i class="fas fa-pause"></i>
                            </a>
                        </li>
                        <li class="nav-item" id="">
                            <a id="next" href="" class="nav-link">
                                <i class="fas fa-step-forward"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </section>

        <!-- Footer -> Copyright and some social media -->
        <footer class="mb-5">
            <div class="container-fluid">
                <div class="container py-4 text-center text-light">
                    <p> &copy;Copyright Neon</p>
                    <p>
                        <span>
                            <a href="http://www.facebook.com">
                                <i class="fab fa-facebook-square fa-2x"></i>
                            </a>
                            <a href="http://www.instagram.com">
                                <i class="fab fa-instagram fa-2x"></i>
                            </a>
                        </span>
                    </p>
                </div>
            </div>
        </footer>

    </body>

    </html>
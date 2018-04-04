<?php

    session_start();   

    // TO Check which is login or not
    require "php/sign-in-check.php";
    // To show NAME of USER
    require "php/show-user-sign-in.php";

?>

<!-- HTML -->

<!doctype html>
<html lang="en">

<head>
    <title>Neon | Home</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSS -->
    <link rel="stylesheet" href="dist1/bootstrap.css">
    <link rel="stylesheet" href="css/home.css">
    <!-- JQuery -->
    <script src="dist1/jquery-3.3.1.min.js"></script>
    <script src="js/homepage-player.js"></script>
    <!-- Bootstrap -->
    <script src="dist1/bootstrap.bundle.js"></script>
    <!-- Font Awesome -->
    <script src="dist1/fontawesome-all.js"></script>

</head>

<body>



    <!-- header section -> navbar  -->

    <header id="navigation">
        <nav class="navbar navbar-expand-sm bg-dark fixed-top navbar-dark">
            <div class="container">
                <a class="navbar-brand" href="home.php">
                    <i class="fas fa-headphones"></i>Neon</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="collapsibleNavbar">

                    <ul class="navbar-nav ml-auto" id="">
                        <li class="nav-item">
                            <span class="navbar-brand mb-0" id="profileName"> Welcome:
                                <?php echo $_SESSION['name'] ?>
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
            </div>
        </nav>
    </header>


    <section id="banner">
        <div class="jumbotron jumbotron-fluid" id="banner">
            <div class="container">
                <div id="banner-head">
                    <h1 class="display-1">Something Here</h1>
                    <p>Somthing Here</p>
                </div>
            </div>
        </div>
    </section>

    <section id="sub-menu">
        <div class="container">
            <div class="d-flex justify-content-center">
                <ul class="nav nav-pills">
                    <li class="nav-item">
                        <a href="home.php" class="nav-link active text-light">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="listen-now.php" class="nav-link text-light">Listen Now</a>
                    </li>

                    <li class="nav-item">
                        <a href="#" class="nav-link text-light">Another link</a>
                    </li>
                    <li class="nav-item text-light">
                        <input type="search" name="search" id="search">
                        <button class="btn btn-link">
                            <i class="fas fa-search"></i>
                        </button>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <section id="new-release">
        <div class="container">
            <br>
            <h1 class="display-4">
                <a class="text-light" href="all-music.php">New Release</a>
            </h1>
            <br>
            <div class="row">
                <div class="container table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <th>Cover</th>
                            <th>Music name</th>
                            <th>Artist</th>
                        </thead>
                        <tbody id="playlist">
                            <?php require "php/admin-panel/opt/show-music.php"; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

    <!-- Section album -->

    <section id="album">
        <div class="container">
            <br>
            <h1 class="display-4">
                <a class="text-light" href="all-album.php">Album</a>
            </h1>
            <div class="row">
                    <?php require "php/admin-panel/opt/show-album.php"; ?>
            </div>
        </div>
    </section>

    <section id="audio-controller">

        <audio src="" id="audio-player">
            Your browser cannot play music file!
        </audio>

        <nav class="navbar navbar-expand-sm navbar-dark bg-dark fixed-bottom">
            <div class="container">
                <span class="navbar-text">Title:
                    <span class="navbar-text" id="audio-title"></span>
                </span>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <div id="tracker">
                            <div id="progressBar">
                                <span id="progress"></span>
                            </div>
                            <span id="duration"></span>
                        </div>
                    </li>
                </ul>
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
    <footer>
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

    <?php $_SESSION['reg_sucesses']="";?>


</body>

</html>
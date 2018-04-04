<?php session_start(); ?>

<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- JQuery -->
    <script src="dist1/jquery-3.3.1.min.js"></script>
    <!-- CSS -->
    <link rel="stylesheet" href="dist1/bootstrap.css">
    <style>
        @import "css/template-for-all.css";
        body{
            margin-top:9.5%;
        }
    </style>
    <!-- Bootstrap -->
    
    <script src="dist1/bootstrap.bundle.js"></script>
    <!-- JQuery -->
    <script src="dist1/jquery-3.3.1.min.js"></script>
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
                            <span class="navbar-brand mb-0" id="profileName"> Welcome
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

    <section id="music-body">
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <div class="card">
                        <div class="card-header">
                            <h1 class="display-4">Listen Now</h1>
                        </div>
                        <div class="card-body">
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
            </div>
        </div>
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

</body>

</html>
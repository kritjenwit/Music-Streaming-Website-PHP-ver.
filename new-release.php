<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSS -->
    <link rel="stylesheet" href="">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="dist1/bootstrap.css">
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

    <section id="music-body">
        <div class="container">
            <div class="row">
                <div class="col-sm-2"></div>
                <div class="col-sm-8">
                    <div class="container text-center">
                        <a href="">
                            <img src="../../music/album/april-3rd-mini-album/cover.jpg" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-sm-2"></div>
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
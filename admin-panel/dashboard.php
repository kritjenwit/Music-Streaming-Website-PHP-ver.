<?php session_start(); require "../php/admin-panel/admin-check.php";  require "../php/admin-panel.php";?>

<!doctype html>
<html lang="en">

<head>
    <title>Neon Admin | Dashboard</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSS -->
    <link rel="stylesheet" href="">
    <!-- JQuery -->
    <script src="../dist1/jquery-3.3.1.min.js"></script>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="../dist1/bootstrap.css">
    <script src="../dist1/bootstrap.bundle.js"></script>
    <!-- Font Awesome -->
    <script src="../dist1/fontawesome-all.js"></script>
</head>

<style>
    #dashboard a {
        text-decoration: none;
    }

    #dashboard .card-body {
        color: #333;
        background-color: lightgray;
    }
</style>

<body class="">

    <nav class="navbar navbar-dark bg-dark navbar-expand-sm" id="top-nav">
        <a href="dashboard.php?user-table=1&music-table=1&album-table=1" class="navbar-brand">Neon Admin</a>

        <!-- Toggler/collapsibe Button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navbar links -->
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item ">
                    <span class="navbar-brand">
                        <?php echo $_SESSION['admin_name'] ?>
                    </span>
                </li>
                <li class="nav-item">
                    <a href="../php/admin-panel/admin-sign-out.php" class="nav-link">Logout</a>
                </li>
            </ul>
        </div>
    </nav>

    <ul class="nav justify-content-center nav-pills p-3 bg-secondary">
        <li class="nav-item">
            <a class="nav-link active" href="#">Dashboard</a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-light" href="#" id="navbardrop" data-toggle="dropdown">Table</a>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="#user-table">User</a>
                <a class="dropdown-item" href="#music-table">Music</a>
                <a class="dropdown-item" href="#album-table">Album</a>

            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link text-light" href="add-music.php">Add music or album</a>
        </li>
    </ul>

    <div class="container pt-5">
        <ul class="breadcrumb">
            <li class="breadcrumb-item active">
                Dashboard
            </li>

        </ul>
    </div>

    <section id="dashboard">
        <div class="container text-center my-5">
            <div class="row">
                <div class="col-lg-4">
                    <a href="#user-table">
                        <div class="container">
                            <div class="card">
                                <div class="card-body">
                                    <h3>User</h3>
                                    <h3>
                                        <?php require "../php/admin-panel/count-user.php" ?>
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4">
                    <a href="#album-table">
                        <div class="container">
                            <div class="card">
                                <div class="card-body">
                                    <h3>Album</h3>
                                    <h3>
                                        <?php require "../php/admin-panel/count-album.php" ?>
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4">
                    <a href="#music-table">
                        <div class="container">
                            <div class="card">
                                <div class="card-body">
                                    <h3>Music</h3>
                                    <h3>
                                        <?php require "../php/admin-panel/count-music.php" ?>
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- User Table  -->

    <section id="user-table">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            User Table
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>User ID</th>
                                            <th>Email</th>
                                            <th>Password</th>
                                            <th>Firstname</th>
                                            <th>Lastname</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php require "../php/admin-panel/show-data-table/show-table-user.php"; ?>
                                    </tbody>

                                </table>
                                <ul class="pagination">
                                    <li class="page-item">
                                        <a class="page-link" href="#">Previous</a>
                                    </li>
                                    <?php require "../php/admin-panel/page-no/user-table.php"; ?>
                                    <li class="page-item">
                                        <a class="page-link" href="#">Next</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <br>

    <!-- Music Table -->

    <section id="music-table" class="mb-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            Music Table
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Music ID</th>
                                            <th>Music Name</th>
                                            <th>Artist</th>
                                            <th>Music Cover</th>
                                            <th>File url</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php require "../php/admin-panel/show-data-table/show-table-music.php"; ?>
                                    </tbody>

                                </table>
                                <ul class="pagination">
                                    <li class="page-item">
                                        <a class="page-link" href="#">Previous</a>
                                    </li>
                                    <?php require "../php/admin-panel/page-no/music-table.php"; ?>
                                    <li class="page-item">
                                        <a class="page-link" href="#">Next</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>

    <!-- Album Table -->

    <section id="album-table" class="mb-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            Album Table
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>                                           
                                            <th>Album Name</th>
                                            <th>Artist</th>
                                            <th>Album Cover</th>                                        
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php require "../php/admin-panel/show-data-table/show-table-album.php"; ?>
                                    </tbody>

                                </table>
                                <ul class="pagination">
                                    <li class="page-item">
                                        <a class="page-link" href="#">Previous</a>
                                    </li>
                                    <?php require "../php/admin-panel/page-no/album-table.php"; ?>
                                    <li class="page-item">
                                        <a class="page-link" href="#">Next</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
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

</body>

</html>
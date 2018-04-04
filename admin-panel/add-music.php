<?php session_start(); require "../php/admin-panel/admin-check.php"; require "../php/admin-panel/opt/add-music.php"; ?>

<!doctype html>
<html lang="en">

<head>
    <title>Neon Admin | Add music or album</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSS -->
    <!-- <link rel="stylesheet" href=""> -->
    <!-- JQuery -->
    <script src="../dist1/jquery-3.3.1.min.js"></script>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="../dist1/bootstrap.css">
    <script src="../dist1/bootstrap.bundle.js"></script>
    <!-- Font Awesome -->
    <script src="../dist1/fontawesome-all.js"></script>



    <style>
        body {
            height: 100%;
        }

        .del-line a {
            text-decoration: none;
        }

        section .card-body {
            color: #333;
            background-color: lightgray;
        }

        #add-music,
        #add-al {
            top: 15vh;
        }

        footer {
            position: absolute;
            bottom: 0;
            width: 100%;
        }
    </style>

</head>

<body>

    <!-- 
        Header for admin panel 
    -->

    <div id="wrapper">
        <header>
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
                    <a class="nav-link text-light" href="dashboard.php?user-page=1">Dashboard</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-light" href="#" id="navbardrop" data-toggle="dropdown">Table</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#user-table">User</a>
                        <a class="dropdown-item" href="#artist-table">Artist</a>
                        <a class="dropdown-item" href="#music-table">Music</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light active" href="add-music.php">Add music or album</a>
                </li>
            </ul>

            <div class="container pt-5">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="dashboard.php">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item active">
                        Add music and album
                    </li>
                </ul>
            </div>
        </header>


        <!--
            TODO from here 
        -->

        <section class="mt-5 text-center ">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6  del-line">
                        <a href="" data-toggle="modal" data-target="#add-music">
                            <div class="card">
                                <div class="card-body">
                                    <h3 class="py-4 display-4">Add music</h3>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-6 del-line">
                        <a href="" data-toggle="modal" data-target="#add-al">
                            <div class="card">
                                <div class="card-body">
                                    <h3 class="py-4 display-4">Add Album</h3>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>



        <!-- Add music mondal -->
        <div class="modal fade" id="add-music">
            <div class="modal-dialog">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header bg-dark text-light">
                        <h4 class="modal-title">Add Music</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                        <form action="../php/admin-panel/opt/add-music.php" class="was-validated" method="POST" enctype="multipart/form-data">
                            <input type="text" class="form-control" name="music_name" placeholder="Music name" required>
                            <br>
                            <input type="text" class="form-control" name="music_artist" placeholder="Artist name" required>
                            <br>
                            <span>Music Cover</span>
                            <input type="file" class="form-control" name="music_cover" id="music-cover" placeholder="" required accept="image/*"> 
                            <br>
                            <span>Music file</span>
                            <input type="file" class="form-control" name="music_file" placeholder="" required accept="audio/*">
                            <br>
                            <button class="btn btn-block btn-success" name="music_upload">Upload file</button>
                        </form>
                    </div>

                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                    </div>

                </div>
            </div>
        </div>

        <!-- Add album mondal -->
        <div class="modal fade" id="add-al">
            <div class="modal-dialog">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header  bg-dark text-light">
                        <h4 class="modal-title">Add Album</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                        <form action="../php/admin-panel/opt/add-album.php" class="was-validated" method="POST" enctype="multipart/form-data">
                            <input type="text" class="form-control" name="album_name" placeholder="Album name" required>
                            <br>
                            <input type="text" class="form-control" name="album_artist" placeholder="Artist name" required>
                            <br>
                            <input type="text" class="form-control" name="album_music_name" placeholder="Music name" required>
                            <br>
                            <span>Album Cover</span>
                            <input type="file" class="form-control" name="album_cover" placeholder="" accept="image/*" required>
                            <br>
                            <span>Album file</span>
                            <input type="file" class="form-control" name="album_file" placeholder="" accept="audio/*" required>
                            <br>
                            <button class="btn btn-block btn-success" name="album_upload">Upload file</button>
                        </form>
                    </div>

                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                    </div>

                </div>
            </div>
        </div>

        <footer class="py-3 bg-dark">
            <div class="container-fluid text-center text-light">
                <p>
                    <strong>&copy; 2018, Neon </strong>
                </p>
            </div>
        </footer>
    </div>

    <script>
        $(document).ready(function(){
            var musicCover = $("#music-cover").val();
            if(musicCover == ''){
                alert("Please select Type of upload");
                return false;
            }else{
                var extension = $("#music-cover").val().split('.').pop().toLowerCase();
                if(jQuery.inArray(extension,['gif'],['png'],['jpg'],['jpeg']) == -1){
                    alert("Invalid Image file");
                    $("#music-cover").val('');
                    return false;
                }
            } 
        });
    </script>

</body>

</html>
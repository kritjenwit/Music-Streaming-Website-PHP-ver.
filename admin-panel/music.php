<?php require "../php/for-admin-panel/admin-check.php"; ?> 

<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous">
    <link rel="stylesheet" href="css/admin-panel.css">
</head>

<body>

    <nav class="navbar bg-dark navbar-dark">
        <a href="#" class="navbar-brand">
            <strong>Neon
                <small>Admin</small>
            </strong>
        </a>
        <ul class="navbar-nav">
            <li class="nav-item">
                <a href="php/sign-out.php" class="nav-link">Log out</a>
            </li>
        </ul>
    </nav>

    <header id="dashboard">
        <div class="row">
            <div class="col-sm-2 bg-dark ">
                <nav class="navbar">
                    <ul class="navbar-nav ml-2">
                        <li class="nav-item">
                            <img src="test.jpg" alt="" class="rounded-circle">
                            <span class="text-light">
                                <?php echo $_SESSION['admin_name']; ?>
                            </span>
                        </li>
                        <br>
                        <li class="nav-item mt-3">
                            <a href="" class="nav-link">Dashboard</a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link">User</a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link">Artist</a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link">Song</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
</body>

</html>
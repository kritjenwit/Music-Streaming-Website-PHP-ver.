<?php session_start(); 


    require "encrypt-decrypt.php";
    $conn = new mysqli("localhost","root","","project");

    $_SESSION["message"]="";

    if(isset($_POST['confirm-email-btn'])){
        $email = $conn->real_escape_string($_POST['email']);

        // Encrypt Data
        $encrypt_email = convert_string('e',$email);

        $data = $conn->query("SELECT * from encrypt_userinfo where email = '".$encrypt_email."' ");
        if($data->num_rows> 0){
            $_SESSION["confirmEmail"]=$encrypt_email;
            header("location: change-pass.php");
        }else{
            $_SESSION["message"]= "Invalid Email please try again";
        }
    }


?>

<!doctype html>
<html lang="en">

<head>
    <title>Neon | Forgot Password</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSS --> 
    <style>
        body{
            margin-top: 14.5%;
            background-image: url("../img/forgot-pass-bg.jpeg");
            background-size:cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }
    </style>
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
        <nav class="navbar navbar-expand-sm navbar-dark fixed-top">
            <div class="container">
                <a href="home.php" class="navbar-brand">Neon</a>
                <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                        <span class="navbar-toggler-icon"></span>
                    </button> -->
                <div class="collapse navbar-collapse" id="collapsibleNavbar">
                    <ul class="navbar-nav ml-auto" id="">
                        <li class="nav-item">
                            <a class="nav-link" href="sign-in.php">
                                <span>
                                    <i class="fas fa-sign-in-alt"></i>
                                </span> Sign In </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="sign-up.php">
                                <span>
                                    <i class="fas fa-user-plus"></i>
                                </span> Create new account </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <section id="forgot-pass">
        <div class="container">
            <div class="row">
                <div class="col-sm-2"></div>
                <div class="col-sm-8">
                    <div class="card">
                        <div class="card-body">
                            <form method="POST" class="was-validated">
                                <h1 class="display-4 text-center">Confirm Email</h1>
                                <div class="form-group">
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Email" required pattern=".[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{3}$"
                                        title="Please enter format of email correctly">
                                    <span class="text-danger">
                                        <?php echo $_SESSION['message'] ?>
                                    </span>
                                    <br>
                                    <button id="confirm-email-btn" name="confirm-email-btn" class="btn btn-dark btn-block">Confirm</button>
                                </div>
                            </form>
                        </div>
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
<?php session_start(); 

    require "php/encrypt-decrypt.php";
    $conn = new mysqli("localhost","root","","project");

    $_SESSION['error']= "";

    // This is used to keep the user logged in website //

    if((isset($_SESSION["email"])) && (isset($_SESSION["logged"]))){
        header("Location: home.php");
        exit();
    }

    // Press Sign in and do this operation //

    if(isset($_POST["sign-in"])){



    // function to prevent the SQL injection //
    // Original Data
    $email = $conn->real_escape_string($_POST["email"]);
    $password = $conn->real_escape_string($_POST["password"]);

    // Encrypt Data

    $encrypt_email = convert_string('e',$email);
    $encrypt_password = convert_string('e',$password);

    // Database part
    // Check data in database 
    $data = $conn->query("SELECT * from encrypt_userinfo where email = '".$encrypt_email."' and password = '".$encrypt_password."' ");

    if($data->num_rows > 0 ){
        $_SESSION["email"]=$email;
        $_SESSION["logged"]= "logged";
        
        $_SESSION['encrypt_email']=$encrypt_email;
        
        header("Location: home.php");
        exit();
    }else{
        
        // If email or password is not available in database ;
        $_SESSION['error']= "Invalid email or password. Please try again";
    }
    }



?>

<!doctype html>
<html lang="en">

<head>
    <title>Neon | Sign in</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSS -->
    <link rel="stylesheet" href="css/sign-in.css">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="dist1/bootstrap.css">
    <script src="dist1/bootstrap.bundle.js"></script>
    <!-- JQuery -->
    <script src="dist1/jquery-3.3.1.min.js"></script>
    <!-- Font Awesome -->
    <script src="dist1/fontawesome-all.js"></script>
</head>

<body>

    <div id="wrapper">
        <!-- header section -> navbar  -->

        <header id="navigation">
            <nav class="navbar navbar-expand-sm navbar-dark fixed-top">
                <div class="container">
                    <a href="home.php" class="navbar-brand">Neon
                        <span>
                            <i class="fas fa-play"></i>
                        </span>
                    </a>
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
                            <li class="nav-item">
                                <a class="nav-link" href="admin-sign-in.php">
                                    <small>Sign in as Admin</small>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>

        <!-- Login Form here -->

        <section id="login-form">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2"></div>
                    <div class="col-lg-8">
                        <h1 class="display-1">Sign in</h1>

                        <br>
                        <div class="row">
                            <div class="col-lg-2"></div>
                            <div class="col-lg-8">
                                <form action="" method="post" class="was-validated">
                                    <input class="form-control" type="text" name="email" id="email" placeholder="email" required pattern=".[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{3}$"
                                        title="Please Enter format of email correctly">
                                    <br>
                                    <input type="password" class="form-control" name="password" placeholder="password" required>
                                    <br>
                                    <button class="btn btn-block btn-primary" name="sign-in">Sign In</button>
                                    <br>
                                    <span class="text-danger">
                                        <?php echo $_SESSION['error']; ?>
                                    </span>
                                    <span class="text-success">
                                        <?php echo $_SESSION['passchange']; echo $_SESSION['reg_sucesses'] ?>
                                    </span>
                                </form>
                            </div>
                            <div class="col-lg-2"></div>
                        </div>
                    </div>
                    <div class="col-lg-2"></div>
                </div>
            </div>
        </section>

        <section id="extension">
            <div class="contianer text-center">
                <a href="sign-up.php">Dose not have an account?. Sign up here</a>
            </div>
            <div class="contiainer text-center">
                <a href="forgot-pass.php">Forgot your password.</a>
            </div>
            <div class="container text-center">

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
    </div>

    <!-- Clear session from php -->
    <?php echo $_SESSION['passchange']=""; $_SESSION['error']=""; $_SESSION['reg_sucesses']='';?>


</body>

</html>
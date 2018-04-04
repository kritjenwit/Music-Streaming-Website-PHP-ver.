<?php session_start(); 

    require "encrypt-decrypt.php";
    $_SESSION['error']="";

    if(isset($_POST['btn-confirm'])){
        $conn = new mysqli("localhost","root","","project");
        $pass = $conn->real_escape_string($_POST['pass']);
        $repass = $conn->real_escape_string($_POST['repass']);

        // encrypt data
        $encrypt_pass = convert_string('e',$pass);
        $encrypt_repass = convert_string('e',$repass);

        $data = $conn->query("UPDATE encrypt_userinfo set password = '".$encrypt_pass."' where email='".$_SESSION['confirmEmail']."' ");

        if($encrypt_pass == $encrypt_repass){
            if($data === true){
                header("Location: sign-in.php");
                $_SESSION['passchange']="Your password has been changed";
                
            }else{
                $_SESSION['error']="Failed to change your password. Please try again";
            }
        }else{
            $_SESSION['error']="Password and Confirm password should be same"; 
        }
        
    }


?>

<!doctype html>
<html lang="en">

<head>
    <title>Neon | Change Password</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSS -->
    <link rel="stylesheet" href="css/change-pass.css">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="dist1/bootstrap.css">
    <script src="dist1/bootstrap.bundle.js"></script>
    <!-- JQuery -->
    <script src="dist1/jquery-3.3.1.min.js"></script>
    <!-- Font Awesome -->
    <script src="dist1/fontawesome-all.js"></script>

    <style>
        @import "template-for-all.css";

        body{
            margin-top: 10.5%;
            background-image: url("../img/forgot-pass-bg.jpeg");
            background-size: cover;
        }
    </style>

</head>


<body>

    <!-- header section -> navbar  -->

    <header id="navigation">
        <nav class="navbar navbar-expand-sm navbar-dark fixed-top">
            <div class="container">
                <a href="" class="navbar-brand">Neon
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
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <section id="change-pass">
        <div class="container">
            <div class="row">
                <div class="col-lg-2"></div>
                <div class="col-lg-8">
                    <div class="card">
                        <div class="card-body">
                            <h1 class="display-4 text-center">Change Password</h1>
                            <form action="" method="post" class="was-validated">
                                <div class="form-group">
                                    <input type="password" class="form-control" id="pass" name="pass" placeholder="Enter new password" required pattern=".{6,}">
                                    <br>
                                    <input type="password" class="form-control" id="repass" name="repass" placeholder="Confirm Password" required pattern=".{6,}">
                                    <span id="result" class="text-danger">
                                        <?php echo $_SESSION['error'] ?>
                                    </span>
                                    <br>
                                    <button class="btn btn-dark btn-block btn-lg" id="btn-confirm" name="btn-confirm">Confirm</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2"></div>
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
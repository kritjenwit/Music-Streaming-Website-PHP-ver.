<?php session_start();

    require "php/encrypt-decrypt.php";
    $conn = new mysqli("localhost","root","","project");
    $_SESSION['message']="";

    if(isset($_POST["btnRegister"])){
    
        
        // Original Data

        $email = $conn->real_escape_string($_POST["email"]);
        $password = $conn->real_escape_string($_POST["password"]);
        $fname = $conn->real_escape_string($_POST["fname"]);
        $lname = $conn->real_escape_string($_POST["lname"]);

        // Encrypt Data

        $encrypt_email = convert_string('e',$email);
        $encrypt_password = convert_string('e',$password);
        $encrypt_fname = convert_string('e',$fname);
        $encrypt_lname = convert_string('e',$lname);

        // Check email in database 
        $checkEmail = $conn->query("SELECT 'email' FROM encrypt_userinfo WHERE email = '".$encrypt_email."' ");
        // If  Yes TODO.. here
        if($checkEmail->num_rows > 0){
            $_SESSION['message'] = "This email is already registered, Please try another email...";
        // if No -> add data to database with encryption
        }else{
            // $registerLoginQuery = $conn->query(" INSERT INTO encrypt_login (user_id,email, password) VALUES('NULL', '".$encrypt_email."', '".$encrypt_password."') ");
            $registerUserinfoQuery = $conn->query("INSERT INTO encrypt_userinfo (user_id, firstname, lastname, email,password) VALUES('NULL','".$encrypt_fname."', '".$encrypt_lname."','".$encrypt_email."','".$encrypt_password."') ");

            if(($registerUserinfoQuery) === true){
                $_SESSION['reg_sucesses']="Register Sucessfully";
                header("Location: sign-in.php");
            }else{
                $_SESSION['message']="Error to connect database";
            }
        }
    }


?>

<!doctype html>
<html lang="en">

<head>
    <title>Neon | Sign up</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSS -->
    <link rel="stylesheet" href="css/sign-up.css">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="dist1/bootstrap.css">
    <script src="dist1/bootstrap.bundle.js"></script>
    <!-- JQuery -->
    <script src="dist1/jquery-3.3.1.min.js"></script>
    <!-- Font Awesome -->
    <script src="dist1/fontawesome-all.js"></script>
</head>

<body>

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
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <!-- header section -> navbar  -->


    <section id="home">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="row">
                        <div class="col-lg-8 text-light">
                            <h1 class="display-1">Sign Up today</h1>
                            <h1 class="display-4">- You can listen varity of music</h1>
                            <h1 class="display-4">- Download is available for you</h1>
                            <h1 class="display-4">- Totally Free for all user</h1>
                            <br>
                        </div>

                        <div class="col-lg-4">
                            <div class="card bg-dark">
                                <div class="container">
                                    <h1 class="display-4 text-light text-center">Sign Up here</h1>
                                    <br>
                                    <form action="" class="was-validated" method="POST">
                                        <div class="form-group">
                                            <input type="email" class="form-control" name="email" placeholder="E-mail" required pattern=".[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{3}$"
                                                title="Please enter format of email correctly">
                                            <br>
                                            <input type="password" class="form-control" name="password" placeholder="Password minimum 6 character" required pattern=".{6,}"
                                                title="Please enter minimum 6 character">
                                            <br>
                                            <input type="password" class="form-control" name="repassword" placeholder="Confirm password" required pattern=".{6,}" title="Please enter minimum 6 character">
                                            <br>
                                            <input type="text" class="form-control" name="fname" placeholder="First name" required pattern="[A-Za-z]{1,}" title="Enter only character">
                                            <br>
                                            <input type="text" class="form-control" name="lname" placeholder="Last name" required pattern="[A-Za-z]{1,}" title="Enter only character">

                                            <span id="result" class="text-danger">
                                                <?php echo $_SESSION['message'] ?>
                                            </span>

                                            <br>
                                            <input type="submit" class="btn btn-primary btn btn-block" name="btnRegister" value="Sign Up">
                                            <br>
                                            <a href="sign-in.php">
                                                <p class="text-center">Already sign up? Login here</p>
                                            </a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

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